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
                            <x-nav.link page="login">
                                        <x-icon.character/>
                            </x-nav.link>
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