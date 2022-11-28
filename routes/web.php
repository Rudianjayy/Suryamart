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
