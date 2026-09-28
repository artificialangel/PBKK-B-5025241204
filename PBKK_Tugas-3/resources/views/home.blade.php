@extends('layouts.app')

@section('title', 'Beranda - ' . $nama)

@section('content')
<section class="relative min-h-screen flex items-center overflow-hidden">

    <div class="relative z-10 max-w-7xl mx-auto w-full px-8 pt-24">
        <h1 class="mb-8 animate-typing overflow-hidden whitespace-nowrap border-r-3 border-r-black dark:border-r-white pr-5">
            Selamat Datang!
        </h1>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('agent') }}"
            class="inline-block bg-black text-white dark:bg-white dark:text-black font-semibold rounded-full px-6 py-3 text-sm hover:bg-white hover:text-black dark:hover:bg-black dark:hover:text-white transition">
                Rencana Proyek
            </a>
            <a href="{{ route('dashboard.mahasiswa.detail', $nrp) }}"
              class="inline-block border border-black text-black dark:border-white dark:text-white font-semibold rounded-full px-6 py-3 text-sm hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">
                Lihat Profil Lengkap
            </a>
        </div>
    </div>
</section>
@endsection
