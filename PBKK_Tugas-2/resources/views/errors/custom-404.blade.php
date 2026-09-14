@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<section class="relative min-h-screen flex items-center justify-center px-6 text-center overflow-hidden">

    <img src="{{ asset('images/bg-campus.png') }}" alt="Gedung Teknik Informatika ITS" class="absolute inset-0 w-full h-full object-cover">

    <div class="relative z-10">
        <p class="font-serif text-7xl font-bold mb-4">404</p>
        <h1 class="text-2xl font-semibold mb-3">Halaman Tidak Ditemukan</h1>
        <p class="text-gray-300 mb-8 max-w-md mx-auto">
            URL yang kamu tuju tidak cocok dengan rute manapun.
        </p>
        <a href="{{ route('home') }}"
           class="inline-block bg-white text-blue-900 font-semibold rounded-full px-6 py-3 text-sm hover:bg-gray-100 transition">
            Kembali ke Home
        </a>
    </div>
</section>
@endsection