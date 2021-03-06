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


Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');

Route::post('/books', 'BookController@store');

Route::get('/books/{book}', 'BookController@show');
Route::patch('/books/{book}', 'BookController@update');

Route::get('/books/{book}/edit', 'BookController@edit');
Route::post('/books/{book}/edit', 'BookController@store');

Route::delete('/books/{book}', 'BookController@delete');


