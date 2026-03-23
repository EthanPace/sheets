@props(['currency'])
<div class="bg-white h-fit w-full p-6 border border-2 border-gray-300 rounded-3xl shadow-md hover:shadow-lg transition-shadow duration-300 mb-4" draggable="false">
    <div class="flex justify-between w-full xl:px-32">
        <p class="px-4 py-2 bg-gray-100 rounded-full">Gold Pieces: {{ $currency['gold'] }}</p>
        <p class="px-4 py-2 bg-gray-100 rounded-full">Silver Pieces: {{ $currency['silver'] }}</p>
        <p class="px-4 py-2 bg-gray-100 rounded-full">Copper Pieces: {{ $currency['copper'] }}</p>
    </div>
</div>