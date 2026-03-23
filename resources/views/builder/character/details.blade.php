<x-layout>
    <x-header>
        <x-slot:heading>Create a Character</x-slot:heading>
        <x-slot:subheading>Choose your skill proficiencies.</x-slot:subheading>
    </x-header>

    <main class="w-full h-full overflow-y-scroll p-4">
        @subpageorbase("choices")
            @if ($errors->any())
                <div class="bg-red-50 border border-red-300 text-red-700 rounded-lg p-4 text-sm">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="/builder/character/{{ $character->id }}" method="POST" class="flex gap-4">
                @csrf

                <div class="bg-white rounded-lg p-4 border border-gray-300 w-fit">
                    <h1 class="text-gray-400 text-sm mb-1">SKILLS</h1>
                    <p class="text-gray-400 text-xs mb-4">Choose {{ $character->archetype->num_skills }}</p>
                    <ul class="flex flex-col gap-2">
                        @foreach ($skills as $skill)
                            <x-option.check :option_name="$skill->name" list_name="skills[]" :enabled="$character->can_take($skill->name)">
                                <x-slot:title>{{ $skill->name }}</x-slot:title>
                            </x-option.check>
                        @endforeach
                    </ul>
                </div>

                <div class="flex flex-col gap-4 w-[30rem]">
                    @if (! empty($class_gear_options))
                        <div class="bg-white rounded-lg p-4 border border-gray-300 w-full">
                            <h1 class="text-gray-400 text-sm mb-1">CLASS STARTER GEAR</h1>
                            <ul class="flex flex-col gap-2">
                                @foreach ($class_gear_options as $gear)
                                    <x-option.radio :option_name="$gear" list_name="gear" :enabled="true">
                                        <x-slot:title>{{ implode(', ', explode(', ', $gear)) }}</x-slot:title>
                                    </x-option.radio>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (! empty($background_gear))
                        <div class="bg-white rounded-lg p-4 border border-gray-300 w-full">
                            <h1 class="text-gray-400 text-sm mb-1">BACKGROUND STARTER GEAR</h1>
                            <p class="font-semibold">{{ implode(', ', $background_gear) }}</p>
                        </div>
                    @endif

                    <x-form.submit-button>Finish</x-form.submit-button>
                </div>
            </form>
        @endsubpage
    </main>
</x-layout>