<x-layout>
    <x-header>
        <x-slot:heading>Export!</x-slot:heading>
        <x-slot:subheading></x-slot:subheading>
    </x-header>

    <main class="p-4 flex flex-col gap-4 overflow-y-scroll">
        @foreach ($notes as $note)
<p class="text-wrap whitespace-pre-wrap bg-black text-white p-6 rounded-3xl"
>$user = User::where('username', "{{ $note->user->username }}")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "{{ $note->theme }}",
    'title' => "{{ $note->title }}",
    'text' => "{{ $note->text }}",
]);</p>
        @endforeach
    </main>
</x-layout>