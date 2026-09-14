@extends('layouts.app')

@section('title', 'Beranda - ' . $nama)

@section('content')
<section class="relative min-h-screen flex items-center overflow-hidden">

    <img src="{{ asset('images/bg-campus.png') }}" class="absolute inset-0 w-full h-full object-cover">

    <div class="relative z-10 max-w-7xl mx-auto w-full px-8 pt-24">
        <h1 class="font-serif text-3xl sm:text-5xl md:text-6xl font-semibold mb-8 animate-typing overflow-hidden whitespace-nowrap border-r-3 border-r-white pr-5">
            Selamat Datang!
        </h1>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('agent') }}"
            class="inline-block bg-white text-blue-900 font-semibold rounded-full px-6 py-3 text-sm hover:bg-gray-100 transition">
                Rencana Proyek
            </a>
            <a href="{{ route('dashboard.mahasiswa.detail', $nrp) }}"
               class="inline-block border border-white text-white font-semibold rounded-full px-6 py-3 text-sm hover:bg-white hover:text-blue-900 transition">
                Lihat Profil Lengkap
            </a>
        </div>
    </div>
</section>
@endsection
