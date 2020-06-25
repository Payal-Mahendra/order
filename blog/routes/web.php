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

Route::view('/user','users')->middleware('userAge');

Route::get('mobile','mobiles@index');

Route::view('/form','studentform');

Route::post('submit','students@save');

Route::get('list','samples@list');

Route::get('event','UserAuth@index');

Route::view('index','index');
Route::get('contact','art@list');
Route::get('about','art@show');
Route::get('historical','art@historicals');
Route::get('fashion','art@fashions');
Route::get('nature','art@natures');
Route::get('register','art@try');
Route::get('login','art@user');
Route::post('submit','art@register');
Route::get('submit','art@login')->middleware('logCheck');

Route::view('order','order');

Route::post('submit','orderS@save');

Route::post('submit','orderS@show');



