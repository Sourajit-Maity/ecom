<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as HttpRequest;
use App\Models\Faq;
use App\Models\Review;
use App\Models\ProductionTime;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\AddAddress;
use App\Models\BillingAddress;
use App\Models\ShippingAddress;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use App\Models\Faqpage;
use App\Models\Aboutpage;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\Homepage;
use App\Models\ContactUsForm;
use App\Models\Contactuspage;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use FedEx\RateService\Request;
use FedEx\RateService\ComplexType;
use FedEx\RateService\SimpleType;
use App\Models\Payment;
use Stripe;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function addAddress()
    {
        $state = State::with('countries')->where('active', 1)->pluck('id','state_name');
        $city = City::with('state')->where('active', 1)->pluck('id','city_name');
        $country = Country::where('active', 1)->pluck('id','country_name'); 
        return view('Welcome.add-address',compact('state','city','country'));
    }
    public function saveAddress(HttpRequest $request)
    {
        //Log::debug("register".print_r($request->all(), true));
        //dd($request->all());
        
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'nick_name' => 'required',
            'phone' => 'required|regex:/^([0-9\s+\(\)]*)$/',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);
       
    
         $inputs = $request->all();
         $user=new AddAddress($inputs);
         $user->user_id=auth()->user()->id;
         $user->save();
    
        return redirect()->route('welcome.saved-address')
                        ->with('success','Address Stored successfully.');
    }
    public function editAddress($id)
    {
        
        $userid= Auth::user()->id;
        $countryid = AddAddress::where('user_id',$userid)->value('country');
        $stateid = AddAddress::where('user_id',$userid)->value('state');
        $oldcountry = Country::where('id',$countryid)->pluck('id','country_name');
        $oldstate = State::where('id',$stateid)->pluck('id','state_name');
        $state = State::with('countries')->where('active', 1)->pluck('id','state_name');
        $country = Country::where('active', 1)->pluck('id','country_name'); 
        $address = AddAddress::where('user_id', $userid)->findOrFail($id);
        //dd($address);
        return view('Welcome.edit-address',compact('country','state','address','oldcountry','oldstate'));
    }
    public function updateAddress(HttpRequest $request,$id)
    {
        //Log::debug("register".print_r($request->all(), true));
        //dd($request->all());
       
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'nick_name' => 'required',
            'phone' => 'required|regex:/^([0-9\s+\(\)]*)$/',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);
       

        $user= AddAddress::findOrFail($id);
         $inputs = $request->all();    
         $user->update($inputs);     
    
        return redirect()->route('welcome.saved-address')
                        ->with('success','Updated successfully.');
    }
    public function deleteAddress(HttpRequest $request,$id)
    {

        AddAddress::where('id',$id)->delete();
        
        return redirect()->back()
                        ->with('success','Deleted successfully.');
    }

    public function billingAddress()
    {
        $userid= Auth::user()->id;
        $address = AddAddress::where('user_id', $userid)->pluck('id','street_address');
        $state = State::with('countries')->where('active', 1)->pluck('id','state_name');
        $city = City::with('state')->where('active', 1)->pluck('id','city_name');
        $country = Country::where('active', 1)->pluck('id','country_name'); 
        $productiontimes = ProductionTime::get();

        $totals = OrderDetails::
        join('orders', 'orders.id', '=', 'order_details.order_id')
        ->select(DB::raw('sum(order_details.quantity*order_details.price) AS Total'))
        ->where('orders.status',1)
        ->where('orders.user_id',auth()->id())
        ->first();
        
        $ordervalue = Order::where('orders.status',1)
        ->where('orders.user_id',auth()->id())
        ->value('payment_price');$ordervalue = Order::where('orders.status',1)
        ->where('orders.user_id',auth()->id())
        ->value('payment_price');       
        $subtotal = $totals['Total'] + $ordervalue;  

        return view('Welcome.billing-address',compact('state','country','address','productiontimes','subtotal'));
    }

    public function savebillingDetails(HttpRequest $request)
    {

        //dd($request->all());
        //  // //fedex start
        //  $rateRequest = new ComplexType\RateRequest();

        //  //authentication & client details
        //  $rateRequest->WebAuthenticationDetail->UserCredential->Key = 'AE3Ux9wjmhbN359l';
        //  $rateRequest->WebAuthenticationDetail->UserCredential->Password = '8EMkFHPsnHcdO2LaR9nendxB2';
        //  $rateRequest->ClientDetail->AccountNumber = 510088000;
        //  $rateRequest->ClientDetail->MeterNumber = 119238823;

        //  $rateRequest->TransactionDetail->CustomerTransactionId = 'testing rate service request';

        //  //version
        //  $rateRequest->Version->ServiceId = 'crs';
         
        //  $rateRequest->Version->Major = 28;
        //  $rateRequest->Version->Minor = 0;
        //  $rateRequest->Version->Intermediate = 0;
         
        //  $rateRequest->ReturnTransitAndCommit = true;
         
        //  //shipper
        //  $rateRequest->RequestedShipment->PreferredCurrency = 'USD';
         
        //  $rateRequest->RequestedShipment->Shipper->Address->StreetLines = ['10 Fed Ex Pkwy'];
        //  $rateRequest->RequestedShipment->Shipper->Address->City = 'Memphis';
        //  $rateRequest->RequestedShipment->Shipper->Address->StateOrProvinceCode = 'TN';
        //  $rateRequest->RequestedShipment->Shipper->Address->PostalCode = 38115;
        //  $rateRequest->RequestedShipment->Shipper->Address->CountryCode = 'US';
         
        //  //recipient
        //  $rateRequest->RequestedShipment->Recipient->Address->StreetLines = $request->get('shipping_street_address');
        //  $rateRequest->RequestedShipment->Recipient->Address->City = $request->get('shipping_city');
        //  $rateRequest->RequestedShipment->Recipient->Address->StateOrProvinceCode = $request->get('shipping_state');
        //  $rateRequest->RequestedShipment->Recipient->Address->PostalCode = $request->get('shipping_postal_code');
        //  $rateRequest->RequestedShipment->Recipient->Address->CountryCode = $request->get('shipping_country');
         
        //  //shipping charges payment
        //  $rateRequest->RequestedShipment->ShippingChargesPayment->PaymentType = SimpleType\PaymentType::_SENDER;
         
        //  //rate request types
        //  $rateRequest->RequestedShipment->RateRequestTypes = [SimpleType\RateRequestType::_PREFERRED, SimpleType\RateRequestType::_LIST];
         
        //  $rateRequest->RequestedShipment->PackageCount = 2;
         
        //  //create package line items
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems = [new ComplexType\RequestedPackageLineItem(), new ComplexType\RequestedPackageLineItem()];
         
        //  //package 1
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Weight->Value = 2;
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Weight->Units = SimpleType\WeightUnits::_LB;
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Length = 10;
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Width = 10;
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Height = 3;
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Units = SimpleType\LinearUnits::_IN;
        //  $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->GroupPackageCount = 1;
         
         
        //  $rateServiceRequest = new Request();
        //  //$rateServiceRequest->getSoapClient()->__setLocation(HttpRequest::PRODUCTION_URL); //use production URL
         
        //  $rateReply = $rateServiceRequest->getGetRatesReply($rateRequest); // send true as the 2nd argument to return the SoapClient's stdClass response.
         

        //  if (!empty($rateReply->RateReplyDetails)) {
        //      foreach ($rateReply->RateReplyDetails as $rateReplyDetail) {
        //          var_dump($rateReplyDetail->ServiceType);
        //          if (!empty($rateReplyDetail->RatedShipmentDetails)) {
        //              foreach ($rateReplyDetail->RatedShipmentDetails as $ratedShipmentDetail) {
        //                  var_dump($ratedShipmentDetail->ShipmentRateDetail->RateType . ": " . $ratedShipmentDetail->ShipmentRateDetail->TotalNetCharge->Amount);
        //              }
        //          }
        //          echo "<hr />";
        //      }
        //  }
        //   dd($rateRequest);
        //  dd($rateReply);
        //  var_dump($rateReply);
         //fedexend
         $totals = OrderDetails::
         join('orders', 'orders.id', '=', 'order_details.order_id')
         ->select(DB::raw('sum(order_details.quantity*order_details.price) AS Total'))
         ->where('orders.status',1)
         ->where('orders.user_id',auth()->id())
         ->first();
         
         $ordervalue = Order::where('orders.status',1)
         ->where('orders.user_id',auth()->id())
         ->value('payment_price');$ordervalue = Order::where('orders.status',1)
         ->where('orders.user_id',auth()->id())
         ->value('payment_price');       
         $subtotal = $totals['Total'] + $ordervalue; 
        //  $amount = str_replace([',', '.'], ['', ''], $subtotal); 
        // $subamount = $amount/100;
        // dd($subamount);
         //try{

            $this->validate($request, [
                'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
                'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
                'phone' => 'required|regex:/^([0-9\s+\(\)]*)$/',
                'street_address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'postal_code' => 'required',
                'cardnumber' => 'required',
                'cvv' => 'required',
                'card-expiry-month' => 'required',
                'card-expiry-year' => 'required',
            ]);

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                    "amount" => 100*100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Test payment from badge.com." 
            ]);
           
                
                Payment::create([
                  'user_id' => Auth::user()->id,
                  'amount' => 100 * 100,
                  'full_name' => Auth::user()->first_name.' '.Auth::user()->last_name,
                  'email' =>Auth::user()->email,
                  'method' => 'Stripe',
                  'order_id' => 1,
                  'status' => 1,
                  'returned_status' => 1,
                  'currency' => 'usd',
                  'total_response' => 1,
                ]);

                $orders = Order::where('user_id',auth()->id());        
                $orders->update(['status' => 2]);

          

        // }
        // catch(\Stripe\Exception\ApiErrorException $e) {
            
        //     $msgAction = $e->getMessage();
        //     return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        // }
        // catch(\Stripe\Exception\CardException $e) {
        //     $msgAction = $e->getMessage();
        //     return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        // }
        // catch (\Stripe\Exception\InvalidRequestException $e) {
        //     $msgAction = $e->getMessage();
        //     return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        // } catch (\Stripe\Exception\AuthenticationException $e) {
        //     $msgAction = $e->getMessage();
        //     return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        // }
        // catch (\Stripe\Exception\ApiConnectionException $e) {
        //     $msgAction = $e->getMessage();
        //     return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        // }
        // catch (Exception $e) {
        //     $msgAction = $e->getMessage();
        //     return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        // }
          
        return redirect()->route('welcome.billing-address')->with('success', 'Payment successfully made.');

    }

   
    public function savedAddress()
    {
        $userid= Auth::user()->id;
        $shippingaddresses = AddAddress::where('user_id', $userid)->paginate(3);
        return view('Welcome.saved-address',compact('shippingaddresses'));
    }

    public function getaddressdetails($id) 
    {
        $saveaddress= AddAddress::where("id",$id)->with(['countryaddress','stateaddress'])->get();
        return json_encode($saveaddress);
    }
}
