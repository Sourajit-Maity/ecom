<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Review;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\AddAddress;
use App\Models\BillingAddress;
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

class HomeController extends Controller
{
    

    public function index()
    {
        $homedetails = Homepage::first();
        $products = Product::latest()->take(6)->get();
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.home',compact('reviews','homedetails','products'));
    }
    public function aboutUs()
    {
        $about = Aboutpage::first();
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.about-us',compact('reviews','about'));
    }
    public function products()
    {
        $products = Product::get();
        $productsdetails = Product::paginate(3);
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.products',compact('reviews','products','productsdetails'));
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
        //Log::debug("Request".print_r($request->all(), true)); 
        
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
    
       
        
         $inputs = $request->all();
         $contact = ContactUsForm::create($inputs);
     
        return redirect()->back()
                        ->with('success','Message Submitted successfully.');
    }
    public function registerSubmit(Request $request)
    {
        //Log::debug("register".print_r($request->all(), true));
        $messages = [

            'password_confirmation.required' => 'password confirmation field is required.',
            'terms_condition.required' => 'terms & condition field is required.',

        ];
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email|max:255|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users',
            'phone' => 'required|regex:/^([0-9\s+\(\)]*)$/',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',
            'terms_condition' => 'accepted',
            'terms_condition' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ],$messages);
       
    
         $inputs = $request->all();
         
         $user   =   User::create($inputs);
         $user->assignRole('CLIENT');
    
        return redirect()->route('welcome.my-account')
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

        
        request()->validate([
            "email" =>  "required|email",
            "password" =>  "required",
        ]);


        $user=User::where("email", $request->email)->role('CLIENT')->first();

        if(is_null($user)) {
            return redirect()->back()->with('success','Email Not Found.');
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user       =       Auth::user();
            return Redirect::to('/')->with('success','User Login Successfully!');
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
    public function productDetails($product_name)
    { 
        $products = Product::where('product_name',$product_name)->first();
        $otherproducts = Product::latest()->take(4)->get();
        //dd($otherproducts);
        $productprices = ProductPrice::get();
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.product-details',compact('reviews','productprices','products','otherproducts'));
    }
    public function designTool()
    {
        return view('Welcome.design-tool');
    }

    
    public function orderHistory()
    {
        //$userid= Auth::user()->id;
        $orders = Order::where('user_id',auth()->id())->with(['user','orderdetails'])->paginate(5);
        
        
        return view('Welcome.order-history',compact('orders'));
    }
    public function myAccount()
    {
        $countryid = Auth::user()->country;
        $stateid = Auth::user()->state;
        $country = Country::where('id',$countryid)->value('country_name');
        $state = State::where('id',$stateid)->value('state_name');
        return view('Welcome.my-account',compact('country','state'));
    }
    public function editAccount()
    {
        $currentuserid = Auth::user()->id;
        $countryid = Auth::user()->country;
        $stateid = Auth::user()->state;
        $country = Country::where('id',$countryid)->pluck('id','country_name');
        $state = State::where('id',$stateid)->pluck('id','state_name');
        //dd($state);
        $states = State::with('countries')->where('active', 1)->pluck('id','state_name');
        $countrys = Country::where('active', 1)->pluck('id','country_name'); 
        $users = User::findOrFail($currentuserid);
        return view('Welcome.edit-account',compact('country','state','states','countrys','users'));
    }
    public function updateAccount(Request $request)
    {
        //Log::debug("register".print_r($request->all(), true));
        //dd($request->all());
       
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email|max:255|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'phone' => 'required|regex:/^([0-9\s+\(\)]*)$/',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',
        ]);
       
        $currentuserid = Auth::user()->id;
        $user= User::findOrFail($currentuserid);
         $inputs = $request->all();    
         $user->update($inputs);     
    
        return redirect()->back()
                        ->with('success','Updated successfully.');
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
