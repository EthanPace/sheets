@runner
    <form class="p-4 bg-white border border-2 border-gray-300 rounded-xl w-full flex flex-col gap-4" method="POST" action="/initiative">
        @csrf
        <div class="flex w-full justify-between">
            <div class="w-[46%]">
                <x-form.input field="name" title="name" padding_y="4" bdr="border-2" bdr_color="gray-500"></x-form.input>
            </div>
            <div class="w-[25%]">
                <x-form.input field="turn_order" title="roll" padding_y="4" bdr="border-2" bdr_color="gray-500"></x-form.input>
            </div>
            <div class="w-[25%]">
                <x-form.input field="current_hit_points" title="hp" padding_y="4" bdr="border-2" bdr_color="gray-500"></x-form.input>
            </div>
        </div>
        <x-post-button :form_included="false">ADD</x-get-button>
    </form>
@endrunner