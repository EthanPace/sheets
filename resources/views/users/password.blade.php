<x-layout>
    <x-header>
        <x-slot:heading>Password Reset</x-slot:heading>
        <x-slot:subheading>Update your password!</x-slot:subheading>
    </x-header>

    <div class="p-4 w-full h-full overflow-y-scroll flex flex-col gap-2 items-center">
        <x-form.error field="password"/>
        <form class="bg-white border-2 border-gray-300 rounded-xl px-4 py-6 mx-auto sm:w-[30rem] flex flex-col gap-4" method="POST" action="/profile/password">
            @csrf
            <x-form.input field="current_password" title="Current Password" type="password"/>
            <x-form.input field="password" title="New Password" type="password"/>
            <x-form.input field="password_confirmation" title="Confirm New Password" type="password"/>

            <x-form.submit-button padding="2"/>
        </form>
    </div>
</x-layout>