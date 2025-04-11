<x-layout>
    <x-header>
        <x-slot:heading>Edit this Note</x-slot:heading>
        <x-slot:subheading>Write it! You read it, {{ $note->user->username }}!</x-slot:subheading>
    </x-header>

    <main class="overflow-y-scroll overflow-x-none p-4 flex gap-4 h-full">
        <div class=" w-full h-full">
            <x-note.edit-card :note="$note"/>
        </div>
    </main>
</x-layout>