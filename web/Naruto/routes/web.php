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

Route::get('/',          'HomeController@beranda'   )->name('home.beranda');
Route::get('/profile',   'HomeController@profile'   )->name('home.profile');
Route::get('/portfolio', 'HomeController@portfolio' )->name('home.portfolio');
Route::get('/skill',     'HomeController@skill'     )->name('home.skill');
Route::get('/resume',    'HomeController@resume'    )->name('home.resume');
