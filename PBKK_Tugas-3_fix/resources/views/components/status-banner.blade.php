@props(['type' => 'info'])

@php
    $colors = [
        'error'   => 'text-red-400',
        'success' => 'text-green-400',
        'info'    => 'text-blue-300',
    ];
    $colorClass = $colors[$type] ?? $colors['info'];
@endphp

<p {{ $attributes->merge(['class' => "$colorClass text-xs mt-4"]) }}>
    {{ $slot }}
</p>
