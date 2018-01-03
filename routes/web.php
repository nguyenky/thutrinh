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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/kqxs', 'HomeController@kqxs')->name('kqxs');
// Route::get('/sosach', 'HomeController@kqxs')->name('kqxs');
// Route::get('/apiGetChanel/{id}','HomeController@apiGetChanel')->name('kqxs');
// Route::post('/updateValue/{id}','HomeController@updateValue')->name('kqxs');
// Route::get('/test/{id}','HomeController@test')->name('kqxs');
// updateValue

Route::group(['namespace'=>'admin','middleware'=>'admin'],function(){

	Route::get('/','DashboardController@index');

});

Route::group(['namespace'=>'Login'],function(){

	Route::get('/dang-nhap', 'LoginController@login');

	Route::post('/login','LoginController@postLogin')->name('login');

	Route::get('/logout','LoginController@logout')->name('logout');

});

Route::group(['namespace'=>'admin','prefix' => 'admin','middleware'=>'admin'],function(){

	Route::get('trang-chu','DashboardController@index')->name('admin.index');

	Route::get('ket-qua-so-so','LotteryResultsController@index')->name('admin.lottery_results');

});

Route::get('test',function(){
	return view('test');
});