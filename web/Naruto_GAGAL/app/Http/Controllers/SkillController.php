<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() {
        return view('personal.keahlian.skill-info');
    }
}
