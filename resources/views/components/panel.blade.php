@props(['size' => 'base'])

@php
    $classes = "px-8 py-6 border border-gray-300 flex flex-col gap-2 rounded-lg shadow-md hover:bg-slate-200 hover:shadow-gray-600/50 hover:shadow-xl hover:scale-105 transition-all duration-300";
    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }
    if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>