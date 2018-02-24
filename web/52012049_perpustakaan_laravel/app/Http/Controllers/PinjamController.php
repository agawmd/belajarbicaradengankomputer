<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use App\Buku;

class PinjamController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function pinjam(Request $r, $idBuku) {
        $buku = Buku::findOrFail($idBuku);
        return view('admin.buku.pinjam')
                        ->with('buku', $buku);
    }
    
    

    public function savePinjam(Request $r, $idBuku) {
        $buku = Buku::findOrFail($idBuku);
        $pinjam = new Pinjam();
        $pinjam->id_buku      = $idBuku;
        $pinjam->nim          = $r->nim;
        $pinjam->tgl_pinjam   = $r->tgl_pinjam;
        $pinjam->lama_pinjam  = $r->lama_pinjam;

        if($pinjam->save()) {
            $status = 'success';
            $pesan = "Peminjaman buku dengan judul <strong>{$buku->judul}</strong> berhasil disimpan.";
        }
        else {-
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat menyimpan peminjaman, coba lagi';
        }
        
        return redirect()->route('home.buku')
                ->with(compact('status','pesan'));
    }

    public function kembali(Request $r) {
        
        $pinjam = Pinjam::whereNull('tgl_kembali')->get();
        return view('admin.buku.kembali')
                ->with('daftarPeminjaman', $pinjam);
    }


    public function kembaliDetail(Request $r, $idPinjam) {
        
        $pinjam = Pinjam::findOrFail($idPinjam);
       
        return $pinjam
                ? view('admin.buku.kembaliDetail')->with('detailPeminjaman', $pinjam)
                : redirect()->route('buku.kembali');
    }

    
    
    
    public function saveKembali(Request $r, $idPinjam) {
        $balik = Pinjam::findOrFail($idPinjam);
        $balik->tgl_kembali     = $r->tgl_kembali;
        
        if ($balik->save()) {
            $status = 'success';
            $pesan = "Pengembalian buku oleh <strong>{$balik->nim}</strong> dengan judul <strong>{$balik->detailBuku->judul}</strong> berhasil disimpan.";            
        } else {
            $status = 'danger';
            $pesan = 'Terjadi kesalahan saat menyimpan pengembalian, coba lagi';            
        }
        
    return redirect()->route('buku.kembali')
                ->with(compact('status', 'pesan'));
            
        
    }

}
