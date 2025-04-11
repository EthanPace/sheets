@props(['note'])

@php
    $color = $note->theme;
    $text = "gray-800";
    $background = "100";
    $border = "300";
    $title = "500";
    $paragraph = "500";
@endphp

<div href="/notes/{{ $note->id }}" class="p-4 bg-{{ $color }}-{{ $background }} border-2 border-{{ $color }}-{{ $border }} rounded-2xl w-full h-full overflow-x-none overflow-y-auto">
    <form class="flex flex-col w-full h-full justify-between" action="/notes/{{ $note->id }}/edit" method="POST">
        @csrf
        <div class="h-full">
            <input class="font-bold mb-2 text-{{ $text }}-{{ $title }} w-full focus:outline-none focus:outline-b"
                id="title" 
                name="title"
                value="{{ $note->title }}">
            <textarea markdown="1" class="text-{{ $text }}-{{ $paragraph }} w-full h-full focus:outline-none resize-none" 
                id="text" 
                name="text"
            >{{ $note->text }}</textarea>
        </div>

        <div class="flex w-full justify-between">
            <x-little-button class="position-absolute text-{{ $color }}-{{ $border }}"  theme="{{ $note->theme }}" value="delete">
                <x-icon.trash size="15"/>
            </x-little-button>

            <x-little-button class="text-{{ $color }}-{{ $border }}"  theme="{{ $note->theme }}">
                <x-icon.floppy size="15"/>
            </x-little-button>
        </div>

    </form>

</div>