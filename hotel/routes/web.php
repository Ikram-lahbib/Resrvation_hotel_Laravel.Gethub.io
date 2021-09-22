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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/login','UsersController@login');
Route::get('/logout','UsersController@logout');
Route::get('/listClient','UsersController@index');
Route::get('/destroyuser/{id}','UsersController@destroy');
Route::get('/register','UsersController@create');
Route::get('/profil','UsersController@profil');
Route::post('/store','UsersController@store');
Route::post('/auth','UsersController@auth');

Route::get('/room','RoomsController@index');
Route::get('/createroom','RoomsController@create');
Route::get('/editroom/{id}','RoomsController@edit');
Route::post('/addroom','RoomsController@store');
Route::post('/updateroom/{id}','RoomsController@update');
Route::get('/deleteroom/{id}','RoomsController@destroy');
Route::get('/desactive/{id}','RoomsController@desactivate');

Route::get('/hotel','HotelController@index');
Route::get('/createhotel','HotelController@create');
Route::get('/edithotel/{id}','HotelController@edit');
Route::post('/addhotel','HotelController@store');
Route::post('/updatehotel/{id}','HotelController@update');
Route::get('/deletehotel/{id}','HotelController@destroy');
Route::get('/listhotel','HotelController@listhotel');
Route::get('/show/{id}','HotelController@show');
Route::post('/search','HotelController@search');


Route::get('/booking','BookingController@index');
Route::get('/deletebook/{id}','BookingController@destroy');
Route::post('/book','BookingController@store');

Route::resource('/users','UsersController');
Route::get('/admin','RoomsController@admin');