@props(['action', 'padding' => 8])
<a href="{{ $action }}" class="py-2 px-{{ $padding }} border-2 border-indigo-500 rounded-lg bg-indigo-200 hover:bg-indigo-100 trasition-colors duration-300 text-indigo-700">
    {{ $slot }}
</a>