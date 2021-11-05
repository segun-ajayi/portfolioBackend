<x-jet-form-section submit="save">
    <x-slot name="title">
        {{ __('About Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your information on the about page.') }}
    </x-slot>

    <x-slot name="form">

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="email" autocomplete="email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
            <x-jet-input id="phone_number" type="text" class="mt-1 block w-full" wire:model.defer="phone_number" autocomplete="phone_number" />
            <x-jet-input-error for="phone_number" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="address" />
            <x-jet-input-error for="address" class="mt-2" />
        </div>

        <!-- Nationality -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="nationality" value="{{ __('Nationality') }}" />
            <x-jet-input id="nationality" type="text" class="mt-1 block w-full" wire:model.defer="nationality" />
            <x-jet-input-error for="nationality" class="mt-2" />
        </div>

        <!-- Profile -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="profile" value="{{ __('Profile') }}" />
            <textarea id="profile" class="mt-1 block w-full form-control" wire:model.defer="profile">

            </textarea>
            <x-jet-input-error for="profile" class="mt-2" />
        </div>

        <!-- Resume -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="resume" value="{{ __('Resume') }}" />
            <x-jet-input id="resume" type="file" class="mt-1 block w-full" wire:model.defer="resume" />
            <x-jet-input-error for="resume" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
