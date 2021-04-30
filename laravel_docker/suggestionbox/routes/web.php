<?php

use App\Http\Controllers\SuggestsController;
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

Route::get('/home', 'SuggestsController@index');

Route::get('/home/create', 'SuggestsController@create');

Route::post('/home', 'SuggestsController@store');

// Route::get('/home/{suggests}', 'SuggestsController@show');
Route::patch('/home/{suggests}', 'SuggestsController@update');

Route::post('/home/{suggests}/edit', 'SuggestsController@store');
Route::get('/home/{suggests}/edit', 'SuggestsController@edit');


Route::delete('/home/{suggests}', 'SuggestsController@delete');

Route::post('/home/{suggests}/upvote', 'VoteController@upvote');
Route::delete('/home/{suggests}/downvote', 'VoteController@downvote');
