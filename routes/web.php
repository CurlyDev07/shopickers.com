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
    

Route::get('/', function () {
    return view('pages.front.index');
});

Route::get('{slug}-i.{item_id}', 'ItemCon@show')->where(['item_id' => '[0-9]+', 'slug' => '.*']);
