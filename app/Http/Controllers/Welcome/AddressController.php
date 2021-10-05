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
        $shippingaddresses = AddAddress::where('user_id', $userid)->get();
        return view('Welcome.saved-address',compact('shippingaddresses'));
    }
}
