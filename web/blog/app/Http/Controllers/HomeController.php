<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function beranda() {
        return view('home.beranda');
    }
    
    public function profil() {
        return view('home.profil');
    }
    public function pengalaman() {
        return view('home.pengalaman');
    }
    
    public function keahlian() {
        return view('home.keahlian');
    }    
    
    public function penghargaan() {
        return view('home.penghargaan');
    }
    
    public function kontak() {
        return view('home.kontak');
    }    
    
    
}
