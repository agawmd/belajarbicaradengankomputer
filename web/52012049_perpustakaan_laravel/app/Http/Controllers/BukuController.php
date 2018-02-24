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
        return redirect()->route('home.buku')
                ->with(compact('status','pesan'));
        }
        else {
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat menyimpan buku, coba lagi';
        return redirect()->back()
                ->with(compact('status','pesan'));
        }
        
    }

    public function edit(Request $r, $idBuku) {
        $buku = Buku::findOrFail($idBuku);
        return view('admin.buku.add')
                        ->with('buku', $buku);
    } 

    public function update(Request $r, $idBuku) {
        $buku = Buku::findOrFail($idBuku);        
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
            $pesan = "Buku dengan judul <strong>{$r->judul}</strong> berhasil diubah.";
        }
        else {
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat mengubah detail buku, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));        
    }
    
    public function hapus(Request $r, $idBuku) {
        $result = Buku::findOrFail($idBuku);
        
        if($result->delete()) {
            Pinjam::where('id_buku', $idBuku)->delete();
            $status = 'success';
            $pesan = "Buku dengan judul <strong>{$r->judul}</strong> berhasil dihapus.";
        }
        else {
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat menghapus buku, coba lagi';
        }
        
        return redirect()->back()
                ->with(compact('status','pesan'));
    }

    
}
