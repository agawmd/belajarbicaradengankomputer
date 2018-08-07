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

Route::get('/',            'HomeController@beranda'    )->name('home.beranda');
Route::get('/profil',      'HomeController@profil'     )->name('home.profil');
Route::get('/pengalaman',  'HomeController@pengalaman' )->name('home.pengalaman');
Route::get('/keahlian',    'HomeController@keahlian'   )->name('home.keahlian');
Route::get('/penghargaan', 'HomeController@penghargaan')->name('home.penghargaan');
Route::get('/kontak',      'HomeController@kontak'     )->name('home.kontak');