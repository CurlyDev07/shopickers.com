<?php
use Illuminate\Http\Request;

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
    $page = 'Home';
    return view('pages.front.index', compact('page'));
});

Route::get('login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('signup', function () {
    return view('pages.auth.signup');
})->name('signup');



Route::get('dashboard', function () {
    return view('pages.user.dashboard');
})->name('dashboard');


Route::get('{slug}-i.{item_id}', 'ProductsCon@show')->where(['item_id' => '[0-9]+', 'slug' => '.*']);
Route::get('products', 'ProductsCon@all')->name('products.all');


// CART
Route::get('cart', 'CartCon@index')->name('cart');
Route::get('cart/add/{id}', 'CartCon@add')->name('cart.add');
Route::get('cart/clear/all', 'CartCon@clear_all')->name('cart.clear.all');
Route::get('cart/count', 'CartCon@count')->name('cart.count');


// CHECKOUT
Route::get('checkout/{base64_item_details}', 'CheckoutCon@index')->name('checkout');


// PAYMENT 
Route::get('test', function(){
    return view('pages\front\payment_success');
});

Route::get('payment', 'PaymentController@index');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');