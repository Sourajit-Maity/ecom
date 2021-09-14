<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Review;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\User;
use App\Models\Faqpage;
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

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.home',compact('reviews'));
    }
    public function aboutUs()
    {
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.about-us',compact('reviews'));
    }
    public function products()
    {
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.products',compact('reviews'));
    }
    public function faq()
    {
        $faqs = Faq::all();
        $faqpage = Faqpage::first();
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.faq',compact('faqs','reviews','faqpage'));
    }
    public function contactUs()
    {
        $contactuspage = Contactuspage::first();
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.contact-us',compact('reviews','contactuspage'));
    }
    public function contactUsSubmit(Request $request)
    {
        Log::debug("Request".print_r($request->all(), true));
        request()->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    
       
        $contact = new ContactUsForm($request->all());
        $contact->save();
    
        return redirect()->back()
                        ->with('success','Request Submitted successfully.');
    }
    public function registerSubmit(Request $request)
    {
        //Log::debug("register".print_r($request->all(), true));
        request()->validate([
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email|max:255|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users',
            'phone' => 'required|regex:/^([0-9\s+\(\)]*)$/',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',
            'terms_condition' => 'required',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
    
         $inputs = $request->all();
         $user   =   User::create($inputs);
         $user->assignRole('CLIENT');
    
        return redirect()->back()
                        ->with('success','Request Submitted successfully.');
    }
    public function signUp()
    {
        $state = State::with('countries')->where('active', 1)->pluck('id','state_name');
        $city = City::with('state')->where('active', 1)->pluck('id','city_name');
        $country = Country::where('active', 1)->pluck('id','country_name'); 
        return view('Welcome.sign-up',compact('state','city','country'));
    }
    public function login()
    {

        return view('Welcome.login');
    }
    public function loginClient(Request $request) {

        $validator = Validator::make($request->all(), [
            "email" =>  "required|email",
            "password" =>  "required",
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('success','Not found.');
           
        }

        $user=User::where("email", $request->email)->first();

        if(is_null($user)) {
            return redirect()->back()->with('success','Email Not Found.');
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user       =       Auth::user();
            return Redirect::to('/')->with('success','User Registered Successfully!');
        }
        else {
            return redirect()->back()->with('success','"Whoops! invalid password.');
           
        }
    }
    public function logoutClient() {
        Session::flush();
        Auth::logout();
  
        return Redirect::to('/');
    }
    public function productDetails()
    {
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.product-details',compact('reviews'));
    }
    public function designTool()
    {
        return view('Welcome.design-tool');
    }

    public function addAddress()
    {
        return view('Welcome.add-address');
    }
    public function billingAddress()
    {
        return view('Welcome.billing-address');
    }

    public function shoppingCart()
    {
        return view('Welcome.shopping-cart');
    }
    public function savedAddress()
    {
        return view('Welcome.saved-address');
    }
    public function orderHistory()
    {
        return view('Welcome.order-history');
    }
    public function myAccount()
    {
        return view('Welcome.my-account');
    }
    public function editAccount()
    {
        return view('Welcome.edit-account');
    }
    public function mySaveDesign()
    {
        return view('Welcome.my-save-design');
    }

    public function designPage()
    {
        return view('Welcome.design-page');
    }

    public function designPageBackground()
    {
        return view('Welcome.design-page-background');
    }
    public function designPageBorder()
    {
        return view('Welcome.design-page-border');
    }
    public function designPageColors()
    {
        return view('Welcome.design-page-colors');
    }
    public function designPageCustomBackground()
    {
        return view('Welcome.design-page-custom-background');
    }
    public function designPageDemo()
    {
        return view('Welcome.design-page-demo');
    }
    public function designPageDemoaddName()
    {
        return view('Welcome.design-page-demo-add-name');
    }
    public function designPageDemoaddorEditName()
    {
        return view('Welcome.design-page-demo-add-or-edit-name');
    }
    public function designPageFastener()
    {
        return view('Welcome.design-page-fastener');
    }
 
    public function getState($id) 
    {
        $state= State::where("country_id",$id)->get();
        return json_encode($state);
    }
}
