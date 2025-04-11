<x-layout>
    <x-header>
        <x-slot:heading>Look at this Note</x-slot:heading>
        <x-slot:subheading>Read it! You wrote it, {{ $note->user->username }}!</x-slot:subheading>
    </x-header>

    <main class="overflow-y-scroll overflow-x-none p-4 flex gap-4">
        <div class="p-4 bg-white h-fit rounded-lg border border-gray-300 flex flex-col gap-4 text-center">
            <form action="/notes/{{ $note->id }}/swatch" method="POST">
                @csrf
                <h1 class="text-gray-400 text-sm mb-2">COLOR</h1>
                <ul class="">
                    <x-note.swatch theme="rose"/>
                    <x-note.swatch theme="yellow"/>
                    <x-note.swatch theme="indigo"/>
                    <x-note.swatch theme="gray"/>
                    <x-note.swatch theme="cyan"/>
                    <x-note.swatch theme="lime"/>
                    <x-note.swatch theme="purple"/>
                    <x-note.swatch theme="orange"/>
                    <x-note.swatch theme="pink"/>
                </ul>
                <x-submission-swatch dest="/notes/{{ $note->id }}/swatch/"/>
            </form>

            <div>
                <h1 class="text-gray-400 text-sm mb-2">EDIT</h1>
                <x-little-button dest="/notes/{{ $note->id }}/edit" anchor="true">
                    <x-icon.note size="15"/>
                </x-little-button>
            </div>
        </div>
        <x-note.card :note="$note"/>
    </main>
</x-layout>