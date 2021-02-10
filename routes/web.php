<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace'=>'front'],function() {
	Route::get('/', 'HomeController@index')->name('index');
    Route::any('/Details/{id}', 'HomeController@Details')->name('Details');
	Route::get('/imageurl/{id}', 'HomeController@imageurl')->name('imageurl');
});
