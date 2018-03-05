<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function beranda() {
        return view('home.beranda');
    }    
    
    public function profile() {
        return view('home.profile');
    }
}
