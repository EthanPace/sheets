<x-layout>
    <x-header>
        <x-slot:heading>Combat</x-slot:heading>
        <x-slot:subheading>Hit your friends!</x-slot:subheading>
    </x-header>
    <main class="p-4 overflow-y-scroll w-full flex flex-wrap gap-4 justify-between">
        <section class="flex flex-col gap-4 sm:w-[60%]">
            @selective
                <div class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex flex-wrap sm:justify-between gap-8 items-center">
                    <div class="flex flex-wrap justify-between w-full sm:w-fit gap-4">
                        <a  class="text-2xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg" 
                            href="/characters/{{ $user->character->id }}" 
                            draggable=false
                        >{{ $user->character->name }}</a>
                        @mobile
                            <x-post-button action="/initiative/kill/{{ $user->character->id }}">-</x-post-button>
                        @endmobile
                    </div>
                    <div class="flex justify-between w-full sm:w-fit sm:gap-8">
                        <form class="flex gap-8" method="POST" action="/initiative/set">
                            @csrf
                            <x-form.input field="num" title="num" padding_y="2" bdr="border-2" bdr_color="gray-500" width="[7rem]"></x-form.input>
                            @desktop
                                <x-post-button :form_included="false">SET</x-get-button>
                            @elsedesktop
                                <x-post-button :form_included="false">=</x-get-button>
                            @enddesktop
                        </form>
                        @desktop
                            <x-post-button action="/initiative/roll">ROLL</x-post-button>
                            <x-post-button action="/initiative/kill/{{ $user->character->id }}">KILL</x-post-button>
                        @elsedesktop
                            <x-post-button action="/initiative/roll">⚄</x-post-button>
                        @enddesktop
                    </div>
                </div>
            @endselective
            
            @if ($round->isNotEmpty())
                <div class="p-4 bg-white border border-2 border-gray-300 rounded-xl flex flex-col gap-y-8">
                    @foreach ($round as $turn)
                        <div class="flex justify-between w-full items-center">
                            <h1 class="sm:text-2xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg w-3/4 sm:w-[16rem]">{{ $turn->name }}</h1>
                            <h1 class="sm:text-2xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg text-center sm:w-[8rem]">{{ $turn->turn_order }}</h1>
                            @runner
                            @desktop
                                @if (class_basename($turn) == "Character")
                                    <x-post-button action="/initiative/kill/{{ $turn->id }}">KILL</x-post-button>    
                                @else
                                    <x-post-button action="/initiative/{{ $turn->id }}" :delete="true">KILL</x-post-button>    
                                @endif
                            @enddesktop
                            @endrunner
                        </div>
                    @endforeach
                </div>
            @endif

            @runner
                <form class="p-4 bg-white border border-2 border-gray-300 rounded-xl w-full flex flex-col gap-4" method="POST" action="/initiative">
                    @csrf
                    <div class="flex w-full justify-between">
                        <div class="w-[73%]">
                            <x-form.input field="name" title="name" padding_y="4" bdr="border-2" bdr_color="gray-500"></x-form.input>
                        </div>
                        <div class="w-[23%]">
                            <x-form.input field="turn_order" title="roll" padding_y="4" bdr="border-2" bdr_color="gray-500"></x-form.input>
                        </div>
                    </div>
                    <x-post-button :form_included="false">ADD</x-get-button>
                </form>
            @endrunner
        </section>

        <section class="flex flex-col gap-4 sm:w-[38%]">
            @selective
                <a class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex justify-between" href="/characters/{{ $user->character->id }}" draggable=false>
                    <x-stat height="short">
                        AC
                        <x-slot:mod>{{ $user->character->armor_class }}</x-slot:mod>
                    </x-stat>
                    <x-stat height="short">
                        INI
                        <x-slot:mod>{{ $user->character->initiative }}</x-slot:mod>
                    </x-stat>
                    <x-stat height="short">
                        SPD
                        <x-slot:mod>{{ $user->character->species->speed }}</x-slot:mod>
                    </x-stat>
                </a>

                <div class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <x-button.simple-form theme="red" action="/combat/damage/{{ $user->character->id }}" field="damage" value="1">-</x-button.simple-form>
                            <div class="flex items-center justify-center w-full">
                                <h1 class="text-2xl font-bold mr-2 text-red-700">{{ $user->character->current_hit_points }}</h1>
                                <h1 class="text-2xl font-bold text-gray-500"> / {{ $user->character->max_hit_points }} HP</h1>
                            </div>
                        <x-button.simple-form theme="red" action="/combat/heal/{{ $user->character->id }}" field="health" value="1">+</x-button.simple-form>
                    </div>
                </div>

                <div class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex flex-col gap-4">
                    <form class="flex items-center justify-between gap-4" method="POST" action="/combat/health/{{ $user->character->id }}">
                        @csrf
                        <div class="w-full"><x-form.input field="health" title="health" bdr="border-2" bdr_color="gray-500"/></div>
                        <x-post-button :form_included="false" theme="red">SET</x-get-button>
                    </form>
                </div>

                @if ($user->character->actions->isNotEmpty())
                    <a class="px-4 pt-4 pb-2 bg-white rounded-xl border border-2 border-gray-300" href="/inventory">
                        @foreach ($user->character->actions as $action)
                            <div class="py-1 grid grid-cols-4 border-b last:border-none mb-1 text-center text-lg">
                                <h1>{{ $action->name }}</h1>
                                <h1>{{ $user->character->statistics->where('ability',$action->ability)->first()->modify($user->character->proficiency_bonus) }}</h1>
                                <h1>{{ $action->damage }} {{ $user->character->statistics->where('ability', $action->ability)->first()->mod() }}</h1>
                                <h1>{{ $action->type }}</h1>
                            </div>
                        @endforeach
                        </a>
                @endif

                @if ($user->character->archetype->spellslots)
                    <a class="grid grid-cols-1 p-4 bg-white rounded-xl border border-2 border-gray-300" href="/spellbook">
                        <div class="grid grid-cols-{{ count($user->character->archetype->spellslots->levels()) }} justify-between text-center">
                            @php
                                $index = 0;
                                $slots = $user->character->archetype->spellslots->slots_at_level($user->character->level);
                            @endphp
                            @foreach ($user->character->archetype->spellslots->levels() as $level)
                                <div class="w-[60px] m-auto">
                                    <h1 class="text-sm text-gray-400 border-b border-gray-300">{{ $level }}</h1>
                                    <h1 class="text-lg mt-1">{{ $slots[$index] }}</h1>
                                </div>

                                @php
                                    $index++;
                                @endphp
                            @endforeach
                        </div>
                    </a>
                @endif
            @endselective
        </section>
    </main>
</x-layout>