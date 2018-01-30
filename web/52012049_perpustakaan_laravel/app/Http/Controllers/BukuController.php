<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Model
use App\Buku;

class BukuController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function add() {
        return view('admin.buku.add');
    }

    public function save(Request $r) {
        $buku = new Buku();
        
        $buku->judul     = $r->judul;
        $buku->pengarang = $r->pengarang;
        $buku->penerbit  = $r->penerbit; 
        $buku->kota      = $r->kota;     
        $buku->tahun     = $r->tahun;    
        $buku->isbn      = $r->isbn;     
        $buku->jumlah    = $r->jumlah;   
        $buku->status    = true;   
        
        if($buku->save()) {
            $status = 'success';
            $pesan = "Buku dengan judul <strong>{$r->judul}</strong> berhasil disimpan.";
        }
        else {
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat menyimpan buku, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));
    }

    public function edit() {
        
    } 

    public function update(Request $r) {
        
    }

    
}
