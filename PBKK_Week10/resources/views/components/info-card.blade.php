@props(['label', 'value'])

<dt {{ $attributes->merge(['class' => 'font-semibold']) }}>{{ $label }}</dt>
<dd>: {{ $value }}</dd>
