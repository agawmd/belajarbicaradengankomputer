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


Auth::routes();
Route::get('/',         'HomeController@index')->name('home.index');
Route::get('/home',     'HomeController@index')->name('home.home');
Route::get('/buku',     'HomeController@buku')->name('home.buku');
Route::get('/aplikasi', 'HomeController@aplikasi')->name('home.aplikasi');
Route::get('/ilmiah',   'HomeController@ilmiah')->name('home.ilmiah');
Route::get('/jurnal',   'HomeController@jurnal')->name('home.jurnal');
Route::get('/admin',    'HomeController@admin')->name('home.admin');


Route::middleware(['auth'])->group(function() {

    
    Route::prefix('buku')->group(function() {
        Route::get ('add',                          'BukuController@add')->name('buku.add');
        Route::post('save',                         'BukuController@save')->name('buku.save');
        Route::get ('edit/{idBuku}',                'BukuController@edit')->name('buku.edit');
        Route::post('update/{idBuku}',              'BukuController@update')->name('buku.update');
        Route::get ('hapus/{idBuku}',               'BukuController@hapus')->name('buku.hapus');
   
        // pinjam buku
        Route::get ('pinjam/{idBuku}',              'PinjamController@pinjam'        )->name('buku.pinjam');
        Route::post('pinjam/{idBuku}/simpan',       'PinjamController@savePinjam'    )->name('buku.pinjam.simpan');
        
        // kembalikan buku pinjaman
        Route::get ('kembali/',                     'PinjamController@kembali'       )->name('buku.kembali');
        Route::get ('kembali/{idPinjam}/detail',    'PinjamController@kembaliDetail' )->name('buku.kembali.detail');
        Route::post('kembali/{idPinjam}/simpan',    'PinjamController@saveKembali'   )->name('buku.kembali.simpan');
        

    });

    Route::prefix('aplikasi')->group(function() {
        Route::get ('add',          'AplikasiController@add'    )->name('aplikasi.add');
        Route::post('save',         'AplikasiController@save'   )->name('aplikasi.save');
        Route::get ('edit/{id}',    'AplikasiController@edit'   )->name('aplikasi.edit');
        Route::post('update/{id}',  'AplikasiController@update' )->name('aplikasi.update');
        Route::get ('hapus/{id}',   'AplikasiController@hapus'  )->name('aplikasi.hapus');
    });

    Route::prefix('ilmiah')->group(function() {
        Route::get ('add',          'IlmiahController@add'    )->name('ilmiah.add');
        Route::post('save',         'IlmiahController@save'   )->name('ilmiah.save');
        Route::get ('edit/{idIl}',    'IlmiahController@edit'   )->name('ilmiah.edit');
        Route::post('update/{idIl}',  'IlmiahController@update' )->name('ilmiah.update');
        Route::get ('hapus/{idIl}',   'IlmiahController@hapus'  )->name('ilmiah.hapus');
    });

    Route::prefix('jurnal')->group(function() {
        Route::get ('add',          'JurnalController@add'    )->name('jurnal.add');
        Route::post('save',         'JurnalController@save'   )->name('jurnal.save');
        Route::get ('edit',         'JurnalController@edit'   )->name('jurnal.edit');
        Route::post('update',       'JurnalController@update' )->name('jurnal.update');
        Route::get ('hapus/{id}',   'JurnalController@hapus'  )->name('jurnal.hapus');        
    });

    

});