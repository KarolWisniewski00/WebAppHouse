<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutInvestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlatAdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\InvestEndController;
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
    Route::get('/', [InvestController::class, 'index'])->name('invest');
    Route::get('/show/{slug}', [InvestController::class, 'show'])->name('invest.show');
    Route::get('/dlugosza', [InvestEndController::class, 'dlugosza'])->name('invest.dlugosza');
    Route::get('/kopernika', [InvestEndController::class, 'kopernika'])->name('invest.kopernika');
    Route::get('/wodna', [InvestEndController::class, 'wodna'])->name('invest.wodna');
});
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about-invest', [AboutInvestController::class, 'index'])->name('about.invest');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::prefix('/')->group(function () {
            Route::get('/', [FlatAdminController::class, 'index'])->name('dashboard');
            Route::get('/create', [FlatAdminController::class, 'create'])->name('dashboard.flat.create');
            Route::post('/store', [FlatAdminController::class, 'store'])->name('dashboard.flat.store');
            Route::get('/edit/{flat}', [FlatAdminController::class, 'edit'])->name('dashboard.flat.edit');
            Route::put('/update/{flat}', [FlatAdminController::class, 'update'])->name('dashboard.flat.update');
            Route::delete('/delete/{flat}', [FlatAdminController::class, 'delete'])->name('dashboard.flat.delete');
        });
    });
});
