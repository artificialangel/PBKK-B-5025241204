@extends('layouts.app')

@section('title', 'Kalkulator Dinamis')

@section('content')
<section class="relative min-h-screen flex items-center justify-center px-6 py-32 bg-gradient-to-tr from-indigo-900 to-blue-700">
    <div class="bg-white text-gray-900 rounded-2xl shadow-2xl max-w-lg w-full p-10 text-center">

        <p class="text-sm text-gray-500 mb-4">Kalkulator Dinamis</p>

        @if ($error)
            <p class="text-red-600 font-semibold">{{ $error }}</p>
        @else
            <p class="text-xl">
                Hasil dari <span class="font-semibold">{{ $angka1 }}</span>
                {{ $label }}
                <span class="font-semibold">{{ $angka2 }}</span>
                adalah
                <span class="font-bold text-blue-800">{{ rtrim(rtrim(number_format($hasil, 4, '.', ''), '0'), '.') }}</span>
            </p>
        @endif

        <p class="text-xs text-gray-400 mt-8">
            Format URL: /hitung/{angka1}/{angka2}/{operasi} &mdash; operasi: tambah, kurang, kali, bagi
        </p>
    </div>
</section>
@endsection
