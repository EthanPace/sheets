@props(['href'])
<form action="{{ $href }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="flex w-full text-gray-100 bg-gray-800 hover:bg-gray-600
    rounded-lg p-2 items-center">
        {{ $icon ?? '' }}
        <h1 class="ml-4">{{ $slot }}</h1>
    </button>
</form>