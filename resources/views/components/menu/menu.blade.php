@props(['mbwidth' => "[16rem]", 'width' => "[24rem]"])
<div class="w-{{ $mbwidth }} sm:w-{{ $width }} flex flex-col bg-gray-800 rounded-2xl p-4 border border-2 border-gray-600">
    {{ $slot }}
</div>
