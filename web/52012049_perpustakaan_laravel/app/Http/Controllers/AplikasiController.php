<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Model
use App\TugasAplikasi;


class AplikasiController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    
    public function add() {
        return view('admin.aplikasi.add');
    }
    
    
    public function save(Request $r) {
        
        $aplikasi = new TugasAplikasi();
        
        $aplikasi->judul       = $r->judul;
        $aplikasi->nim         = $r->nim;
        $aplikasi->nama        = $r->nama;
        $aplikasi->pembimbing  = $r->pembimbing;
        $aplikasi->jurusan     = $r->jurusan;
        $aplikasi->tahun       = $r->tahun;
        $aplikasi->jumlah      = $r->jumlah;
        $aplikasi->status      = true;
        
        if ($aplikasi->save()) {
            $status = 'Sukses';
            $pesan  = "Tugas Aplikasi dengan judul <strong>{$r->judul}</strong> berhasil disimpan.";
        } else {
            $status = 'Gagal';
            $pesan  = 'Terjadi kesalahan saat menyimpan Tugas Aplikasi, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));
        
    }
        
    
    public function edit() {}
    
    
    public function update(Request $r) {}
    
}
