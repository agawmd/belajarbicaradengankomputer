<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Model
use App\Ilmiah;


class IlmiahController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    
    public function add() {
        return view('admin.ilmiah.add');
    }
    
    
    public function save(Request $r) {
        
        $ilmiah = new Ilmiah();
        
        $ilmiah->judul       = $r->judul;
        $ilmiah->nim         = $r->nim;
        $ilmiah->nama        = $r->nama;
        $ilmiah->pembimbing  = $r->pembimbing;
        $ilmiah->bidang      = $r->bidang;
        $ilmiah->tahun       = $r->tahun;
        $ilmiah->jumlah      = $r->jumlah;

        if ($ilmiah->save()) {
            $status = 'Sukses';
            $pesan  = "Karya Ilmiah dengan judul <strong>{$r->judul}</strong> berhasil disimpan.";
        } else {
            $status = 'Gagal';
            $pesan  = 'Terjadi kesalahan saat menyimpan Karya Ilmiah, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));
        
        
        
    }
    
    
    public function edit() {}
    
    
    public function update(Request $r) {}
    
}
