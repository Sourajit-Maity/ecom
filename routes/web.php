<?php

use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Welcome\DesignToolController;
use App\Http\Controllers\Welcome\HomeController;
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
Route::get('signup', [HomeController::class, 'signUp'])->name('welcome.signup');
Route::get('login', [HomeController::class, 'login'])->name('welcome.login');
Route::get('product-details', [HomeController::class, 'productDetails'])->name('welcome.product-details');
// Route::get('design-tool', [DesignToolController::class, 'index'])->name('welcome.design-tool');
Route::get('design-tool', [HomeController::class, 'designTool'])->name('welcome.design-tool');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:sanctum'], function () {
    Route::get('profile', [ProfileController::class, 'getProfile'])->name('admin.profile');
    Route::get('/dashboard', [AdminDashboard::class, 'getDashboard'])->name('admin.dashboard');
    Route::resources([
        'users' => UserController::class
    ]);
});
