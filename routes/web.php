<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('frontend.home');
})->name('home');

Route::get('/shop',function (){
    return view('frontend.shop');
})->name('shop');

Route::get('/single-product',function (){
    return view('frontend.single-product');
})->name('single-product');

Route::get('/cart',function (){
    return view('frontend.cart');
})->name('cart');

Route::get('/checkout',function (){
    return view('frontend.checkout');
})->name('checkout');