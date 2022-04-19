<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get("/logout", function () {
    Session::forget('user');
    return redirect('/login');
});

Route::get("/login", function () {
    return view('login');
});
Route::view('/register','register');
//Route::post("/login",[UserController::class,'login']);
Route::post('login','UserController@login')->name('login');
Route::post('/register','UserController@register')->name('register');
Route::get('/','ProductController@index')->name('index');
Route::get('detail/{id}','ProductController@detail')->name('detail');
Route::get('search','ProductController@search')->name('search');
Route::post('add_to_cart','ProductController@addToCart')->name('addToCart');
Route::get('cartlist','ProductController@cartList')->name('cartList');
Route::get('removecart/{id}','ProductController@removeCart')->name('removeCart');
Route::get('ordernow','ProductController@orderNow')->name('orderNow');
Route::post('orderplace','ProductController@orderPlace')->name('orderPlace');
Route::get('myorder','ProductController@myOrder')->name('myOrder');