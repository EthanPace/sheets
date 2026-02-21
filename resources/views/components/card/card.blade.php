@props(['width' => "full"])
<a {{ $attributes }} class="bg-white h-24 sm:h-fit w-{{ $width }} p-6 border border-2 border-gray-300 rounded-3xl shadow-md hover:shadow-lg transition-shadow duration-300" draggable="false">
    <div class="flex justify-between items-center">
        {{ $header }}
    </div>
    @if ($slot != "")
        <div class="mt-4">
            {{ $slot }}
        </div>
    @endif
</a>