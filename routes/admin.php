<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'DashboardCon@index');
    Route::get('products', 'ProductsCon@index');
});


Route::post('/variant', function(){
    $varaints = (array)request()->varaints;
    dd(get_variations($varaints));
});



Route::fallback(function () {
    dd('404 admin');
});