@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<section class="relative min-h-screen flex items-center justify-center px-6 text-center overflow-hidden">

    <div class="relative z-10">
        <h1 class="mb-3">404</h1>
        <h1 class="text-2xl mb-2">Halaman Tidak Ditemukan</h1>
        <p class="mb-8 max-w-md mx-auto">
            URL yang kamu tuju tidak cocok dengan rute manapun.
        </p>
        <a href="{{ route('home') }}"
                class="border border-black dark:border-white text-black dark:text-white font-semibold rounded-lg px-6 py-3 text-sm hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">
            Kembali ke Home
        </a>
    </div>
</section>
@endsection