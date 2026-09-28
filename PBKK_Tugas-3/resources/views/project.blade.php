@extends('layouts.app')

@section('title', 'Rencana Proyek Akhir')

@push('styles')
<style>
    @media (prefers-reduced-motion: reduce) {
        .animate-floatIn {
            animation: none !important;
            opacity: 1 !important;
        }
    }
</style>
@endpush

@section('content')
<section class="relative min-h-screen overflow-hidden">


    {{-- Floating white card --}}
    <div class="relative z-10 flex justify-center pt-32 px-6 pb-20">
        <div class="bg-white text-gray-900 rounded-5xl shadow-2xl max-w-2xl w-full p-10 opacity-0 animate-floatIn">

            <h1 class="mb-6">
                Rencana Proyek Tugas Akhir
            </h1>

            <div class="mb-4">
                <h2 class="font-semibold text-lg mb-1">{{ $judul_ide }}</h2>
                <p class="text-sm text-blue-800 mb-4">Sub-tema: {{ $sub_tema }}</p>
                <p class="text-gray-700 leading-relaxed">
                    {{ $deskripsi }}
                </p>
            </div>

        </div>
    </div>
</section>
@endsection
