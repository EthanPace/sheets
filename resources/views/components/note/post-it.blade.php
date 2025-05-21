@props(['note'])

@php
    $color = $note->theme;
    $text = "gray-800";
    $background = "100";
    $border = "300";
    $hover = "50";
    $title = "500";
    $paragraph = "500";
@endphp

<a href="/notes/{{ $note->id }}" class="p-4 bg-{{ $color }}-{{ $background }} hover:bg-{{ $color }}-{{ $hover }} border-2 border-{{ $color }}-{{ $border }} rounded-xl w-[14rem] h-[14rem]">
    <div class="flex flex-col h-full w-full justify-between overflow-hidden">
        <div>
            <h1 class="font-bold mb-2 text-{{ $text }}-{{ $title }}">{{ $note->title }}</h1>
            <p class="text-{{ $text }}-{{ $paragraph }} text-wrap break-words h-[7.5rem] overflow-hidden">{{ $note->preview() }}</p>
        </div>
        <div class="float">
            @if ($note->user == Auth::user())
                <h3 class="text-end text-white font-bold text-xl">>></h3>
            @else
                <h3 class="text-end text-white font-bold text-xl">{{ $note->user->username }}</h3>
            @endif
        </div>
    </div>
</a>