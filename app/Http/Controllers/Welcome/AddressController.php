<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
// use FedEx\RateService\Request;
use FedEx\RateService\ComplexType;
use FedEx\RateService\SimpleType;

class AddressController extends Controller
{
    public function addAddress()
    {
        $state = State::with('countries')->where('active', 1)->pluck('id','state_name');
        $city = City::with('state')->where('active', 1)->pluck('id','city_name');
        $country = Country::where('active', 1)->pluck('id','country_name'); 
        return view('Welcome.add-address',compact('state','city','country'));
    }
    public function saveAddress(Request $request)
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
    public function updateAddress(Request $request,$id)
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
    public function deleteAddress(Request $request,$id)
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

            // //fedex start
            // $rateRequest = new ComplexType\RateRequest();

            // //authentication & client details
            // $rateRequest->WebAuthenticationDetail->UserCredential->Key = 'AE3Ux9wjmhbN359l';
            // $rateRequest->WebAuthenticationDetail->UserCredential->Password = '8EMkFHPsnHcdO2LaR9nendxB2';
            // $rateRequest->ClientDetail->AccountNumber = 510088000;
            // $rateRequest->ClientDetail->MeterNumber = 119238823;

            // $rateRequest->TransactionDetail->CustomerTransactionId = 'testing rate service request';

            // //version
            // $rateRequest->Version->ServiceId = 'crs';
            // $rateRequest->Version->Major = 24;
            // $rateRequest->Version->Minor = 0;
            // $rateRequest->Version->Intermediate = 0;

            // $rateRequest->ReturnTransitAndCommit = true;

            // //shipper
            // $rateRequest->RequestedShipment->PreferredCurrency = 'USD';
            // $rateRequest->RequestedShipment->Shipper->Address->StreetLines = ['10 Fed Ex Pkwy'];
            // $rateRequest->RequestedShipment->Shipper->Address->City = 'Memphis';
            // $rateRequest->RequestedShipment->Shipper->Address->StateOrProvinceCode = 'TN';
            // $rateRequest->RequestedShipment->Shipper->Address->PostalCode = 38115;
            // $rateRequest->RequestedShipment->Shipper->Address->CountryCode = 'US';

            // //recipient
            // $rateRequest->RequestedShipment->Recipient->Address->StreetLines = ['13450 Farmcrest Ct'];
            // $rateRequest->RequestedShipment->Recipient->Address->City = 'Herndon';
            // $rateRequest->RequestedShipment->Recipient->Address->StateOrProvinceCode = 'VA';
            // $rateRequest->RequestedShipment->Recipient->Address->PostalCode = 20171;
            // $rateRequest->RequestedShipment->Recipient->Address->CountryCode = 'US';

            // //shipping charges payment
            // $rateRequest->RequestedShipment->ShippingChargesPayment->PaymentType = SimpleType\PaymentType::_SENDER;

            // //rate request types
            // $rateRequest->RequestedShipment->RateRequestTypes = [SimpleType\RateRequestType::_PREFERRED, SimpleType\RateRequestType::_LIST];

            // $rateRequest->RequestedShipment->PackageCount = 2;

            // //create package line items
            // $rateRequest->RequestedShipment->RequestedPackageLineItems = [new ComplexType\RequestedPackageLineItem(), new ComplexType\RequestedPackageLineItem()];

            // //package 1
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Weight->Value = 2;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Weight->Units = SimpleType\WeightUnits::_LB;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Length = 10;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Width = 10;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Height = 3;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Units = SimpleType\LinearUnits::_IN;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[0]->GroupPackageCount = 1;

            // //package 2
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Weight->Value = 5;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Weight->Units = SimpleType\WeightUnits::_LB;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Length = 20;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Width = 20;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Height = 10;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Units = SimpleType\LinearUnits::_IN;
            // $rateRequest->RequestedShipment->RequestedPackageLineItems[1]->GroupPackageCount = 1;

            // $rateServiceRequest = new Request();
            // //$rateServiceRequest->getSoapClient()->__setLocation(Request::PRODUCTION_URL); //use production URL

            // $rateReply = $rateServiceRequest->getGetRatesReply($rateRequest); // send true as the 2nd argument to return the SoapClient's stdClass response.


            // if (!empty($rateReply->RateReplyDetails)) {
            //     foreach ($rateReply->RateReplyDetails as $rateReplyDetail) {
            //         var_dump($rateReplyDetail->ServiceType);
            //         if (!empty($rateReplyDetail->RatedShipmentDetails)) {
            //             foreach ($rateReplyDetail->RatedShipmentDetails as $ratedShipmentDetail) {
            //                 var_dump($ratedShipmentDetail->ShipmentRateDetail->RateType . ": " . $ratedShipmentDetail->ShipmentRateDetail->TotalNetCharge->Amount);
            //             }
            //         }
            //         echo "<hr />";
            //     }
            // }

            // var_dump($rateReply);
            //fedex end


        return view('Welcome.billing-address',compact('state','country','address','productiontimes'));
    }

    public function savebillingDetails(Request $request)
    {
        Log::debug("register".print_r($request->all(), true));
        dd($request->all());
        
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
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
