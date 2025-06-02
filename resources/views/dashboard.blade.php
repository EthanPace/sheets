<x-layout>
    <x-header>
        <x-slot:heading>Dashboard</x-slot:heading>
        <x-slot:subheading></x-slot:subheading>
    </x-header>

    <div class="flex justify-between w-full overflow-auto h-screen flex-1">
        @auth
            <div class="mx-4 sm:mx-6 mt-4 sm:mt-6 grid grid-cols-1 gap-4 sm:gap-6 w-full">
                @if (Auth::user()->character != null)
                    <x-card.character link="/characters/{{ Auth::user()->character->id }}" :character="Auth::user()->character"/>
                @endif
            </div>
        @endauth
    </div>
</x-layout>