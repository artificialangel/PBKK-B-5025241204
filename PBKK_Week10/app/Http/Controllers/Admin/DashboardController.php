<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalMahasiswa' => Mahasiswa::count(),
            'totalUser' => User::count(),
            'totalStaf' => User::role('staf')->count(),
            'rataIpk' => round((float) Mahasiswa::avg('ipk'), 2),
            'mahasiswaTerbaru' => Mahasiswa::latest()->take(5)->get(),
        ]);
    }
}
