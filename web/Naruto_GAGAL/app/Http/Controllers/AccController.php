<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccController extends Controller
{
    public function create() {
        return view('home.create');
    }
    
    public function show(Request $r) {
        $soul = $r->name;
        return view('home.show')->with('soul',$soul);
    }
    
    public function play() {
        return view('home.pic');
    }
    
    public function yes() {
        return view('home.agree');
    }
    
    public function no() {
        return view('home.disagree');
    }
    
}
