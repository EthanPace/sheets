@php
    $classes = "inline-block border-2 rounded-sm w-5 h-5 mb-[0px] mt-[2px]";
    
    if ($slot != "") {
        $classes .= " bg-gray-500 border-gray-500";
    } else {
        $classes .= " bg-white border-gray-500";
    }
@endphp

<div class="{{ $classes }}"></div>