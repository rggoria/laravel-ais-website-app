<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'show'])->name('checkout');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

