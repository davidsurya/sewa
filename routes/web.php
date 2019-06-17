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
    return view('home.app');
});

Route::get('/jquery-test', function () {
    return view('jquery.app');
})->name('jquery-test');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/add', 'AdminController@add');
    Route::get('/list', 'AdminController@getList');
    Route::get('/rekap', 'AdminController@getRekap');
    Route::delete('/delete/transaction', 'AdminController@deleteTransaction');
});
