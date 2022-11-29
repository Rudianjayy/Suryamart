<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\sejarah;
use App\Models\galeri;

class LandingController extends Controller
{
    public function landing() {
        $sejarah = sejarah::all();
        $galeri = galeri::all();
        return view('landingsurya.landing',compact('sejarah','galeri'));
    }

}



