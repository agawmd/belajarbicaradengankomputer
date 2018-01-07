<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }
    
    
    public function buku() {
        $daftarBuku = Buku::get();
        return view('home.buku')
                ->with(compact('daftarBuku'));
    }
    
    public function aplikasi() {
        $daftarBuku = Buku::get();
        return view('home.aplikasi')
                ->with(compact('daftarBuku'));
    }

        /**
     * bikin sendiri dlu sisanya
     * nnti klw sudah baru blg
     * 
     * ie mi
     * s mau rabu2 membersihkan bru mandi bru sholla
     * sbar
     * tunggu
     * 
     */ 
    
    public function ilmiah() {
        $daftarBuku = Buku::get();
        return view('home.ilmiah')
                ->with(compact('$daftarBuku'));
    }
    
    
    public function jurnal() {
        $daftarBuku = Buku::get();
        return view('home.jurnal')
                ->with(compact('$daftarBuku'));
    }
    
}
