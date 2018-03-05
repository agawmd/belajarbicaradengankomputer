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

//----------------------------------------------------------------------------------------------------------

//Personal Website Routes
//route (Header)
Route::get   ('/beranda',   'HomeController@index'      )->name('personal.beranda.home');
Route::get   ('/tentang',   'AboutController@index'     )->name('personal.tentang.about-info');
Route::get   ('/keahlian',  'SkillController@index'     )->name('personal.keahlian.skill-info');
Route::get   ('/project',   'PortfolioController@index' )->name('personal.project.portfolio-info');
Route::get   ('/kontak',    'ContactController@index'   )->name('personal.kontak.contact-info');


//----------------------------------------------------------------------------------------------------------

//Konoha Website
Route::get   ('/first',  'PertamaController@index'      )->name('konoha.uzumaki.home');
Route::get   ('/second', 'PertamaController@kampung'    )->name('konoha.uzumaki.village');
Route::get   ('/third',  'PertamaController@organisasi' )->name('konoha.uzumaki.team');
Route::get   ('/fourth', 'PertamaController@marga'      )->name('konoha.uzumaki.clan');
Route::get   ('/fifth',  'PertamaController@jurus'      )->name('konoha.uzumaki.jutsu');
