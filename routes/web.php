<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ConsolexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us_submit');

//Rotta game
Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
// Rotta console
Route::get('/consolex/create', [ConsolexController::class, 'create'])->name('consolex.create');