<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Faq;

use App\Models\State;
use App\Models\ContactUsForm;

use App\Models\Country;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\Review;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function getDashboard(){
        $count['userCount'] = User::role('CLIENT')->count();
        $count['activeUserCount'] = User::role('CLIENT')->whereActive(1)->count();
        $count['blockedUserCount'] = User::role('CLIENT')->whereActive(0)->count();

        $count['faqCount'] = Faq::count();
        $count['activeFaqCount'] = Faq::whereActive(1)->count();
        $count['blockedFaqCount'] = Faq::whereActive(0)->count();

        $count['reviewCount'] = Review::count();
        $count['activeReviewCount'] = Review::whereActive(1)->count();
        $count['blockedReviewCount'] = Review::whereActive(0)->count();

        $count['contactCount'] = ContactUsForm::count();
        $count['activeContactCount'] = ContactUsForm::whereActive(1)->count();
        $count['blockedContactCount'] = ContactUsForm::whereActive(0)->count();

        $count['productCount'] = Product::count();


        $count['productpriceCount'] = ProductPrice::count();
 
        $count['countryCount'] = Country::count();
        $count['stateCount'] = State::count();
        $users=User::take(10)->latest()->get();

        return view('admin.dashboard',compact('count','users'));
    }
    public function userCreateShow(){
        return view('admin.user-create');
    }
}
