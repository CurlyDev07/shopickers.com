<?php


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
        Route::post('/generate_variant', 'ProductsCon@generate_variant');
    });

});


Route::fallback(function () {
    dd('404 admin');
});