<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertamaController extends Controller
{
    public function index() {
        return view('konoha.uzumaki.home');
    }     
    
    public function kampung() {
        return view('konoha.uzumaki.village');
    }
    
    public function organisasi() {
        return view('konoha.uzumaki.team');
    }
    
    public function marga() {
        return view('konoha.uzumaki.clan');
    }
    
    public function jurus() {
        return view('konoha.uzumaki.jutsu');
    }
    
}
