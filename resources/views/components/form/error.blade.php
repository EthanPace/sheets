@props(['field' => "password"])
@error($field)
    <p class="bg-red-200 border border-red-500 py-4 px-8 rounded-2xl text-xs text-red-500 font-semibold m-2">{{ strtoupper($message) }}</p>
@else
    <p class="bg-transparent border border-transparent py-4 px-8 rounded-2xl text-xs text-transparent font-semibold m-2 select-none">THIS IS A HIDDEN ERROR MESSAGE</p>
@enderror