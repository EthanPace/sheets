@props(['anchor' => false, 'dest', 'theme' => false, 'value' => "update"])

@php
    if (! $theme) {
        $color = "gray";
    } else {
        $color = $theme;
    }
@endphp


@if ($anchor)
<a href="{{ $dest }}">
@else
<button type="submit" name="act" value="{{ $value }}">
@endif

    <div class="inline-flex justify-between w-[3rem] h-[3rem] p-1 content-center
        border-{{ $color }}-500 
        border-2 hover:bg-{{ $color }}-50 rounded-xl text-{{ $color }}-500">
        {{ $slot }}
    </div>

@if ($anchor)
</a>
@else
</button>
@endif
