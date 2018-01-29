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
            $status = 'Sukses';
            $pesan = "Peminjaman buku dengan judul <strong>{$buku->judul}</strong> berhasil disimpan.";
        }
        else {
            $status = 'Gagal';
            $pesan = 'Terjadi kesalahan saat menyimpan peminjaman, coba lagi';
        }
        
        return redirect()->route('buku.index')
                ->with(compact('status','pesan'));
    }

    public function kembali(Request $r, $idBuku) {
        
    }

    public function saveKembali(Request $r, $idBuku) {
        
    }

}
