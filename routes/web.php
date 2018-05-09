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
//Supplier Routes
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'UI\HomeController@index');
Route::get('/login', function () {
    return view('frontend/contents/login');
});

Route::get('/register', 'UI\HomeController@show_register');

Route::post('/add_register', 'UI\HomeController@add_register');

Route::post('/check_login', 'UI\HomeController@login');

Route::get('/add_post', 'UI\AdsController@show_post');

Route::post('/store_post' , 'UI\AdsController@add_post');