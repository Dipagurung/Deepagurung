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

Route::get('adduser','App\Http\Controllers\UserController@addUser')->name('addUser');
Route::post('createuser','App\Http\Controllers\UserController@createUser')->name('createUser');

Route::get('addpost','App\Http\Controllers\PostController@addPost')->name('addPost');
Route::post('createpost','App\Http\Controllers\PostController@createPost')->name('createPost');
Route::get('listposts','App\Http\Controllers\PostController@listPost')->name('listPost');
 Route::get('deletepost/{post}','App\Http\Controllers\PostController@deletePost')->name('deletePost');

