<x-layout>
    <x-header>
        <x-slot:heading>Create a Note</x-slot:heading>
        <x-slot:subheading>Pick a Colour, any Colour!</x-slot:subheading>
    </x-header>

    <main class="overflow-y-scroll overflow-x-hidden p-4 border-none h-full w-full m-auto p-4">
        <form action="/notes/create" method="POST" class="p-4 w-[60rem] m-auto grid grid-cols-1 gap-y-4">
            @csrf
            <x-form.input field="title" title="TITLE"/>

            <div class="bg-white rounded-lg p-4 border border-gray-300 w-full m-auto">
                <h1 class="text-gray-400 text-sm mb-4">COLOR</h1>
                <ul class="flex gap-4 justify-between">
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
            </div>

            <x-form.text-area field="text" title="TEXT"/>

            <x-form.submit-button/>
        </form>
    </main>
</x-layout>