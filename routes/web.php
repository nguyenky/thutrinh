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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kqxs', 'HomeController@kqxs')->name('kqxs');
Route::get('/apiGetChanel/{id}','HomeController@apiGetChanel')->name('kqxs');
Route::post('/updateValue/{id}','HomeController@updateValue')->name('kqxs');
Route::get('/test/{id}','HomeController@test')->name('kqxs');
// updateValue
