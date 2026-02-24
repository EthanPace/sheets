@props(['href'])
<a class="flex text-gray-100 bg-gray-800 hover:bg-gray-600
    rounded-lg p-2 items-center" href="{{ $href }}">
    {{ $icon ?? '' }}
    <h1 class="ml-4">{{ $slot }}</h1>
</a>