<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Models\About;
use App\Models\Suryateam;
use Illuminate\Http\Request;
use App\Models\sejarah;
=======
>>>>>>> 04033e82fb43ba077c93ad16495737f4f0cb1378
use App\Models\galeri;
use App\Models\Slider;
use App\Models\sejarah;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing() {
        $team = Suryateam::all();
        $sejarah = sejarah::all();
        $galeri = galeri::all();
<<<<<<< HEAD
        $tentang = About::all();
        return view('landingsurya.landing',compact('sejarah','galeri','team','tentang'));
=======
        $Slider = Slider::all();
        return view('landingsurya.landing',compact('sejarah','galeri','Slider'));
>>>>>>> 04033e82fb43ba077c93ad16495737f4f0cb1378
    }

}



