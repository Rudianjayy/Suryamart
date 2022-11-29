<?php

namespace App\Http\Controllers;

use App\Models\Suryateam;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing() {
        $team = Suryateam::all();
        return view('landingsurya.landing', compact('team'));
    }
   
}


                 
