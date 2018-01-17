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
    return view('halaman_awal');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('apl01', 'apl01Controller@index');
Route::get('datapeserta', 'apl01Controller@index2');
Route::post('apl01', 'apl01Controller@store');
Route::get('apl02/{id}', 'apl02Controller@index');
Route::get('pengecekan', 'pengecekanController@index');

Route::get('unit', 'unitController@index');
Route::post('unit', 'unitController@store');
Route::get('unit/{id}/update', 'unitController@update');
Route::get('unit/{id}/delete','unitController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
