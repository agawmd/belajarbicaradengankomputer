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
Route::get('/admin',    'HomeController@admin')->name('home.admin');


Route::middleware(['auth'])->group(function() {

    
    Route::prefix('buku')->group(function() {
        /**
         * Tambah buku
         */
        // buka form tambah buku
        Route::get('add',   'BukuController@add')->name('buku.add');
        // simpan buku baru
        Route::post('save', 'BukuController@save')->name('buku.save');
        
        /**
         *  untuk edit buku
         */
        // buka form edit buku
        Route::get('edit',      'BukuController@edit')->name('buku.edit');
        // proses edit buku
        Route::post('update',   'BukuController@update')->name('buku.update');
        
        Route::get('pinjam/{idBuku}',         'PinjamController@pinjam'     )->name('buku.pinjam');
        Route::get('pinjam/{idBuku}/simpan',  'PinjamController@savePinjam' )->name('buku.pinjam.simpan');
        Route::get('kembali/{idBuku}',        'PinjamController@kembali'    )->name('buku.kembali');
        Route::get('kembali/{idBuku}/simpan', 'PinjamController@saveKembali')->name('buku.kembali.simpan');

    });

    Route::prefix('aplikasi')->group(function() {
        Route::get('add',       'AplikasiController@add'    )->name('aplikasi.add');
        Route::post('save',     'AplikasiController@save'   )->name('aplikasi.save');
        Route::get('edit',      'AplikasiController@edit'   )->name('aplikasi.edit');
        Route::post('update',   'AplikasiController@update' )->name('aplikasi.update');
    });

    Route::prefix('ilmiah')->group(function() {
        Route::get ('add',       'IlmiahController@add'    )->name('ilmiah.add');
        Route::post('save',      'IlmiahController@save'   )->name('ilmiah.save');
        Route::get ('edit',      'IlmiahController@edit'   )->name('ilmiah.edit');
        Route::post('update',    'IlmiahController@update' )->name('ilmiah.update');
    });

    
    Route::prefix('jurnal')->group(function() {
        Route::get ('add',       'JurnalController@add'    )->name('jurnal.add');
        Route::post('save',      'JurnalController@save'   )->name('jurnal.save');
        Route::get ('edit',      'JurnalController@edit'   )->name('jurnal.edit');
        Route::post('update',    'JurnalController@update' )->name('jurnal.update');
    });

    

});