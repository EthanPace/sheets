<x-layout>
    <x-header>
        <x-slot:heading>Dashboard</x-slot:heading>
        <x-slot:subheading></x-slot:subheading>
    </x-header>

    <main class="flex flex-cols-1 gap-y-4 p-4">
        @auth
            @if (Auth::user()->character != null)
                <x-character-card href="/characters/{{ Auth::user()->character->id }}" :character="Auth::user()->character"/>
            @endif
        @endauth
    </main>
</x-layout>