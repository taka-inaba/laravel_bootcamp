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

Route::get('/', 'HomeController@home');

Route::get('/home/create', 'HomeController@create');

Route::post('/home', 'HomeController@store');


Route::get('/profile', function () {
    return view('profile');
});


Route::get('/settings', function () {
    return view('settings');
});

