<x-layout>
    <x-header>
        <x-slot:heading>Login</x-slot:heading>
        <x-slot:subheading>Log In to edit your characters!</x-slot:subheading>
    </x-header>
    <main class="mx-auto px-4 py-16 w-full h-full">
        <form class="bg-white border-2 border-gray-300 rounded-xl px-4 py-6 mx-auto w-[30rem]" action="/login" method="POST">
            @csrf
            <div class="grid grid-cols-1 text-2xl">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input 
                        class="w-full bg-gray-100 border-2 border-gray-300 rounded-xl px-3 py-2" 
                        id="username" 
                        name="username" 
                        placeholder="USERNAME" 
                        value="{{ old('username') }}"
                    >
                    @error('username')
                        <p class="text-xs text-red-500 font-semibold m-2">{{ strtoupper($message) }}</p>
                    @else
                        <p class="text-xs mt-8"></p>
                    @enderror
                </div>
                
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input 
                        class="w-full bg-gray-100 border-2 border-gray-300 rounded-xl px-3 py-2" 
                        id="password" 
                        name="password" 
                        type="password" 
                        placeholder="PASSWORD"
                    >
                    @error('password')
                        <p class="text-xs text-red-500 font-semibold m-2">{{ strtoupper($message) }}</p>
                    @else
                        <p class="text-xs mt-8"></p>
                    @enderror
                </div>
    
                <button class="w-full bg-gray-100 border-2 border-gray-300 px-3 py-2 rounded-2xl hover:bg-white transition duration-300 mt-4 text-gray-400" type="submit">
                    LOGIN
                </button>
            </div>
        </form>
    </main>
</x-layout>