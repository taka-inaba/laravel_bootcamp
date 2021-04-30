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


Route::get('/', 'AwesomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/user', 'AwesomeController@show');

Route::get('/user/{user}', 'PostController@create');
// Route::get('/user', 'PostController@create');
Route::post('/user/{user}','PostController@store');


Route::get('/list','AwesomeController@list')->name('list');

Route::post('/list/{user}/follow','FollowController@follow');
Route::delete('/list/{user}/unfollow','FollowController@unfollow');

Route::get('/user/{followed_id}/follow','AwesomeController@follow')->name('user.follow');
Route::get('/user/{unfollowed_id}/unfollow','AwesomeController@unfollow')->name('user.unfollow');

Route::get('/user/{id}/following','AwesomeController@following')->name('user.following');
Route::get('/user/{id}/followers','AwesomeController@followers')->name('user.followers');

Route::get('/user/{posts}/edit','PostController@edit');
Route::delete('/user/{posts}/edit','PostController@delete');
Route::patch('/user/{posts}/edit','PostController@update');

