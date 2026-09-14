@extends('layouts.app')

@section('title', 'Ide Platform Agentic AI - ' . $tema)

@section('content')
<section class="relative min-h-screen flex items-center overflow-hidden">

    <img src="{{ asset('images/bg-campus.png') }}" class="absolute inset-0 w-full h-full object-cover">

    <div class="relative z-10 flex justify-center w-full px-6">
        <div class="bg-white text-gray-900 rounded-6xl shadow-2xl max-w-xl w-full p-10">
            <p class="text-sm text-gray-500 mb-1">Ide Platform Agentic AI</p>

            @if ($badge)
                <span class="inline-block text-[10px] tracking-widest font-bold bg-gray-900 text-white rounded-full px-3 py-1 mb-3">
                    {{ $badge }}
                </span>
            @endif

            <h1 class="font-serif text-3xl font-semibold mb-4">{{ $tema }}</h1>

            <p class="text-gray-700 leading-relaxed text-justify">{{ $deskripsi }}</p>

            @if (count($tags))
                <div class="flex flex-wrap gap-2 mt-6">
                    @foreach ($tags as $tag)
                        <span class="text-xs font-semibold bg-gray-100 text-gray-700 rounded-full px-3 py-1">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            @endif

            <p class="text-xs text-gray-400 mt-8">
                Format URL: /agent/{tema?} &mdash; parameter opsional, contoh: /agent/Security%20Agent
            </p>
        </div>
    </div>
</section>
@endsection