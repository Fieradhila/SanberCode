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

Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/masuk', 'AuthController@welcome');
//Route::get('/masuk', 'AuthController@welcome_get');