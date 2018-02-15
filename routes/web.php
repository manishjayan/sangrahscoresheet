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

Route::get('/winners', function () {
    return view('winners');
});

Auth::routes();


Route::get('/', 'WinnerController@show_leaderboard')->name('leaderboard');
Route::get('/winners', 'WinnerController@show_winners')->name('winners');

Route::post('/home', 'HomeController@store');
Route::get('/success', 'HomeController@success_page')->name('success');

