<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing() {
        return view('landingsurya.landing');
    }
    public function katalog() {
        return view('katalog.katalog');
    }
    public function hubungikami() {
        return view('hubungikami.hubungikami');
    }
    public function promo() {
        return view('promokatalog.promo');
    }
}


                 
