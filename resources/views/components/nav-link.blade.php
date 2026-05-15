@props(['active' => false])

@php
$classes = ($active ?? false)
            ? 'text-blue-900 font-semibold border-b-2 border-blue-900 pb-1 transition duration-150 ease-in-out'
            : 'text-slate-600 hover:text-blue-900 hover:border-b-2 hover:border-blue-300 pb-1 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>