<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SuryamartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [LandingController::class, 'landing'])->name('landing');


//login&register
Route::get('/register', [SuryamartController::class, 'register'])->name('register')->middleware('guest');
Route::post('/registeruser', [SuryamartController::class, 'registeruser'])->name('registeruser');
Route::get('/login', [SuryamartController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses', [SuryamartController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [SuryamartController::class, 'logout'])->name('logout');
//katalog
Route::get('/katalog', [SuryamartController::class, 'katalog'])->name('katalog');
Route::get('/adminkatalog', [SuryamartController::class, 'adminkatalog'])->name('adminkatalog');
Route::get('/tambahkatalog', [SuryamartController::class, 'tambahkatalog'])->name('tambahkatalog');
Route::post('/prosestambahkatalog', [SuryamartController::class, 'prosestambahkatalog'])->name('prosestambahkatalog');
Route::get('/editkatalog/{id}', [SuryamartController::class, 'editkatalog/'])->name('editkatalog/');
Route::post('/proseseditkatalog/{id}', [SuryamartController::class, 'proseseditkatalog/'])->name('proseseditkatalog/');
Route::get('/deletekatalog/{id}', [SuryamartController::class, 'deletekatalog/'])->name('deletekatalog/');

Route::get('/hubungikami', [SuryamartController::class, 'hubungikami'])->name('hubungikami');

Route::get('/promo', [SuryamartController::class, 'promo'])->name('promo');


//Sejarah

Route::get('/sejarah', [SuryamartController::class, 'sejarah'])->name('sejarah');
Route::get('/adminsejarah', [SuryamartController::class, 'adminsejarah'])->name('adminsejarah');
Route::get('/tambahsejarah', [SuryamartController::class, 'tambahsejarah'])->name('tambahsejarah');
Route::post('/sejarahproses2', [SuryamartController::class, 'sejarahproses2'])->name('sejarahproses2');
Route::get('/editsejarah/{id}', [SuryamartController::class, 'editsejarah'])->name('editsejarah');
Route::post('/editproses2/{id}', [SuryamartController::class, 'editproses2'])->name('editproses2');
Route::get('/deletesejarah/{id}', [SuryamartController::class, 'deletesejarah'])->name('deletesejarah');


//Galeri

Route::get('/galeri', [SuryamartController::class, 'galeri'])->name('galeri');
Route::get('/admingaleri', [SuryamartController::class, 'admingaleri'])->name('admingaleri');
Route::get('/tambahgaleri', [SuryamartController::class, 'tambahgaleri'])->name('tambahgaleri');
Route::post('/galeriproses1', [SuryamartController::class, 'galeriproses1'])->name('galeriproses1');
Route::get('/editgaleri/{id}', [SuryamartController::class, 'editgaleri'])->name('editgaleri');
Route::post('/editproses1/{id}', [SuryamartController::class, 'editproses1'])->name('editproses1');
Route::get('/deletegaleri/{id}', [SuryamartController::class, 'deletegaleri'])->name('deletegaleri');



    Route::get('/teamsurya', [SuryamartController::class, 'loby'])->name('teamsurya');
    Route::get('/tambahteam', [SuryamartController::class, 'tambahteam'])->name('tambahteam');
    Route::post('/submitdata', [SuryamartController::class, 'submitdata'])->name('submitdata');
    Route::get('/editteam/{id}', [SuryamartController::class, 'editteam'])->name('editteam');
    Route::post('/submitedit/{id}', [SuryamartController::class, 'submitedit'])->name('submitedit');
    Route::get('/deleteteam/{id}', [SuryamartController::class, 'deleteteam'])->name('deleteteam');

