<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Home(){
        return view('test');
    }
    public function Pay(){
        return view('gaji');
    }
    public function Master(){
        return view('master');
    }
    public function Presensi(){
        return view('presensi');
    }
}