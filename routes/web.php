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


Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/index', 'UsersController@index')->name('user.index');
    Route::get('/show/{id}', 'UsersController@show')->name('user.show');
    Route::get('/edit/{id}', 'UsersController@edit')->name('user.edit');
    Route::post('/update/{id}', 'UsersController@update')->name('user.update');
    Route::get('/new', 'UsersController@new')->name('user.new');
    Route::post('/store', 'UsersController@store')->name('user.store');
});