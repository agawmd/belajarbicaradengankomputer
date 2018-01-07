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

Route::get('/home',     'HomeController@index')->name('home.index');
Route::get('/buku',     'HomeController@buku')->name('home.buku');
Route::get('/aplikasi', 'HomeController@aplikasi')->name('home.aplikasi');
Route::get('/ilmiah',   'HomeController@ilmiah')->name('home.ilmiah');
Route::get('/jurnal',   'HomeController@jurnal')->name('home.jurnal');
