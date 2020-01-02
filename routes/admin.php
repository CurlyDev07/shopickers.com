<?php
use App\ProductImage;


Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'DashboardCon@index');
    
    
    /*
    |--------------------------------------------------------------------------
    | PRODUCTS Routes
    |--------------------------------------------------------------------------
    */

    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductsCon@index');
        Route::get('/add', 'ProductsCon@add');
        Route::post('/store', 'ProductsCon@store');
        Route::get('/update/{id}', 'ProductsCon@update')->name('products.update');
        Route::post('/patch', 'ProductsCon@patch')->name('products.patch');
        Route::post('/delete', 'ProductsCon@delete')->name('products.delete');
        Route::post('/status', 'ProductsCon@status')->name('products.status');
        Route::post('/restore', 'ProductsCon@restore')->name('products.restore');
        Route::get('/archive', 'ProductsCon@archive');
        
        Route::post('/generate_variant', 'ProductsCon@generate_variant');
    });
    

    /*
    |--------------------------------------------------------------------------
    | ORDERS Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('orders')->group(function () {
        Route::get('/', 'OrderCon@index');
        Route::get('/view/{transaction_id}', 'OrderCon@show');
    });
});


Route::fallback(function () {
    dd('404 admin');
});