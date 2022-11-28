<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\SuryamartController;
use Illuminate\Support\Facades\Route;

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

