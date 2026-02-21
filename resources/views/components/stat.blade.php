@props(['height' => "tall"])

@if ($height == "tall")
    <div class="bg-white border border-indigo-500 border-2 rounded-lg px-4 pb-3 pt-1 text-center">
        <h1 class="font-bold mb-1">{{ $slot }}</h1>
        <h1 class="bg-white rounded-lg py-2 mb-2 border border-indigo-200">{{ $mod }}</h1>
        <h2 class="bg-white rounded-2xl py-1 text-sm w-full mx-auto text-center justify-center border border-indigo-200">{{ $stat }}</h2>
    </div>
@else
    <div class="w-[5rem] bg-white border border-gray-300 rounded-lg px-4 pb-3 pt-1 text-center">
        <h1 class="font-bold">{{ $slot }}</h1>
        <h1 class="bg-white rounded-2xl py-1 text-sm w-full mx-auto text-center justify-center border border-gray-200">{{ $mod }}</h1>
    </div>
@endif