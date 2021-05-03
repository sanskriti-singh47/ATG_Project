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
    return view('login');
});

Route::view('register','register');
Route::view('login','login');
Route::post('registerUser','App\Http\Controllers\MainController@registerUser');
Route::post('loginUser','App\Http\Controllers\MainController@loginUser');
Route::get('logout','App\Http\Controllers\MainController@logout');

