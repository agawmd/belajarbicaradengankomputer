<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Model
use App\TugasAplikasi;
use Session;

class AplikasiController extends Controller {
    
    public function switchLang(Request $r, $locale) {
        $locale = session('locale', config('locale', 'id'));
        session(['locale' => $locale]);
    }
    
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
        
    
    public function edit(Request $r, $id) {
        $aplikasi = TugasAplikasi::findOrFail($id);
        return $aplikasi
                ? view('admin.aplikasi.add')->with('aplikasi', $aplikasi)
                : view('errors.404');
    }
    
    
    public function update(Request $r, $id) {
        $aplikasi = TugasAplikasi::findOrFail($id);
        
        $aplikasi->judul        = $r->judul;
        $aplikasi->nim          = $r->nim;
        $aplikasi->nama         = $r->nama;
        $aplikasi->pembimbing   = $r->pembimbing;
        $aplikasi->jurusan      = $r->jurusan;
        $aplikasi->tahun        = $r->tahun;
        $aplikasi->jumlah       = $r->jumlah;


        if ($aplikasi->save()) {
            $status = 'Sukses';
            $pesan = "Tugas Aplikasi dengan judul <strong>{$r->judul}</strong> berhasil diubah.";
            return redirect()->route('home.aplikasi')
                    ->with(compact('status', 'pesan'));
        } 
        else {
            $status = 'Gagal';
            $pesan = 'Terjadi kesalahan saat mengubah Tugas Aplikasi, coba lagi';
            return redirect()->back()
                    ->with(compact('status', 'pesan'));
        }

    }
    
    public function hapus(Request $r, $id) {
        $result = TugasAplikasi::findOrFail($id);
        
        if($result->delete()) {
            TugasAplikasi::where('judul', $id)->delete();
            $status = 'success';
            $pesan = "Tugas Aplikasi dengan judul <strong>{$r->judul}</strong> berhasil dihapus.";
        }
        else {
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat menghapus tugas aplikasi, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));
    }
    
    
    
}
