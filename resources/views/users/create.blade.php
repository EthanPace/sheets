<x-layout>
    <x-header>
        <x-slot:heading>Create User</x-slot:heading>
        <x-slot:subheading>A new hand touches the beacon!</x-slot:subheading>
    </x-header>

    <div class="p-4 w-full h-full overflow-y-scroll flex flex-col gap-2 items-center">
        <x-form.error field="username"/>
        <x-form>
            <x-form.input name="username" label="Username"/>
            <x-form.input name="role" label="Role"/>
            <x-form.submit-button title="Create"/>
        </x-form>
        <x-form.success title="User created successfully!"/>
    </div>
</x-layout>