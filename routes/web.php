<?php

use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Welcome\DesignToolController;
use App\Http\Controllers\Welcome\HomeController;
use App\Http\Controllers\Welcome\AddressController;
use App\Http\Controllers\Welcome\RazorpayPaymentController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPriceController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\FaqpageController;
use App\Http\Controllers\Admin\ContactuspageController;
use App\Http\Controllers\Admin\AboutpageController;
use App\Http\Controllers\Admin\ProductionTimeController;
use App\Http\Controllers\UserCartController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::redirect('/', 'design-tool');
Route::redirect('admin', 'admin/login');
// Route::view('design-tool', 'design-tool');

// Route::inertia('/about', 'AboutComponent');
Route::get('/', [HomeController::class, 'index'])->name('welcome.home');
// 

// 
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('welcome.about-us');
Route::get('products', [HomeController::class, 'products'])->name('welcome.products');
Route::get('faq', [HomeController::class, 'faq'])->name('welcome.faq');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('welcome.contact-us');
Route::post('register-submit', [HomeController::class, 'registerSubmit'])->name('welcome.register-submit');
Route::post("login-client", [HomeController::class, 'loginClient'])->name('welcome.login-client');
Route::get('logout-client', [HomeController::class, 'logoutClient'])->name('welcome.logout-client');
Route::get('/getstate/{id}', [HomeController::class, 'getState']);
Route::post('contact-us-submit', [HomeController::class, 'contactSubmit'])->name('contact-us-submit');
Route::post('contact-submit', [HomeController::class, 'contactUsSubmit'])->name('welcome.contact-submit');
Route::get('signup', [HomeController::class, 'signUp'])->name('welcome.signup');
Route::get('login', [HomeController::class, 'login'])->name('welcome.login');

Route::get('product-details/{product_name}', [HomeController::class, 'productDetails'])->name('welcome.product-details');

Route::group(['middleware' => ['auth:web', 'clientuser']], function () {

    Route::get('design-tool', [HomeController::class, 'designTool'])->name('welcome.design-tool');

    Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
    Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
    Route::get('add-address', [AddressController::class, 'addAddress'])->name('welcome.add-address');
    Route::post('save-address', [AddressController::class, 'saveAddress'])->name('welcome.save-address');
    Route::get('edit-address/{id}', [AddressController::class, 'editAddress'])->name('welcome.edit-address');
    Route::post('update-address/{id}', [AddressController::class, 'updateAddress'])->name('welcome.update-address');
    Route::get('delete-address/{id}', [AddressController::class, 'deleteAddress'])->name('welcome.delete-address');
    Route::get('check-out', [AddressController::class, 'billingAddress'])->name('welcome.check-out');
    Route::post('save-billing-details', [AddressController::class, 'savebillingDetails'])->name('welcome.save-billing-details');
    Route::get('saved-address', [AddressController::class, 'savedAddress'])->name('welcome.saved-address');
    Route::get('/getaddress/{id}', [AddressController::class, 'getaddressdetails']);

    Route::get('payment', [AddressController::class, 'paypalpayment'])->name('payment');
    Route::get('cancel', [AddressController::class, 'paypalcancel'])->name('payment.cancel');
    Route::get('payment/success', [AddressController:: class, 'paypalsuccess'])->name('payment.success');

    Route::get('shopping-cart', [UserCartController::class, 'shoppingCart'])->name('welcome.shopping-cart');
    Route::get('order-history', [HomeController::class, 'orderHistory'])->name('welcome.order-history');
    Route::get('my-account', [HomeController::class, 'myAccount'])->name('welcome.my-account');
    Route::get('edit-account', [HomeController::class, 'editAccount'])->name('welcome.edit-account');
    Route::post('update-account', [HomeController::class, 'updateAccount'])->name('welcome.update-account');
    Route::get('my-save-design', [HomeController::class, 'mySaveDesign'])->name('welcome.my-save-design');

    Route::get('design-page', [HomeController::class, 'designPage'])->name('welcome.design-page');
    Route::get('design-page-background', [HomeController::class, 'designPageBackground'])->name('welcome.design-page-background');
    Route::get('design-page-border', [HomeController::class, 'designPageBorder'])->name('welcome.design-page-border');
    Route::get('design-page-colors', [HomeController::class, 'designPageColors'])->name('welcome.design-page-colors');
    Route::get('design-page-custom-background', [HomeController::class, 'designPageCustomBackground'])->name('welcome.design-page-custom-background');
    Route::get('design-page-demo', [HomeController::class, 'designPageDemo'])->name('welcome.design-page-demo');
    Route::get('design-page-demo-add-name', [HomeController::class, 'designPageDemoaddName'])->name('welcome.design-page-demo-add-name');
    Route::get('design-page-demo-add-or-edit-name', [HomeController::class, 'designPageDemoaddorEditName'])->name('welcome.design-page-demo-add-or-edit-name');
    Route::get('design-page-fastener', [HomeController::class, 'designPageFastener'])->name('welcome.design-page-fastener');
    Route::post('order-details', [UserCartController::class, 'orderDetails']);
    Route::resources([
        'cart' => UserCartController::class,
    ]);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:sanctum', 'role_or_permission:SUPER-ADMIN'], function () {

    Route::get('profile', [ProfileController::class, 'getProfile'])->name('admin.profile');
    Route::get('/dashboard', [AdminDashboard::class, 'getDashboard'])->name('admin.dashboard');
    Route::group(['middleware' => ['auth:web', 'adminuser']], function () {
        Route::resources([
            'users' => UserController::class,
            'faq-master' => FaqController::class,
            'contact-form' => ContactController::class,
            'review-master' => ReviewController::class,
            'product' => ProductController::class,
            'price' => ProductPriceController::class,
            'country' => CountryController::class,
            'city' => CityController::class,
            'state' => StateController::class,
            'homepage' => HomepageController::class,
            'faqpage' => FaqpageController::class,
            'contactuspage' => ContactuspageController::class,
            'aboutpage' => AboutpageController::class,
            'pages' => CmsController::class,
            'timeproduction' => ProductionTimeController::class,

        ]);
    });
});
