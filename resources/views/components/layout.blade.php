<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script rel="preload" src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Pluto</title>
    </head>
    <body class="bg-gray-50 text-gray-800 h-full overflow-none" id="app">
        <div class="flex h-screen">
            <aside class="bg-gray-800 text-white w-14 sm:w-64 flex-shrink-0 flex flex-col">
                <!-- App Logo -->
                <a class="p-4 py-6 flex items-center justify-center border-b border-gray-700 h-16 sm:h-20" href="/">
                        <h1 class="text-xl font-bold invisible sm:visible w-0 sm:w-fit">DUNGEON TOOLS</h1>
                        <h1 class="text-xl font-bold visible sm:invisible">&</h1>
                </a>
                @auth
                    @if (Auth::user()->role == "player")
                        <nav class="flex-1 overflow-none px-2 sm:px-4 py-4 mr-1">
                            <div class="mb-6 space-y-2">
                                <x-nav-link page="characters">
                                    <x-icon.people/>
                                    <h1 class="invisible sm:visible">Characters</h1>
                                </x-nav-link>

                                @if (Auth::user()->character != null)
                                    <div class="sm:ml-6 space-y-2">
                                        <x-nav-link page="characters/{{ Auth::user()->character->id }}">
                                            <x-icon.character/>
                                            <h1 class="invisible sm:visible">Sheet</h1>
                                        </x-nav-link>

                                        <x-nav-link page="inventory">
                                            <x-icon.shield/>
                                            <h1 class="invisible sm:visible">Inventory</h1>
                                        </x-nav-link>
                                        @if (Auth::user()->character->archetype->spellcaster != "NONE")
                                            <x-nav-link page="spellbook">
                                                <x-icon.book/>
                                                <h1 class="invisible sm:visible">Spellbook</h1>
                                            </x-nav-link>
                                        @endif
                                    </div>
                                @endif
                                
                                <x-nav-link page="notes">
                                    <x-icon.note/>
                                    <h1 class="invisible sm:visible">Notes</h1>
                                </x-nav-link>
                            </div>
                        </nav>
                    @else
                        <!-- Navigation Menu -->
                        <nav class="flex-1 overflow-none px-2 sm:px-4 py-4">
                            <div class="mb-6 space-y-2">
                                <x-nav-link page="characters">
                                    <x-icon.people/>
                                    <h1 class="invisible sm:visible">Characters</h1>
                                </x-nav-link>

                                <x-nav-link page="items">
                                    <x-icon.shield/>
                                    <h1 class="invisible sm:visible">Items</h1>
                                </x-nav-link>

                                <x-nav-link page="spells">
                                    <x-icon.zap/>
                                    <h1 class="invisible sm:visible">Spells</h1>
                                </x-nav-link>

                                <x-nav-link page="notes">
                                    <x-icon.note/>
                                    <h1 class="invisible sm:visible">Notes</h1>
                                </x-nav-link>
                            <!--
                                <x-nav-link page="quests">
                                    <x-icon.clipboard/>
                                    Quests
                                </x-nav-link>

                                <x-nav-link page="potions">
                                    <x-icon.potion/>
                                    Potions
                                </x-nav-link>

                                <x-nav-link page="almanac">
                                    <x-icon.planet/>
                                    Almanac
                                </x-nav-link>
                                <x-nav-link page="maps">
                                    <x-icon.map/>
                                    Compass
                                </x-nav-link>

                                <x-nav-link page="contacts">
                                    <x-icon.people/>
                                    Contacts
                                </x-nav-link>

                                <x-nav-link page="notes">
                                    <x-icon.book/>
                                    Markdown
                                </x-nav-link>
                            -->
                            </div>
                        </nav>
                    @endif
                @endauth
                <!-- User Profile -->
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="flex items-center justify-between w-full h-16 sm:h-20 p-4 border-t border-gray-700 hover:bg-gray-600" action="submit">
                            <div class="w-0 sm:w-fit sm:ml-4 text-start invisible sm:visible">
                                <p class="text-sm font-medium">{{ strtoupper(Auth::user()->username) }}</p>
                                <p class="text-xs text-gray-400">{{ strtoupper(Auth::user()->role) }}</p>
                            </div>

                            <x-icon.leave size="7"/>
                    </form>
                @endauth

                @guest
                    @desktop
                        <a href="/login" class="sm:p-2 sm:p-4 border-t border-gray-700 hover:bg-gray-600 items-center w-full">
                            <div class="flex items-center">
                                <div class="mt-4 sm:mt-0 sm:ml-3">
                                    <p class="text-sm font-medium invisible sm:visible w-0 h-0 sm:w-fit sm:h-fit">Log in</p>
                                    <p class="text-xs text-gray-400 invisible sm:visible">to your account</p>
                                </div>
                            </div>
                        </a>
                    @elsedesktop
                        <div class="sm:invisible sm:w-0 sm:h-0 w-full pl-2 pr-3 mt-4">
                            <x-nav-link page="login">
                                        <x-icon.character/>
                            </x-nav-link>
                        </div>
                    @enddesktop
                @endguest
            </aside>

            <main class="flex-1 overflow-none flex flex-col border-none">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>