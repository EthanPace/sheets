<section class="flex flex-col gap-4 sm:w-[60%]">
    @selective
        <div class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex flex-wrap sm:justify-between gap-8 items-center">
            <div class="flex flex-wrap justify-between w-full sm:w-fit gap-4">
                <a  class="text-2xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg w-full sm:w-fit" 
                    href="/characters/{{ $user->character->id }}" 
                    draggable=false
                >{{ $user->character->name }}</a>
            </div>
            <div class="flex flex-col sm:flex-row justify-between w-full sm:w-fit gap-4">
                <form class="flex justify-between sm:justify-left sm:gap-4" method="POST" action="/initiative/set">
                    @csrf
                    <x-form.input field="num" title="num" padding_y="2" bdr="border-2" bdr_color="gray-500" width="[7rem]"></x-form.input>
                    <x-post-button :form_included="false">SET</x-get-button>
                </form>
                <x-post-button action="/initiative/roll">ROLL</x-post-button>
                <x-post-button action="/initiative/kill/{{ $user->character->id }}">KILL</x-post-button>
            </div>
        </div>
    @endselective
        <x-combat.tracker :round="$round"/>
        <x-combat.add/>
</section>

<section class="flex flex-col gap-4 sm:w-[38%]">
    @runner
        <div class="flex flex-col gap-4">
            @foreach ($round as $turn)
                @if (class_basename($turn) == "Initiative")
                    <div class="p-4 bg-white border border-2 border-gray-300 rounded-xl flex flex-col gap-4">
                        <form class="flex gap-4" method="POST" action="/initiative/health/{{ $turn->id }}">
                            @csrf
                            <h1 class="sm:text-xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-2 py-2 rounded-lg w-full sm:w-[16rem] items-center text-center mb-4 sm:mb-0">{{ strlen($turn->name) <= 15 ? $turn->name : substr($turn->name,0,14) ."-" }}</h1>
                            <x-form.input field="current_hit_points" title="health" padding_y="2" bdr="border-2" bdr_color="gray-500"></x-form.input>
                            <x-post-button :form_included="false" theme="red">SET</x-get-button>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
    @endrunner

    <x-combat.stats :round="$round" :character="$user->character"/>
</section>
