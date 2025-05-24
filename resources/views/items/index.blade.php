<x-layout>
    <x-header>
        <x-slot:heading>Items</x-slot:heading>
        <x-slot:subheading>Shop! or don't!</x-slot:subheading>
    </x-header>
    <main class="p-4 overflow-scroll content-center">
        <!-- Weapons -->
        <div class="w-[95rem] bg-white rounded-3xl border border-2 border-gray-500 mb-20 mt-12 mx-auto">
            <table class="w-full text-left mb-6">
                <thead>
                    <tr class="text-left text-lg">
                        <th scope="col" class="p-4 pl-8">Weapon</th>
                        <th scope="col" class="p-4">Damage</th>
                        <th scope="col" class="p-4">Properties</th>
                        <th scope="col" class="p-4 text-right">Mastery</th>
                        <th scope="col" class="p-4 text-right">Weight</th>
                        <th scope="col" class="p-4 text-right pr-8">Cost</th>
                    </tr>
                </thead>
                <tbody class="rounded-b-xl">
                    @foreach ($weapons as $weapon)
                        <tr class="odd:bg-gray-100 pl-4">
                            <th scope="row" class="py-2 px-4 text-left font-normal text-lg pl-8">{{ $weapon->name }}</td>
                            <td class="py-2 px-4">{{ $weapon->damage_die_number }}d{{ $weapon->damage_die }} {{ $weapon->damage_type }}</td>
                            <td class="py-2 px-4">{{ $weapon->properties ?: '—' }}</td>
                            <td class="py-2 px-4 text-right">{{ $weapon->mastery }}</td>
                            <td class="py-2 px-4 text-right">{{ $weapon->weight }} lbs.</td>
                            <td class="py-2 px-4 text-right pr-8">{{ $weapon->price() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Armor -->
        <div class="w-[95rem] bg-white rounded-3xl border border-2 border-lime-500 mb-20 mx-auto">
            <table class="w-full text-left mb-6">
                <thead>
                    <tr class="text-left text-lg">
                        <th scope="col" class="p-4 pl-8">Armor</th>
                        <th scope="col" class="p-4">Armor Class (AC)</th>
                        <th scope="col" class="p-4 text-center">STR</th>
                        <th scope="col" class="p-4 text-center">Stealth</th>
                        <th scope="col" class="p-4 text-right">Weight</th>
                        <th scope="col" class="p-4 text-right pr-8">Cost</th>
                    </tr>
                </thead>
                <tbody class="rounded-b-xl">
                    @foreach ($armors as $armor)
                        <tr class="odd:bg-lime-100 pl-4">
                            <th scope="row" class="py-2 px-4 text-left font-normal text-lg pl-8">{{ $armor->name }}</td>
                            <td class="py-2 px-4">{{ $armor->armor_class }}</td>
                            <td class="py-2 px-4 text-center">{{ $armor->strength_requirement ?: '—' }}</td>
                            <td class="py-2 px-4 text-center">{{ $armor->stealth_disadvantage ? 'Disadvantage' : '—' }}</td>
                            <td class="py-2 px-4 text-right">{{ $armor->weight }} lbs.</td>
                            <td class="py-2 px-4 text-right pr-8">{{ $armor->price() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex flex-wrap justify-between w-[95rem] mx-auto">
            <!-- Items -->
            <div class="w-[45rem] h-fit bg-white rounded-3xl border border-2 border-orange-500 mb-4">
                <table class="w-full text-left mb-6">
                    <thead>
                        <tr class="text-left text-lg">
                            <th scope="col" class="p-3 pl-6">Item</th>
                            <th scope="col" class="p-3 text-right">Weight</th>
                            <th scope="col" class="p-3 text-right pr-6">Cost</th>
                        </tr>
                    </thead>
                    <tbody class="rounded-b-xl">
                        @foreach ($items as $item)
                            <tr class="odd:bg-orange-100 pl-4">
                                <th scope="row" class="py-2 px-3 text-left font-normal text-lg pl-6">{{ $item->name }}</td>
                                <td class="py-2 px-3 text-right">{{ $item->weight ? $item->weight . ' lbs.' : '—' }}</td>
                                <td class="py-2 px-3 text-right pr-6">{{ $item->price() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col gap-16">
                <!-- Spellcasting Focuses -->
                <div class="w-[45rem] h-fit bg-white rounded-3xl border border-2 border-cyan-500 mb-4">
                    <table class="w-full text-left mb-6">
                        <thead>
                            <tr class="text-left text-lg">
                                <th scope="col" class="p-3 pl-6">Spellcasting Focus</th>
                                <th scope="col" class="p-3 text-right">Weight</th>
                                <th scope="col" class="p-3 text-right pr-6">Cost</th>
                            </tr>
                        </thead>
                        <tbody class="rounded-b-xl">
                            @foreach ($focuses as $focus)
                                <tr class="odd:bg-cyan-100 pl-4">
                                    <th scope="row" class="py-2 px-3 text-left font-normal text-lg pl-6">{{ $focus->name }}</td>
                                    <td class="py-2 px-3 text-right">{{ $focus->weight ? $focus->weight . ' lbs.' : '—' }}</td>
                                    <td class="py-2 px-3 text-right pr-6">{{ $focus->price() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Equipment Packs -->
                <div class="w-[45rem] h-fit bg-white rounded-3xl border border-2 border-rose-500 mb-4">
                    <table class="w-full text-left mb-6">
                        <thead>
                            <tr class="text-left text-lg">
                                <th scope="col" class="p-3 pl-6">Equipment Pack</th>
                                <th scope="col" class="p-3 text-right">Weight</th>
                                <th scope="col" class="p-3 text-right pr-6">Cost</th>
                            </tr>
                        </thead>
                        <tbody class="rounded-b-xl">
                            @foreach ($packs as $pack)
                                <tr class="odd:bg-rose-100 pl-4">
                                    <th scope="row" class="py-2 px-3 text-left font-normal text-lg pl-6">{{ $pack->name }}</td>
                                    <td class="py-2 px-3 text-right">{{ $pack->weight ? $pack->weight . ' lbs.' : '—' }}</td>
                                    <td class="py-2 px-3 text-right pr-6">{{ $pack->price() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Tools -->
                <div class="w-[45rem] h-fit bg-white rounded-3xl border border-2 border-purple-500 mb-4">
                    <table class="w-full text-left mb-6">
                        <thead>
                            <tr class="text-left text-lg">
                                <th scope="col" class="p-3 pl-6">Tool</th>
                                <th scope="col" class="p-3 text-right">Weight</th>
                                <th scope="col" class="p-3 text-right pr-6">Cost</th>
                            </tr>
                        </thead>
                        <tbody class="rounded-b-xl">
                            @foreach ($tools as $tool)
                                <tr class="odd:bg-purple-100 pl-4">
                                    <th scope="row" class="py-2 px-3 text-left font-normal text-lg pl-6">{{ $tool->name }}</td>
                                    <td class="py-2 px-3 text-right">{{ $tool->weight }} lbs.</td>
                                    <td class="py-2 px-3 text-right pr-6">{{ $tool->price() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Food & Drink -->
                <div class="w-[45rem] h-fit bg-white rounded-3xl border border-2 border-yellow-500 mb-4">
                    <table class="w-full text-left mb-6">
                        <thead>
                            <tr class="text-left text-lg">
                                <th scope="col" class="p-3 pl-6">Food & Drink</th>
                                <th scope="col" class="p-3 text-right pr-6">Cost</th>
                            </tr>
                        </thead>
                        <tbody class="rounded-b-xl">
                            @foreach ($foods as $food)
                                <tr class="odd:bg-yellow-100 pl-4">
                                    <th scope="row" class="py-2 px-3 text-left font-normal text-lg pl-6">{{ $food->name }}</td>
                                    <td class="py-2 px-3 text-right pr-6">{{ $food->price() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-layout>