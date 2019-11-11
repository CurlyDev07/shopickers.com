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
    return view('pages.front.index');
});

Route::get('/contact-us', function () {
    return view('pages.front.contactus');
})->name('contactus');

Route::get('/about-us', function () {
    return view('pages.front.aboutus');
})->name('aboutus');
    

Route::get('/', function () {
    return view('pages.front.index');
});

Route::get('login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('signup', function () {
    return view('pages.auth.signup');
})->name('signup');

Route::get('cart', function () {
    return view('pages.front.cart');
})->name('cart');

Route::get('{slug}-i.{item_id}', 'ItemCon@show')->where(['item_id' => '[0-9]+', 'slug' => '.*']);
Route::get('checkout', 'TransactionCon@checkout')->name('checkout');