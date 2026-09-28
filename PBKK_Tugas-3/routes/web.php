<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/* Rute 1: Halaman Home */
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

/*
|--------------------------------------------------------------------------
| Tantangan 3: Grouping - Rute profil akademis dikelompokkan di bawah
| prefix /dashboard
|--------------------------------------------------------------------------
| Rute 2: Detail Profil (/dashboard/mahasiswa/{nrp})
| Tantangan 1: Regex where() -> hanya menerima 10 digit angka bulat (NRP ITS)
*/
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
        ->where('nrp', '[0-9]{10}')
        ->name('mahasiswa.detail');
});

/*
|--------------------------------------------------------------------------
| Rute 3: Ide Platform Agentic AI (/agent/{tema?})
|--------------------------------------------------------------------------
| Parameter {tema} bersifat opsional. Jika kosong, fallback ke
| 'General Assistant Agent' di dalam controller.
*/
Route::get('/agent/{tema?}', [PageController::class, 'agent'])->name('agent');

/*
|--------------------------------------------------------------------------
| Kalkulator
|--------------------------------------------------------------------------
| Halaman form (UI) kalkulator IPK.
*/
Route::get('/calculator', [PageController::class, 'calculator'])->name('calculator');

/*
|--------------------------------------------------------------------------
| Tantangan 2: Kalkulator Portofolio Akademis
|--------------------------------------------------------------------------
| /hitung-ipk/{ip1}/{ip2} -> menjumlahkan & merata-ratakan IP dua semester.
| IP dibatasi 0.0 s.d. 4.x lewat regex where().
*/
Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'hitungIpk'])
    ->where('ip1', '[0-4](\.[0-9]{1,2})?')
    ->where('ip2', '[0-4](\.[0-9]{1,2})?')
    ->name('hitung.ipk');

/*
|--------------------------------------------------------------------------
| Tantangan 3: Fallback Route
|--------------------------------------------------------------------------
| Menangani semua rute yang tidak cocok dengan rute manapun di atas.
*/
Route::fallback(function () {
    return response()->view('errors.custom-404', [], 404);
});
