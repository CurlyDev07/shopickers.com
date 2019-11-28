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
Route::get('/variant', function(Request $request){
    dd($request->all());
    $v = [
        'size' => ['sm', 'lg', 'md'],
        'color' => ['red', 'blue', 'white'],
        'material' => ['gold', 'silver', 'cooper']
    ];

    $variant = get_variations($v);
    return response()->json($variant);
})->name('variant');  


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

Route::get('dashboard', function () {
    return view('pages.user.dashboard');
})->name('dashboard');


Route::get('{slug}-i.{item_id}', 'ItemCon@show')->where(['item_id' => '[0-9]+', 'slug' => '.*']);
Route::get('checkout', 'TransactionCon@checkout')->name('checkout');

