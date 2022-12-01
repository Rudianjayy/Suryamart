<?php

namespace App\Http\Controllers;
use App\Models\tim;
use App\Models\galeri;
use App\Models\Slider;
use App\Models\sejarah;
use App\Models\Suryateam;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing() {
        $sejarah = sejarah::all();
        $galeri = galeri::all();
        $Slider = Slider::all();
        $team = Suryateam::all();
        return view('landingsurya.landing',compact('sejarah','galeri','Slider','team'));
    }

}



