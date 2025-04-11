@props(['type' => 'top'])

@php
    $div = "rounded-xl py-2 border bg-white w-full";

    if ($type == 'top') {
        $div .= " px-4 border-2 border-indigo-500";
    } else {
        $div .= " border-gray-400 text-center items-center justify-center";
    }
@endphp

<div class="{{ $div }}">
    @if ($type == 'top')
        <h2 class="text-gray-400 text-sm">{{ $label }}</h2>
        <h1 class="text-lg">{{ $slot }}</h1>
    @else
        <h1 class="text-lg m-auto">{{ $slot }}</h1>
        <h2 class="text-gray-400 text-xs">{{ $label }}</h2>
    @endif
</div>