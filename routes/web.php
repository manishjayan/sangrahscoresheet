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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/', 'WinnerController@show_winners')->name('winners');
Route::get('/leaderboard', 'WinnerController@show_leaderboard')->name('leaderboard');

Route::post('/home', 'HomeController@store');
Route::get('/success', 'HomeController@success_page')->name('success');

