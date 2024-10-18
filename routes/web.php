<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GatewayController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StripeTestController;
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

Route::get('/testing', [StripeTestController::class, 'index']);
Route::post('/testing/charge', [StripeTestController::class, 'charge'])->name('testing.charge');

// MainController
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about-us', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/testimonials', [MainController::class, 'testimonials'])->name('testimonials');
Route::get('/consultation', [MainController::class, 'consultation'])->name('consultation');
Route::post('/consultation', [MainController::class, 'consultation_email'])->name('consultation_email');

// ProductController
Route::get('/ep-application', [ProductController::class, 'ep_application'])->name('ep-application');
Route::get('/dp-application', [ProductController::class, 'dp_application'])->name('dp-application');
Route::get('/ltvp-application', [ProductController::class, 'ltvp_application'])->name('ltvp-application');
Route::get('/op-application', [ProductController::class, 'op_application'])->name('op-application');
Route::get('/ais-gateway/ep-application', [ProductController:: class, 'gateway_ep_application'])->middleware('auth')->name('gateway.ep.application');
Route::get('/ais-gateway/dp-application', [ProductController:: class, 'gateway_dp_application'])->middleware('auth')->name('gateway.dp.application');
Route::get('/ais-gateway/ltvp-application', [ProductController:: class, 'gateway_ltvp_application'])->middleware('auth')->name('gateway.ltvp.application');
Route::get('/ais-gateway/op-application', [ProductController:: class, 'gateway_op_application'])->middleware('auth')->name('gateway.op.application');


// CartController
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/process', [CartController::class, 'process'])->name('cart.process');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/password/change', [LoginController::class, 'showChangeForm'])->name('change');
Route::post('/password/change', [LoginController::class, 'changePassword'])->name('password.change');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/password/email', [ForgotPasswordController::class, 'index'])->name('password.email');
Route::get('/password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

// GatewayController for Client
Route::group(['middleware' => ['auth', 'role:client']], function () {
    Route::get('/ais-gateway', [GatewayController::class, 'index'])->name('gateway');
    Route::get('/ais-gateway/new-order', [GatewayController::class, 'new_order'])->name('new-order');
    Route::get('/ais-gateway/product-details/{orderId}', [GatewayController::class, 'product_details'])->name('product-details');
    Route::post('/ais-gateway/store-documents/{orderId}', [GatewayController::class, 'storeDocuments'])->name('store-documents');
    Route::get('/ais-gateway/profile', [GatewayController::class, 'profile'])->name('profile');
    Route::post('/ais-gateway/profile', [GatewayController::class, 'updateProfile'])->name('profile.update');
});

// GatewayController for Admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/ais-gateway/admin', [GatewayController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/ais-gateway/admin/order', [GatewayController::class, 'order'])->name('admin.order');
    Route::get('/ais-gateway/admin/order-view/{orderId}', [GatewayController::class, 'orderView'])->name('admin.order-view');
    Route::put('/ais-gateway/admin/order-view/{orderId}', [GatewayController::class, 'orderUpdate'])->name('admin.order-update');
    Route::get('/ais-gateway/admin/order-documents/{orderId}', [GatewayController::class, 'orderDocuments'])->name('admin.order-documents');
});