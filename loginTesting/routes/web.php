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

Route::resource('/', 'WelcomeController');
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/home', 'UserController@index');
Route::post('/process', 'LoginController@process');
Route::resource('/user', 'UserController');
