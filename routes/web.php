<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutInvestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FlatAdminController;
use App\Http\Controllers\FloorAdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\InvestEndController;
use App\Http\Controllers\RodoController;
use App\Http\Controllers\SettingAdminController;
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
    Route::post('/', [FilterController::class, 'show'])->name('invest.filter');
    Route::get('/show/{slug}', [InvestController::class, 'show'])->name('invest.show');
    Route::get('/dlugosza', [InvestEndController::class, 'dlugosza'])->name('invest.dlugosza');
    Route::get('/kopernika', [InvestEndController::class, 'kopernika'])->name('invest.kopernika');
    Route::get('/wodna', [InvestEndController::class, 'wodna'])->name('invest.wodna');
});
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/rodo', [RodoController::class, 'index'])->name('rodo');
Route::get('/about-invest', [AboutInvestController::class, 'index'])->name('about.invest');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/pin', [SettingAdminController::class, 'pin'])->name('pin');


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
            Route::get('/edit/{table}', [FlatAdminController::class, 'edit'])->name('dashboard.flat.edit');
            Route::put('/update/{table}', [FlatAdminController::class, 'update'])->name('dashboard.flat.update');
            Route::delete('/delete/{table}', [FlatAdminController::class, 'delete'])->name('dashboard.flat.delete');
        });
        Route::prefix('floor')->group(function () {
            Route::get('/', [FloorAdminController::class, 'index'])->name('dashboard.floor');
            Route::get('/edit/{table}', [FloorAdminController::class, 'edit'])->name('dashboard.floor.edit');
            Route::put('/update/{table}', [FloorAdminController::class, 'update'])->name('dashboard.floor.update');
        });
        Route::prefix('setting')->group(function () {
            Route::get('/', [SettingAdminController::class, 'index'])->name('dashboard.setting');
            Route::get('/edit/{table}', [SettingAdminController::class, 'edit'])->name('dashboard.setting.edit');
            Route::get('/edit/photo/{table}', [SettingAdminController::class, 'photo'])->name('dashboard.setting.edit.photo');
            Route::put('/update/{table}', [SettingAdminController::class, 'update'])->name('dashboard.setting.update');
            Route::put('/upload/{table}', [SettingAdminController::class, 'upload'])->name('dashboard.setting.upload');
        });
    });
});
