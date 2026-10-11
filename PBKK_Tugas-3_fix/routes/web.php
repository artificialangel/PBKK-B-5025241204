<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Tantangan 2: alias supaya /beranda?user=Andi bisa diakses
Route::get('/beranda', [PageController::class, 'index'])->name('beranda');

// Tantangan 1: alias supaya /ide-agent?mode=dark bisa diakses
Route::get('/ide-agent/{tema?}', [PageController::class, 'agent'])->name('ide-agent');


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
        ->where('nrp', '[0-9]{10}')
        ->name('mahasiswa.detail');
});
Route::get('/agent/{tema?}', [PageController::class, 'agent'])->name('agent');
Route::get('/calculator', [PageController::class, 'calculator'])->name('calculator');
Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'hitungIpk'])
    ->where('ip1', '[0-4](\.[0-9]{1,2})?')
    ->where('ip2', '[0-4](\.[0-9]{1,2})?')
    ->name('hitung.ipk');
Route::fallback(function () {
    return response()->view('errors.custom-404', [], 404);
});


