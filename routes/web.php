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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function() {
    Route::get('eccprofile/create','Admin\EccController@add');
    Route::post('eccprofile/create', 'Admin\EccController@create');
    Route::get('eccprofile', 'Admin\EccController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
