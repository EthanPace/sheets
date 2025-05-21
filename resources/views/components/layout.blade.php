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
            <aside class="bg-gray-800 text-white w-64 flex-shrink-0 flex flex-col">
                <!-- App Logo -->
                <a class="p-4 py-6 flex items-center justify-center border-b border-gray-700 h-20" href="/">
                    <h1 class="text-xl font-bold">DUNGEON TOOLS</h1>
                </a>

                @auth
                    @if (Auth::user()->role == "player")
                        <nav class="flex-1 overflow-y-auto custom-scrollbar p-4">
                            <div class="mb-6 space-y-2">
                                <x-nav-link page="characters">
                                    <x-icon.people/>
                                    Characters
                                </x-nav-link>

                                @if (Auth::user()->character != null)
                                    <x-nav-link page="characters/{{ Auth::user()->character->id }}">
                                        <x-icon.character/>
                                        Character Sheet
                                    </x-nav-link>

                                    <x-nav-link page="items">
                                        <x-icon.shield/>
                                        Inventory
                                    </x-nav-link>

                                    <x-nav-link page="spells">
                                        <x-icon.zap/>
                                        Spells
                                    </x-nav-link>
                                @endif
                                
                                <x-nav-link page="notes">
                                    <x-icon.note/>
                                    Notes
                                </x-nav-link>
                            </div>
                        </nav>
                    @else
                        <!-- Navigation Menu -->
                        <nav class="flex-1 overflow-y-auto custom-scrollbar p-4">
                            <div class="mb-6 space-y-2">
                                <x-nav-link page="characters">
                                    <x-icon.people/>
                                    Characters
                                </x-nav-link>

                                <x-nav-link page="items">
                                    <x-icon.shield/>
                                    Items
                                </x-nav-link>

                                <x-nav-link page="spells">
                                    <x-icon.zap/>
                                    Spells
                                </x-nav-link>

                                <x-nav-link page="notes">
                                    <x-icon.note/>
                                    Notes
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
                        <button class="flex items-center justify-between w-full h-full p-4 border-t border-gray-700 hover:bg-gray-600" action="submit">
                            <div class="ml-4 text-start">
                                <p class="text-sm font-medium">{{ strtoupper(Auth::user()->username) }}</p>
                                <p class="text-xs text-gray-400">{{ strtoupper(Auth::user()->role) }}</p>
                            </div>

                            @if (Auth::user()->role == "admin")
                                <x-icon.leave size="7"/>
                            @elseif (Auth::user()->role == "runner")
                                <x-icon.leave size="7"/>
                            @else
                                <x-icon.leave size="7"/>
                            @endif
                    </form>
                @endauth

                @guest
                    <a href="/login" class="p-4 border-t border-gray-700 hover:bg-gray-600">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-sm font-medium">Log in</p>
                                <p class="text-xs text-gray-400">to your account</p>
                            </div>
                        </div>
                    </a>
                @endguest
            </aside>

            <main class="flex-1 overflow-none flex flex-col border-none">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>