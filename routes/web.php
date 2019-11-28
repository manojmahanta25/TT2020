<?php

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

Route::get('/', 'pageController@home');
Route::get('/event', 'pageController@event');
Route::get('/event/{id}', 'pageController@eventFetch');
Route::get('/register', 'pageController@registration');
Route::get('/sponsor', 'pageController@sponsor');
