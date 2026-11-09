<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MahasiswaController;
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
// ---------------------------------------------------------------
// Dashboard & RBAC (AdminLTE + Spatie). Semua /admin/* wajib login.
// ---------------------------------------------------------------
Route::middleware('auth')->group(function () {
    // Breeze mengarahkan user ke route('dashboard') setelah login
    Route::redirect('/dashboard', '/admin/dashboard')->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->middleware('permission:view-dashboard')
            ->name('dashboard');

        Route::middleware('permission:view-data')->group(function () {
            Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
        });

        Route::middleware('permission:create-data')->group(function () {
            Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
            Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
        });

        Route::middleware('permission:edit-data')->group(function () {
            Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
            Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
        });

        // Lapisan server-side: hanya yang punya permission delete-data (admin)
        Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])
            ->middleware('permission:delete-data')
            ->name('mahasiswa.destroy');
    });
});

// Rute login/logout/register dari Laravel Breeze (dibuat oleh breeze:install)
if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}

Route::fallback(function () {
    return response()->view('errors.custom-404', [], 404);
});


