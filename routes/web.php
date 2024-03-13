<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\HomeController@home');


Route::resource('slider','App\Http\Controllers\SliderController');
Route::get('slider/disable/{id}','App\Http\Controllers\SliderController@disable')->name('slider.disable');
Route::get('slider/enable/{id}','App\Http\Controllers\SliderController@enable')->name('slider.enable');