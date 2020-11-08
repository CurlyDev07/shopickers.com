<?php
use App\ProductImage;


Route::namespace('Admin')->group(function () {

    Route::get('/', function(){
        return redirect('/admin/products');
    });

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
        Route::get('/create', 'OrderCon@create');
        Route::post('/store', 'OrderCon@store');
        Route::post('/change-status', 'OrderCon@change_status');
    });

    /*
    |--------------------------------------------------------------------------
    | INVENTORY Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('inventory')->group(function () {
        Route::get('/', function(){
            dd('inventory');
        });
    });

    /*
    |--------------------------------------------------------------------------
    | CATEGORIES Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoriesCon@index')->name('category.list');
        Route::get('/add', 'CategoriesCon@add')->name('category.add');
        Route::post('/store', 'CategoriesCon@store')->name('category.store');
        Route::post('/delete', 'CategoriesCon@delete')->name('category.delete');
    });

    /*
    |--------------------------------------------------------------------------
    | BANNERS Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('banners')->group(function () {
        Route::get('/', 'BannersCon@index')->name('banner.list');
        Route::get('/add', 'BannersCon@add')->name('banner.add');
        Route::post('/store', 'BannersCon@store')->name('banner.store');
    });

});


Route::fallback(function () {
    dd('404 admin');
});