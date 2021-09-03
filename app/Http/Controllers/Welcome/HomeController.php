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
}
