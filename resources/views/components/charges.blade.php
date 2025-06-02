@props(['mobile' => false, 'type'])
@php
    if ($mobile) {
        $border = "border-2";
    } else {
        $border = "";
    }
@endphp
<div class="flex justify-between bg-white rounded-xl border {{ $border }} border-gray-400 p-4 w-full pr-8">
    <h2 class="text-lg text-gray-400">{{ $type }}</h2>
    <h1 class="text-lg">{{ $slot }}</h1>
</div>