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

Route::get('/rumahkuh', function () {
    return view('welcome');
});

//{angka} $angka , ["angka" => $angka] {{$angka}}

Route::get('/dashboard', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/masuk', 'AuthController@welcome');

/*Route::get('/master', function(){
	return view('adminltelayouts.master');
});
*/

Route::get('/', function(){
	return view('items.index');
});

Route::get('/data-tables', function(){
	return view('items.create');
});
//Route::get('/masuk', 'AuthController@welcome_get');
