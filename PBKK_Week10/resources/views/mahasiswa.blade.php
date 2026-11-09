@extends('layouts.app')

@section('title', 'Detail Mahasiswa - ' . $nrp)

@section('content')
<section class="relative min-h-screen flex items-center justify-center px-4 py-32 overflow-hidden">
    <div class="relative z-10 bg-white text-gray-900 rounded-5xl shadow-2xl max-w-lg w-full p-10">

        <p class="text-gray-500 mb-3">Detail &middot; Mahasiswa</p>
        <h1 class="mb-6 sm:text-4xl text-gray-900">NRP {{ $nrp }}</h1>

        @if ($profil)
            <dl class="grid grid-cols-[130px_1fr] gap-y-2 text-sm">
                <x-info-card label="Nama" :value="$profil['nama']" />
                <x-info-card label="Program Studi" :value="$profil['prodi']" />
                <x-info-card label="Angkatan" :value="$profil['angkatan']" />
                <x-info-card label="IPK" :value="$profil['ipk']" />
            </dl>
        @else
            <p class="text-sm text-gray-600">
                Data untuk NRP <span class="font-semibold">{{ $nrp }}</span> belum terdaftar
                di sistem ini. Tambahkan datanya di
                <code class="bg-gray-100 px-1 rounded">PageController@mahasiswa</code>.
            </p>
        @endif

        <p class="text-xs text-gray-400 mt-8">
            /dashboard/mahasiswa/5025211204
        </p>
    </div>
</section>
@endsection