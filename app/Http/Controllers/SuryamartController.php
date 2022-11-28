<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class SuryamartController extends Controller
{
    public function katalog() {
        $katalog = Katalog::paginate(16);
        return view('katalog.katalog', compact('katalog'));
    }

    public function adminkatalog() {
        $datakatalog = Katalog::all();
        return view('promokatalog.adminkatalog.adminkatalog', compact('datakatalog'));
    }
    public function tambahkatalog() {
        return view('promokatalog.adminkatalog.tambahkatalog');
    }
    public function hubungikami() {
        return view('hubungikami.hubungikami');
    }
    public function promo() {
        return view('promokatalog.promo');
    }
}
