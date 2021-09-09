<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Review;
use App\Models\ContactUsForm;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

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
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.faq',compact('faqs','reviews'));
    }
    public function contactUs()
    {
        $reviews = Review::with('user')->where('active', 1)->get();
        return view('Welcome.contact-us',compact('reviews'));
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
    public function signUp()
    {
        
        return view('Welcome.sign-up');
    }
    public function login()
    {
        return view('Welcome.login');
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
 

}
