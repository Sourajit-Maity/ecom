<?php

use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Welcome\DesignToolController;
use App\Http\Controllers\Welcome\HomeController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPriceController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
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
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('welcome.about-us');
Route::get('products', [HomeController::class, 'products'])->name('welcome.products');
Route::get('faq', [HomeController::class, 'faq'])->name('welcome.faq');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('welcome.contact-us');
Route::post('contact-us-submit', [HomeController::class, 'contactUsSubmit'])->name('welcome.contact-us-submit');
Route::get('signup', [HomeController::class, 'signUp'])->name('welcome.signup');
Route::get('login', [HomeController::class, 'login'])->name('welcome.login');
Route::get('product-details', [HomeController::class, 'productDetails'])->name('welcome.product-details');
// Route::get('design-tool', [DesignToolController::class, 'index'])->name('welcome.design-tool');
Route::get('design-tool', [HomeController::class, 'designTool'])->name('welcome.design-tool');
Route::get('add-address', [HomeController::class, 'addAddress'])->name('welcome.add-address');
Route::get('billing-address', [HomeController::class, 'billingAddress'])->name('welcome.billing-address');
Route::get('shopping-cart', [HomeController::class, 'shoppingCart'])->name('welcome.shopping-cart');
Route::get('saved-address', [HomeController::class, 'savedAddress'])->name('welcome.saved-address');
Route::get('order-history', [HomeController::class, 'orderHistory'])->name('welcome.order-history');
Route::get('my-account', [HomeController::class, 'myAccount'])->name('welcome.my-account');
Route::get('edit-account', [HomeController::class, 'editAccount'])->name('welcome.edit-account');
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



Route::group(['prefix' => 'admin', 'middleware' => 'auth:sanctum'], function () {
    Route::get('profile', [ProfileController::class, 'getProfile'])->name('admin.profile');
    Route::get('/dashboard', [AdminDashboard::class, 'getDashboard'])->name('admin.dashboard');
    Route::resources([
        'users' => UserController::class,
        'faq-master' => FaqController::class,
        'contact-form' => ContactController::class,
        'review-master' => ReviewController::class,
        'product' => ProductController::class,
        'product-price' => ProductPriceController::class,
        'country' => CountryController::class,
        'city' => CityController::class,
        'state' => StateController::class,

    ]);
});
