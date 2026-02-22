@props(['note'])

@php
    $color = $note->theme;
    $text = "gray";
    $background = "100";
    $border = "300";
    $hover = "50";
    $title = "800";
    $paragraph = "700";
@endphp

<a href="/notes/{{ $note->id }}" class="p-4 bg-{{ $color }}-{{ $background }} hover:bg-{{ $color }}-{{ $hover }} border-2 border-{{ $color }}-{{ $border }} rounded-xl w-[6rem] h-[6rem] sm:w-[14rem] sm:h-[14rem]">
    <div class="flex flex-col h-full w-full justify-between overflow-hidden">
        <div>
            @desktop
                <h1 class="font-bold mb-2 text-{{ $text }}-{{ $title }} text-xs sm:text-lg">{{ $note->title }}</h1>
                <p class="text-{{ $text }}-{{ $paragraph }} text-wrap break-words h-[7.5rem] overflow-hidden text-xs sm:text-md">{{ $note->preview() }}</p>
            @enddesktop

            @mobile
                <h1 class="font-bold mb-2 text-{{ $text }}-{{ $title }} text-xs sm:text-lg">{{ $note->short() }}</h1>
            @endmobile
        </div>
        <div class="float">
            @if ($note->user == Auth::user())
                <h3 class="text-end text-white font-bold sm:text-xl">>></h3>
            @else
                <h3 class="text-end text-white font-bold sm:text-xl">{{ $note->user->username }}</h3>
            @endif
        </div>
    </div>
</a>