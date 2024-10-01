<?php

use App\Http\Controllers\PageController;
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
Route::get('/ep-application', [PageController::class, 'ep_application'])->name('ep-application');
Route::get('/dp-application', [PageController::class, 'dp_application'])->name('dp-application');
Route::get('/ltvp-application', [PageController::class, 'ltvp_application'])->name('ltvp-application');
Route::get('/op-application', [PageController::class, 'op_application'])->name('op-application');
Route::get('/consultation', [PageController::class, 'consultation'])->name('consultation');