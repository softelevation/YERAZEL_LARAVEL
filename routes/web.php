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
	
	Route::get('/login', 'HomeController@login')->name('login');
	Route::post('/login', 'HomeController@loginPost')->name('login');
	
	Route::post('/google-map-get', 'HomeController@googleMapGet');
	
	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
	Route::get('/client', 'HomeController@client')->name('client');
	Route::get('/showing', 'HomeController@showing')->name('showing');
	Route::get('/open-houses', 'HomeController@openHouses')->name('open-houses');
	Route::get('/rebate', 'HomeController@rebate')->name('rebate');
	
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});