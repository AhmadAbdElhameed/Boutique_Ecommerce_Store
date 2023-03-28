<?php

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

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/shop', function () {
    return view('front.shop');
})->name('shop');

Route::get('/cart', function () {
    return view('front.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('front.checkout');
})->name('checkout');

Route::get('/details', function () {
    return view('front.detail');
})->name('details');

Route::get('/test', function () {
    return view('front.test');
})->name('test');




//Admin

Route::get('/admin', function () {
    return view('backend.home');
})->name('admin');

Route::get('/blank', function () {
    return view('backend.blank');
})->name('admin.blank');

Route::get('/404', function () {
    return view('backend.404');
})->name('admin.404');

Route::get('/buttons', function () {
    return view('backend.buttons');
})->name('admin.buttons');

Route::get('/cards', function () {
    return view('backend.cards');
})->name('admin.cards');

Route::get('/charts', function () {
    return view('backend.charts');
})->name('admin.charts');

Route::get('/tables', function () {
    return view('backend.tables');
})->name('admin.tables');





// Utilities

Route::get('/animation', function () {
    return view('backend.utilities-animation');
})->name('admin.animation');

Route::get('/border', function () {
    return view('backend.utilities-border');
})->name('admin.border');

Route::get('/color', function () {
    return view('backend.utilities-color');
})->name('admin.color');

Route::get('/other', function () {
    return view('backend.utilities-other');
})->name('admin.other');



Auth::routes(["verify" => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
