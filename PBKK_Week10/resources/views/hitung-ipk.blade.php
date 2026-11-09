@extends('layouts.app')

@section('title', 'Hasil Kalkulator IPK')

@section('content')
<section class="relative min-h-screen flex items-center justify-center px-4 py-32 overflow-hidden">
    <div class="relative z-10 w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden border border-white/10">

        {{-- Tab / path bar --}}
        <div class="bg-white px-6 py-4 flex items-center gap-3 border-b border-white/10">
            <span class="text-xs font-bold tracking-wide text-black">PBKK</span>
            <span class="text-xs text-gray-400 font-mono">/hitung-ipk/&#123;ip1&#125;/&#123;ip2&#125;</span>
        </div>

        <div class="bg-white px-8 py-10">
            <h1 class="font-serif text-3xl sm:text-4xl mb-3">
                <span class="italic">Calculate</span> Your GPA.
            </h1>
            <p class="text-gray-300 text-sm mb-8">
                Here's your total and average across two semesters.
            </p>

            <div class="flex flex-wrap items-center gap-3 text-sm">
                <label class="font-semibold">GPA 1</label>
                <span class="w-24 inline-block rounded-lg px-3 py-2 text-gray-900 bg-gray-200 text-center font-semibold">{{ $ip1 }}</span>
                <span class="font-semibold">and GPA 2</span>
                <span class="w-24 inline-block rounded-lg px-3 py-2 text-gray-900 bg-gray-200 text-center font-semibold">{{ $ip2 }}</span>
            </div>
        </div>

        <div class="bg-white border-t border-white/10 px-8 py-6 flex flex-wrap items-center gap-x-10 gap-y-3">
            <a href="{{ route('calculator') }}"
                    class="border border-black text-black font-semibold rounded-lg px-6 py-3 text-sm hover:bg-black hover:text-white transition">
                Recount
            </a>
            <p class="text-sm font-bold">Total GPA: <span class="text-black">{{ $jumlah }}</span></p>
            <p class="text-sm font-bold">Average GPA: <span class="text-black">{{ $rataRata }}</span></p>
        </div>
    </div>

</section>
@endsection
