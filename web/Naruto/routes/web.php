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
    return view('home.pic');
});

//route to get play form
Route::get ('/start',     'AccController@create' )->name('home.create');
Route::post('/next-step', 'AccController@show'   )->name('home.show');
Route::get ('/choose',    'AccController@play'    )->name('home.pic');
Route::get ('/yes',       'AccController@yes'    )->name('home.agree');
Route::get ('/no',        'AccController@no'     )->name('home.disagree');


Route::post('/save-regis',   'AccController@save'   )->name('home.save');


