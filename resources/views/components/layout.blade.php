<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script rel="preload" src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Sheets</title>
    </head>
    <body class="bg-gray-50 text-gray-800 h-full overflow-hidden" id="app">
        <div class="flex h-screen">
            <aside class="bg-gray-800 text-white w-14 sm:w-64 flex-shrink-0 flex flex-col">
                <!-- App Logo -->
                <a class="p-4 py-6 flex items-center justify-center border-b border-gray-700 h-16 sm:h-20" href="/">
                        <h1 class="text-xl font-bold invisible sm:visible w-0 sm:w-fit">DUNGEON TOOLS</h1>
                        <h1 class="text-xl font-bold visible sm:invisible">&</h1>
                </a>
                @auth
                    @player
                        <x-nav.section.player/>
                    @endish
                    @runner
                        <x-nav.section.runner/>
                    @endish
                    @admin
                        <x-nav.section.admin/>
                    @endish
                @endauth
                <!-- User Profile -->
                @auth
                    @desktop
                        <div class="w-full px-3 mb-4 flex">
                            <x-nav.link page="profile">
                                <x-slot:icon><x-icon.gear/></x-slot:icon>
                                <div class="flex justify-between items-center w-full">
                                    <h1 class="font-medium">{{ strtoupper(Auth::user()->username) }}</h1>
                                    <p class="text-gray-300 text-lg">=</p>
                                    <h3 class="text-gray-400 mr-2">{{ strtoupper(Auth::user()->role) }}</h3>
                                </div>
                            </x-nav.link>
                        </div>
                    @enddesktop

                    @mobile
                        <div class="sm:invisible sm:w-0 sm:h-0 w-full pl-2 pr-2 mb-4">
                            <x-nav.link page="profile">
                                <x-slot:icon><x-icon.gear size="6"/></x-slot:icon>
                            </x-nav.link>
                        </div>
                    @endmobile
                @endauth

                @guest
                    <div class="flex flex-col justify-end w-full h-full mb-4">
                        @desktop
                            <div class="w-full px-3">
                                <x-nav.link page="login">
                                    <x-slot:icon><x-icon.character/></x-slot:icon>
                                    LOG IN
                                </x-nav.link>
                            </div>
                        @enddesktop

                        @mobile
                            <div class="sm:invisible sm:w-0 sm:h-0 w-full pl-2 pr-3 mt-4">
                                <x-nav.link page="login">
                                    <x-slot:icon><x-icon.character/></x-slot:icon>
                                </x-nav.link>
                            </div>
                        @endmobile
                    </div>
                @endguest
            </aside>

            <main class="flex-1 overflow-hidden flex flex-col border-none">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
