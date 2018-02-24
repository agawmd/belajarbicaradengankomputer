<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('pic');
    }

    public function registration() {
        return view('home.create');
    }
    
    public function tampil() {
        return view('home.tampil');
    }
    
    public function gambar() {
        $img = file_get_contents(public_path('nyx.jpg'));
        return response($img)->header('Content-type', 'image/png');
    }       
    
}
