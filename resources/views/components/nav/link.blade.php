@props(['page' => 'dashboard'])

@php
    $classes = "flex items-center px-2 sm:px-4 py-2 rounded-md w-full";

    if (request()->is(explode("?", $page)[0])) {
        $classes .= " text-gray-100 bg-gray-700 hover:bg-gray-600";
    } else {
        $classes .= " text-gray-300 hover:bg-gray-700";
    }
@endphp

<a href="/{{ $page }}" class="{{ $classes }}" {{ $attributes }} draggable=false>
    {{ $icon ?: '' }}
    <h1 class="invisible sm:visible ml-4 sm:w-full">{{ $slot }}</h1>
</a>