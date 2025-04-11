<x-layout>
    <x-header>
        <x-slot:heading>Create a Character</x-slot:heading>
        <x-slot:subheading>Note: this page is non-functional, and exists only as a scaffold for future development.</x-slot:subheading>
    </x-header>

    <main class="w-full h-full mx-auto overflow-y-scroll">
        <form class="p-4 grid grid-cols-1 gap-y-4" method="POST" action="/characters/store">
            <div class="bg-white rounded-lg p-4 border border-gray-300">
                <h1 class="text-gray-400 text-sm mb-4">SPECIES</h1>
                <ul class="grid grid-cols-4 gap-4">
                    @foreach ($species as $spec)
                        <x-radio :option_name="$spec->name" list_name="species">
                            <x-slot:title>{{ $spec->name }}</x-slot:title>
                        </x-radio>
                    @endforeach
                </ul>
            </div>

            <div class="bg-white rounded-lg p-4 border border-gray-300">
                <h1 class="text-gray-400 text-sm mb-4">CLASS</h1>
                <ul class="grid grid-cols-4 gap-4">
                    @foreach ($archetypes as $arch)
                        <x-radio :option_name="$arch->name" list_name="archetype">
                            <x-slot:title>{{ $arch->name }}</x-slot:title>
                        </x-radio>
                    @endforeach
                </ul>
            </div>

            <div class="bg-white rounded-lg p-4 border border-gray-300">
                <h1 class="text-gray-400 text-sm mb-4">BACKGROUND</h1>
                <ul class="grid grid-cols-4 gap-4">
                    @foreach ($backgrounds as $back)
                        <x-radio :option_name="$back->name" list_name="background">
                            <x-slot:title>{{ $back->name }}</x-slot:title>
                        </x-radio>
                    @endforeach
                </ul>
            </div>
        </form>
    </main>
</x-layout>