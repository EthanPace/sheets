<x-layout>
    <x-header>
        <x-slot:heading>Login</x-slot:heading>
        <x-slot:subheading>Log In to edit your characters!</x-slot:subheading>
    </x-header>
    <main class="mx-auto px-4 py-4 flex flex-col gap-4 w-fit h-full">
        <x-form.error fields="username,password"/>
        <x-form action="/login" method="POST">
            <x-form.input field="username" title="USERNAME"/>
            <x-form.input field="password" title="PASSWORD" type="password"/>
            <x-form.submit-button title="LOGIN"/>
        </x-form>
    </main>
</x-layout>