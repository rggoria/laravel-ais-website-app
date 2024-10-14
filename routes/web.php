<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GatewayController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// PageController
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/consultation', [PageController::class, 'consultation'])->name('consultation');
Route::post('/consultation', [PageController::class, 'consultation_email'])->name('consultation_email');

// ProductController
Route::get('/ep-application', [ProductController::class, 'ep_application'])->name('ep-application');
Route::get('/dp-application', [ProductController::class, 'dp_application'])->name('dp-application');
Route::get('/ltvp-application', [ProductController::class, 'ltvp_application'])->name('ltvp-application');
Route::get('/op-application', [ProductController::class, 'op_application'])->name('op-application');


// CartController
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/process', [CartController::class, 'process'])->name('cart.process');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/password/email', [ForgotPasswordController::class, 'index'])->name('password.email');
Route::get('/password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');


// GatewayController
Route::get('/ais-gateway', [GatewayController:: class, 'index'])->middleware('auth')->name('gateway');
Route::get('/ais-gateway/new-order', [GatewayController:: class, 'new_order'])->middleware('auth')->name('new-order');
Route::get('/ais-gateway/product-details', [GatewayController:: class, 'product_details'])->middleware('auth')->name('product-details');
Route::get('/ais-gateway/profile', [GatewayController:: class, 'profile'])->middleware('auth')->name('profile');
Route::post('/ais-gateway/profile', [GatewayController:: class, 'updateProfile'])->middleware('auth')->name('profile.update');