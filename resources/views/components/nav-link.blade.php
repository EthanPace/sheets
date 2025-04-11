@props(['page' => 'home'])

@php
    $classes = "flex items-center px-4 py-2 rounded-md";

    if (request()->is($page)) {
        $classes .= " text-gray-100 bg-gray-700 hover:bg-gray-600";
    } else {
        $classes .= " text-gray-300 hover:bg-gray-700";
    }
@endphp

<a href="/{{ $page }}" class="{{ $classes }}" {{ $attributes }}>
    {{ $slot }}
</a>