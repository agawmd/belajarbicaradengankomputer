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
    
    public function portfolio() {
        return view('home.portfolio');
    }
    
    public function skill() {
        return view('home.skill');
    }
    
    public function resume() {
        return view('home.resume');
    }
    
    public function handler() {
        return view('home.handler');
    }
    
    public function confirmation() {
        return view('home.confirmation');
    }

}
