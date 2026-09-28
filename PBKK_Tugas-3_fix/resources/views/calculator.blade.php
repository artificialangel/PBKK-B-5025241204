@extends('layouts.app')

@section('title', 'Calculator - GPA')

@section('content')
<section class="relative min-h-screen flex items-center justify-center px-4 py-32 overflow-hidden">
    <div class="relative z-10 w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden border border-white/10">

        {{-- Tab / path bar --}}
        <div class="bg-white dark:bg-black px-6 py-4 flex items-center gap-3 border-b border-white/10">
            <span class="text-xs font-bold tracking-wide text-black dark:text-white">PBKK</span>
            <span class="text-xs text-gray-400 font-mono">/hitung-ipk/&#123;ip1&#125;/&#123;ip2&#125;</span>
        </div>

        <div class="bg-white dark:bg-black px-8 py-10">
            <h1 class="font-serif text-3xl sm:text-4xl mb-3">
                <span class="italic">Calculate</span> Your GPA.
            </h1>
            <p class="text-gray-300 text-sm mb-8">
                Enter your semester GPAs and get your total and average.
            </p>

            <div class="flex flex-wrap items-center gap-3 text-sm">
                <label for="ip1" class="font-semibold">GPA 1</label>
                <input id="ip1" type="text" inputmode="decimal" placeholder="0.00"
                       class="w-24 rounded-lg px-3 py-2 text-gray-900 bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <span class="font-semibold">and GPA 2</span>
                <input id="ip2" type="text" inputmode="decimal" placeholder="0.00"
                       class="w-24 rounded-lg px-3 py-2 text-gray-900 bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <x-status-banner type="error" id="calc-error" class="hidden">
                Masukkan IP 1 dan IP 2 dengan format 0.0 &ndash; 4.x (contoh: 3.75).
            </x-status-banner>
        </div>

        <div class="bg-white dark:bg-black border-t border-white/10 px-8 py-6 flex flex-wrap items-center gap-x-10 gap-y-3">
            <button onclick="calcRedirect()"
                    class="border border-black dark:border-white text-black dark:text-white font-semibold rounded-lg px-6 py-3 text-sm hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">
                Count
            </button>
            <p class="text-sm font-bold">Total GPA: <span class="text-black dark:text-white">&mdash;</span></p>
            <p class="text-sm font-bold">Average GPA: <span class="text-black dark:text-white">&mdash;</span></p>
        </div>
    </div>

</section>

<script>
    function calcRedirect() {
        const ip1 = document.getElementById('ip1').value.trim();
        const ip2 = document.getElementById('ip2').value.trim();
        const errorEl = document.getElementById('calc-error');
        const pattern = /^[0-4](\.[0-9]{1,2})?$/;

        if (!pattern.test(ip1) || !pattern.test(ip2)) {
            errorEl.classList.remove('hidden');
            return;
        }

        errorEl.classList.add('hidden');
        window.location.href = `/hitung-ipk/${ip1}/${ip2}`;
    }
</script>
@endsection
