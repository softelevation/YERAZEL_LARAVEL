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
    Route::get('/bath', 'HomeController@bath')->name('bath');
    Route::get('/shower', 'HomeController@shower')->name('shower');
    Route::get('add-one', 'HomeController@bathdetail')->name('bathdetail');
    Route::get('bath/details', 'HomeController@bathdetails')->name('bathdetails');
    Route::get('shower/detail', 'HomeController@showerdetail')->name('showerdetail');
    Route::get('alcove-shower', 'HomeController@alcoveShower')->name('alcove-shower');
    Route::post('alcove-shower', 'HomeController@bathPost')->name('alcove-shower');
	
	Route::post('/bath', 'HomeController@bathPost')->name('bath');
	Route::post('/add-one', 'HomeController@bathPost')->name('bath');
	
	Route::post('/shower', 'HomeController@showerPost')->name('shower');
	
	Route::get('/stripe', 'HomeController@stripeReq')->name('stripe');
	
	
	Route::post('addmoney','HomeController@postPaymentStripe');
});
