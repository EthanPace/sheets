<x-layout>
    <x-header>
        <x-slot:heading>Password Reset</x-slot:heading>
        <x-slot:subheading>Update your password!</x-slot:subheading>
    </x-header>

    <div class="p-4 w-full h-full overflow-y-scroll flex flex-col gap-2 items-center">
        <x-form.error field="password"/>
        <x-form action="/profile/password" method="POST">
            @csrf
            <x-form.input field="current_password" title="Current Password" type="password"/>
            <x-form.input field="password" title="New Password" type="password"/>
            <x-form.input field="password_confirmation" title="Confirm New Password" type="password"/>

            <x-form.submit-button padding="2"/>
            <x-form.success scope="reset"/>
        </x-form>
    </div>
</x-layout>