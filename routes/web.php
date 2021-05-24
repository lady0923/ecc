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
    Route::get('ecc/create','Admin\EccController@add');
    Route::post('ecc/create', 'Admin\EccController@create');
    Route::get('ecc', 'Admin\EccController@index');
    Route::get('ecc/edit', 'Admin\EccController@edit');
    Route::post('ecc/edit', 'Admin\EccController@update');
    Route::get('ecc/delete', 'Admin\EccController@delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
