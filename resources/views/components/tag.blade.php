@props(['tag', 'size' => 'base']) 

@php
$classes = "bg-gray-300 py-1.5 text-slate-950 hover:bg-gray-900 hover:text-white rounded-3xl font-medium transition-colors duration-300";

    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }
    if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="#" class="text-center {{ $classes }}">{{Str::title($tag->name)}}</a>