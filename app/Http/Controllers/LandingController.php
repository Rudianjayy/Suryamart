<?php

namespace App\Http\Controllers;
use App\Models\tim;
use App\Models\promo;

use App\Models\About;
use App\Models\Suryateam;
use Illuminate\Http\Request;
use App\Models\sejarah;
use App\Models\galeri;
use App\Models\Slider;

class LandingController extends Controller
{
    public function landing() {
        $team = Suryateam::all();
        $sejarah = sejarah::all();
        $galeri = galeri::all();
        $tentang = About::all();
        return view('landingsurya.landing',compact('sejarah','galeri','team','tentang'));
        $Slider = Slider::all();
        $team = Suryateam::all();
        $promo = promo::all();
        return view('landingsurya.landing',compact('sejarah','galeri','Slider','team','promo'));
        return view('landingsurya.landing',compact('sejarah','galeri','Slider'));
    }

}



