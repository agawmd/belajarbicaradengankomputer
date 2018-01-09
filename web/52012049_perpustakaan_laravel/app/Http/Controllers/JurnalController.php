<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Model
use App\Jurnal;


class JurnalController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    
    public function add() {
        return view('admin.jurnal.add');
    }
    
    
    public function save(Request $r) {
        
        $jurnal = new Jurnal();
        
        $jurnal->judul       = $r->judul;
        $jurnal->penulis     = $r->penulis;
        $jurnal->penerbit    = $r->penerbit;
        $jurnal->jurnal      = $r->jurnal;
        $jurnal->bidang      = $r->bidang;
        $jurnal->volume      = $r->volume;
        $jurnal->edisi       = $r->edisi;
        $jurnal->nomor       = $r->nomor;
        $jurnal->bulan       = $r->bulan;
        $jurnal->tahun       = $r->tahun;
        $jurnal->kota        = $r->kota;
        $jurnal->isbn        = $r->isbn;
        $jurnal->jumlah      = $r->jumlah;
        $jurnal->status      = true;
        
        if ($jurnal->save()) {
            $status = 'Sukses';
            $pesan  = "Journal/Prociding dengan judul <strong>{$r->judul}</strong> berhasil disimpan.";
        } else {
            $status = 'Gagal';
            $pesan  = 'Terjadi kesalahan saat menyimpan Journal/Prociding, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));
        
    }
    
    
    public function edit() {}
    
    
    public function update(Request $r) {}
    
}
