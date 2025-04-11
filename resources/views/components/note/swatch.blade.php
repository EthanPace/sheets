@props(['theme'])

@php
    $color = $theme;
    $background = "100";
    $border = "300";
    $hover = "50";
    $selected = "700";
@endphp

<li>
    <input type="radio" id="{{ $theme }}" name="theme" value="{{ $theme }}" class="hidden peer" required />
    <label for="{{ $theme }}" 
        class="inline-flex items-center justify-between w-[3rem] h-[3rem] p-4 
            bg-{{ $theme }}-{{ $background }} border-{{ $theme }}-{{ $border }}
            border-2 hover:bg-{{ $theme }}-{{ $hover }} rounded-xl cursor-pointer 
            peer-checked:bg-{{ $theme }}-100 peer-checked:border-{{ $theme }}-{{ $selected }} 
        ">
    </label>
</li>