@props(['note'])

@php
    $color = $note->theme;
    $text = "gray-800";
    $background = "100";
    $border = "300";
    $title = "500";
    $paragraph = "500";
@endphp

<div class="p-4 bg-{{ $color }}-{{ $background }} border-2 border-{{ $color }}-{{ $border }} rounded-2xl w-full h-full overflow-hidden">
    <div class="flex flex-col h-full justify-between">
        <div class="overflow-x-hidden overflow-y-auto">
            <h1 class="font-bold mb-2 text-{{ $text }}-{{ $title }}">{{ $note->title }}</h1>
            <p class="text-{{ $text }}-{{ $paragraph }} text-wrap whitespace-pre-wrap break-words">{{ $note->text }}</p>
        </div>
    </div>
</div>