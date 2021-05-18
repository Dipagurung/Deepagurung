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



Route::get('/', 'App\Http\Controllers\PageController@getHomePage')->name('getHomePage');
Route::get('/about-myself', 'App\Http\Controllers\PageController@getAboutPage')->name('getAboutPage');
Route::get('/my-hobbies', 'App\Http\Controllers\PageController@getHobbiesPage')->name('getHobbiesPage');
