<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Model
use App\Ilmiah;
use Session;


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
    
    
    public function edit(Request $r, $idIl) {
        $ilmiah = Ilmiah::findOrFail($idIl);
        return $ilmiah
                ? view('admin.ilmiah.add')->with('ilmiah', $ilmiah)
                : view('errors.404');
    }
    
    
    public function update(Request $r, $idIl) {
        $ilmiah = Ilmiah::findOrFail($idIl);
        
        $ilmiah->judul       = $r->judul;
        $ilmiah->nim         = $r->nim;
        $ilmiah->nama        = $r->nama;
        $ilmiah->pembimbing  = $r->pembimbing;
        $ilmiah->bidang      = $r->bidang;
        $ilmiah->tahun       = $r->tahun;
        $ilmiah->jumlah      = $r->jumlah;

        if ($ilmiah->save()) {
            $status = 'Sukses';
            $pesan  = "Karya Ilmiah dengan judul <strong>{$r->judul}</strong> berhasil diubah.";
            return redirect()->route('home.ilmiah')
                    ->with(compact('status','pesan'));
        } else {
            $status = 'Gagal';
            $pesan  = 'Terjadi kesalahan saat menyimpan Karya Ilmiah, coba lagi';
            return redirect()->back()
                    ->with(compact('status','pesan'));
        }
        
    }
    
    public function hapus(Request $r, $idIl) {
        $result = Ilmiah::findOrFail($idIl);
        
        if($result->delete()) {
            Ilmiah::where('judul', $idIl)->delete();
            $status = 'success';
            $pesan = "Karya Ilmiah dengan judul <strong>{$r->judul}</strong> berhasil dihapus.";
        }
        else {
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat menghapus karya ilmiah, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));        
    }
    
}
