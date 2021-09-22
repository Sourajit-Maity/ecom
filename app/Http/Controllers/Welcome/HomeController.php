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
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.products',compact('reviews','products'));
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

    public function contactusSubmit(Request $request)
    {
        dd($request->all());
        Log::debug("Request".print_r($request->all(), true));
        
        
    }
    public function contactSubmit(Request $request)
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
    
       
        
         $inputs = $request->all();
         $contact = ContactUsForm::create($inputs);
     
        return redirect()->back()
                        ->with('success','Request Submitted successfully.');
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
    
        return redirect()->route('welcome.login')
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

        // $validator = Validator::make($request->all(), [
        //     "email" =>  "required|email",
        //     "password" =>  "required",
        // ]);
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
        //dd($products);
        $productprices = ProductPrice::get();
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.product-details',compact('reviews','productprices','products'));
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
