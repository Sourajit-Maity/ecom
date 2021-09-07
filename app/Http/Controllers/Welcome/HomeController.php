<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return view('Welcome.home');
    }
    public function aboutUs()
    {
        return view('Welcome.about-us');
    }
    public function products()
    {
        return view('Welcome.products');
    }
    public function faq()
    {
        return view('Welcome.faq');
    }
    public function contactUs()
    {
        return view('Welcome.contact-us');
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
        return view('Welcome.product-details');
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
