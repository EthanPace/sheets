<x-layout>
    <x-header>
        <x-slot:heading>Edit {{ $character->name }}</x-slot:heading>
        <x-slot:subheading>{{ $character->species->name }} {{ $character->archetype->name }}</x-slot:subheading>
    </x-header>

    <main class="w-full h-full mx-auto overflow-y-scroll">
        <form class="p-4 grid grid-cols-1 gap-y-4" method="POST" action="/characters/update/{{ $character->id }}">
            @csrf

            @if ($errors->any())
                <div class="bg-red-50 border border-red-300 text-red-700 rounded-lg p-4">
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white rounded-lg p-4 border border-gray-300">
                <h1 class="text-gray-400 text-sm mb-4">GENERAL</h1>
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" placeholder="Character Name"
                            value="{{ old('name', $character->name) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg p-4 border border-gray-300">
                <h1 class="text-gray-400 text-sm mb-4">PROGRESSION</h1>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="level" class="text-xs text-gray-400 block mb-1">Level</label>
                        <input id="level" name="level" type="number" min="1" max="20" placeholder="Level"
                            value="{{ old('level', $character->level) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                    <div>
                        <label for="experience_points" class="text-xs text-gray-400 block mb-1">Experience Points</label>
                        <input id="experience_points" name="experience_points" type="number" min="0" placeholder="XP"
                            value="{{ old('experience_points', $character->experience_points) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                    <div>
                        <label for="proficiency_bonus" class="text-xs text-gray-400 block mb-1">Proficiency Bonus</label>
                        <input id="proficiency_bonus" name="proficiency_bonus" type="number" min="0" placeholder="Prof Bonus"
                            value="{{ old('proficiency_bonus', $character->proficiency_bonus) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg p-4 border border-gray-300">
                <h1 class="text-gray-400 text-sm mb-4">COMBAT</h1>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="armor_class" class="text-xs text-gray-400 block mb-1">Armor Class</label>
                        <input id="armor_class" name="armor_class" type="number" min="0" max="30" placeholder="AC"
                            value="{{ old('armor_class', $character->armor_class) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                    <div>
                        <label for="max_hit_points" class="text-xs text-gray-400 block mb-1">Max HP</label>
                        <input id="max_hit_points" name="max_hit_points" type="number" min="0" placeholder="Max HP"
                            value="{{ old('max_hit_points', $character->max_hit_points) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                    <div>
                        <label for="current_hit_points" class="text-xs text-gray-400 block mb-1">Current HP</label>
                        <input id="current_hit_points" name="current_hit_points" type="number" min="0" placeholder="Current HP"
                            value="{{ old('current_hit_points', $character->current_hit_points) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                    <div>
                        <label for="temporary_hit_points" class="text-xs text-gray-400 block mb-1">Temp HP</label>
                        <input id="temporary_hit_points" name="temporary_hit_points" type="number" min="0" placeholder="Temp HP"
                            value="{{ old('temporary_hit_points', $character->temporary_hit_points) }}"
                            class="w-full bg-white border border-gray-300 text-gray-500 focus:outline-gray-300 rounded-lg px-4 py-3 text-start">
                    </div>
                </div>
            </div>

            <x-form.submit-button>Save Changes</x-form.submit-button>
        </form>
    </main>
</x-layout>
