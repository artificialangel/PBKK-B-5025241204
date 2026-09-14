@extends('layouts.app')

@section('title', 'Detail Mahasiswa - ' . $nrp)

@section('content')
<section class="relative min-h-screen flex items-center justify-center px-4 py-32 overflow-hidden">

    <img src="{{ asset('images/bg-campus.png') }}" alt="Gedung Teknik Informatika ITS"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="relative z-10 bg-white text-gray-900 rounded-2xl shadow-2xl max-w-lg w-full p-10">

        <p class="text-sm text-gray-500 mb-1">Dashboard &middot; Detail Mahasiswa</p>
        <h1 class="font-serif text-3xl font-bold mb-6">NRP {{ $nrp }}</h1>

        @if ($profil)
            <dl class="grid grid-cols-[130px_1fr] gap-y-2 text-sm">
                <dt class="font-semibold">Nama</dt>
                <dd>: {{ $profil['nama'] }}</dd>

                <dt class="font-semibold">Program Studi</dt>
                <dd>: {{ $profil['prodi'] }}</dd>

                <dt class="font-semibold">Angkatan</dt>
                <dd>: {{ $profil['angkatan'] }}</dd>

                <dt class="font-semibold">IPK</dt>
                <dd>: {{ $profil['ipk'] }}</dd>
            </dl>
        @else
            <p class="text-sm text-gray-600">
                Data untuk NRP <span class="font-semibold">{{ $nrp }}</span> belum terdaftar
                di sistem ini. Tambahkan datanya di
                <code class="bg-gray-100 px-1 rounded">PageController@mahasiswa</code>.
            </p>
        @endif

        <p class="text-xs text-gray-400 mt-8">
            Format NRP yang diterima: tepat 10 digit angka (contoh: /dashboard/mahasiswa/5025211000)
        </p>
    </div>
</section>
@endsection