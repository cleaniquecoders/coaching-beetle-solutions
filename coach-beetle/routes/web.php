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

Route::get('/', function () {
    return view('welcome');
});

// default
Auth::routes();

// sv
Route::get('sv/login', 'Auth\SupervisorLoginController@showLoginForm')->name('supervisor.login');
Route::post('sv/login', 'Auth\SupervisorLoginController@login')->name('supervisor.login');
Route::get('sv/home', 'HomeController@index')->name('sv.home');

Route::get('/home', 'HomeController@index')->name('home');

// Isi Rumah
Route::get('isi-rumah/{user}', 'IsiRumahController@index');
Route::get('isi-rumah/{user}/create', 'IsiRumahController@create');
Route::post('isi-rumah/{user}', 'IsiRumahController@store');
Route::post('isi-rumah/{user}/show/{id}', 'IsiRumahController@show');
Route::get('isi-rumah/{user}/edit/{id}', 'IsiRumahController@edit');
Route::put('isi-rumah/{user}/{id}', 'IsiRumahController@update');
Route::delete('isi-rumah/{user}/{id}', 'IsiRumahController@destroy');
