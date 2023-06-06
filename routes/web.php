<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::prefix('invest')->group(function () {
    Route::get('/',[InvestController::class, 'index'])->name('invest');
    Route::get('/show/{slug}',[InvestController::class, 'show'])->name('invest.show');
});
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');

