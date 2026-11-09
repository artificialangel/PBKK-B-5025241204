@extends('layouts.app')

@section('title', 'Profil Jurusan')

@section('content')
<section class="relative min-h-screen flex items-center overflow-hidden">

    <div class="relative z-10 max-w-3xl mx-auto w-full px-8 pt-24 text-center">
        <h1 class="mb-8"> {{ $nama_departemen }} </h1>
        <p class="mb-6">{{ $deskripsi }}</p>
    </div>
</section>
@endsection
