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

Route::group(['middleware'=>'auth'], function(){
    Route::get('adduser','App\Http\Controllers\UserController@addUser')->name('addUser');
Route::post('createuser','App\Http\Controllers\UserController@createUser')->name('createUser');
Route::get('listuser','App\Http\Controllers\UserController@listUser')->name('listUser');
Route::get('deleteuser/{user}','App\Http\Controllers\UserController@deleteUser')->name('deleteUser');
Route::get('edituser/{user}','App\Http\Controllers\UserController@editUser')->name('editUser');
Route::post('updateuser/{user}','App\Http\Controllers\UserController@updateUser')->name('updateUser');

Route::get('addpost','App\Http\Controllers\PostController@addPost')->name('addPost');
Route::post('createpost','App\Http\Controllers\PostController@createPost')->name('createPost');
Route::get('listposts','App\Http\Controllers\PostController@listPost')->name('listPost');
Route::get('readpost/{post}','App\Http\Controllers\PostController@readPost')->name('readPost');
Route::get('deletepost/{post}','App\Http\Controllers\PostController@deletePost')->name('deletePost');
Route::get('editpost/{post}','App\Http\Controllers\PostController@editPost')->name('editPost');
Route::post('updatepost/{post}','App\Http\Controllers\PostController@updatePost')->name('updatePost');

Route::get('addstory','App\Http\Controllers\StoryController@addStory')->name('addStory');
Route::post('createstory','App\Http\Controllers\StoryController@createStory')->name('createStory');
Route::get('liststories','App\Http\Controllers\StoryController@listStory')->name('listStory');
Route::get('readstory/{story}','App\Http\Controllers\StoryController@readStory')->name('readStory');
Route::get('deletestory/{story}','App\Http\Controllers\StoryController@deleteStory')->name('deleteStory');
Route::get('editstory/{story}','App\Http\Controllers\StoryController@editStory')->name('editStory');
Route::post('updatestory/{story}','App\Http\Controllers\StoryController@updateStory')->name('updateStory');

});

Route::get('login','App\Http\Controllers\UserController@getLogin')->name('getLogin');
Route::post('login','App\Http\Controllers\UserController@postLogin')->name('postLogin');

Route::get('logout','App\Http\Controllers\UserController@getLogout')->name('getLogout');

Route::get('profile','App\Http\Controllers\UserController@getProfile')->name('getProfile')->middleware('auth');


