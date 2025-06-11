@props(['user','round'])
@selective
    <div class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex flex-wrap sm:justify-between gap-8 items-center">
        <div class="flex flex-wrap justify-between w-full sm:w-fit gap-4">
            <a  class="text-2xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg w-full sm:w-fit" 
                href="/characters/{{ $user->character->id }}" 
                draggable=false
            >{{ $user->character->name }}</a>
        </div>
        <div class="flex w-full gap-2 sm:w-fit">
            <form class="flex w-full justify-between gap-2" method="POST" action="/initiative/set">
                @csrf
                <x-form.input field="num" title="num" padding_y="2" bdr="border-2" bdr_color="gray-500" width="[8rem]"></x-form.input>
                <x-post-button :form_included="false" padding="4">=</x-get-button>
            </form>
            <x-post-button action="/initiative/roll" padding="4">⚄</x-post-button>
            <x-post-button action="/initiative/kill/{{ $user->character->id }}" padding="4">-</x-post-button>
        </div>
    </div>
@endselective

<div class="p-4 bg-white w-full rounded-xl border border-2 border-indigo-400 flex justify-between">
    <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=order">ORDER</a>

    @selective
        @player
            <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=actions">ACTIONS</a>
        @endplayer
        <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=health">HEALTH</a>
    @endselective

    @runner
        <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=enemies">ENEMIES</a>
    @endrunner
</div>

@subpageorbase("order")
    <x-combat.tracker :round="$round"/>
    <x-combat.add/>
@endsubpage

@selective
    @subpage("actions")
        <x-combat.stats :character="$user->character"/>
    @endsubpage

    @subpage("health")
        <x-combat.health :character="$user->character"/>
    @endsubpage
@endselective

@subpage("enemies")
    @runner
        <div class="flex flex-col gap-4">
            @foreach ($round as $turn)
                @if (class_basename($turn) == "Initiative")

                        <div class="p-4 bg-white border border-2 border-gray-300 rounded-xl flex flex-col gap-4">
                            <div class="flex gap-4">
                                <h1 class="sm:text-xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-2 py-2 rounded-lg w-full sm:w-[16rem] items-center text-center">{{ strlen($turn->name) <= 15 ? $turn->name : substr($turn->name,0,14) ."-" }}</h1>
                                <h1 class="sm:text-2xl font-bold text-red-600 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg text-center sm:w-[8rem]">{{ $turn->current_hit_points }}</h1>
                            </div>
                            <div class="flex gap-4">
                                <form class="flex gap-4" method="POST" action="/initiative/health/{{ $turn->id }}">
                                    @csrf
                                    <x-form.input field="current_hit_points" title="health" padding_y="2" bdr="border-2" bdr_color="gray-500"></x-form.input>
                                    <x-post-button :form_included="false" theme="red" padding="4">SET</x-get-button>
                                </form>
                                <x-post-button action="/initiative/{{ $turn->id }}" :delete="true" padding="4">KILL</x-post-button>
                            </div>
                        </div>
                @endif
            @endforeach
        </div>
        <x-combat.add/>
    @endrunner
@endsubpage