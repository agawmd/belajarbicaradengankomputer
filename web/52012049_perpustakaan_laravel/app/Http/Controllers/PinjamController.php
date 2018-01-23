<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use App\Buku;

class PinjamController extends Controller {
    
    
    public function __construct() {
        $this->middleware('auth');
    }


        public function pinjam(Request $r, $idbuku) {
        $pinjamBuku = Pinjam::get();
        return view('buku.pinjam')
                        ->with(compact('pinjamBuku'));
    }

    public function savePinjam(Request $r, $idBuku) {
        
    }

    public function kembali(Request $r, $idBuku) {
        
    }

    public function saveKembali(Request $r, $idBuku) {
        
    }
}
