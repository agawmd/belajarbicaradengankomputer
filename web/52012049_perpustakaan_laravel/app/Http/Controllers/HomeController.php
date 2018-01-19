<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Model
use App\Buku;
use App\Ilmiah;
use App\Jurnal;
use App\TugasAplikasi;
use App\Admin;
use App\Pinjam;


class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home.index');
    }
    
    
    public function buku() {
        $daftarBuku = Buku::get();
        return view('home.buku')
                ->with(compact('daftarBuku'));
    }
    
    
    public function aplikasi() {
        $daftarBuku = TugasAplikasi::get();
        return view('home.aplikasi')
                ->with(compact('daftarBuku'));
    }

     
    
    public function ilmiah() {
        $daftarBuku = Ilmiah::get();
        return view('home.ilmiah')
                ->with(compact('daftarBuku'));
    }
    
    
    public function jurnal() {
        $daftarBuku = Jurnal::get();
        return view('home.jurnal')
                ->with(compact('daftarBuku'));
    }
    
    
    public function user() {
        $masukAdmin = User::get();
        return view('home.admin')
                ->with(compact('masukAdmin'));
    }
    
    
}
