<x-jet-form-section submit="save">
    <x-slot name="title">
        {{ __('Introductory Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your introductory information and banner photos.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Banner Photos -->
        <div x-data="{photoName: null, photo1Preview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo1"
                       x-ref="photo1"
                       x-on:change="
                                    photoName = $refs.photo1.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photo1Preview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo1.files[0]);
                            " />

                <x-jet-label for="photo1" value="{{ __('Banner Photo 1') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photo1Preview">
                    <img src="{{ asset('storage/' . $phot1) }}" alt="Banner photo 1" class="rounded h-50 w-50 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photo1Preview">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photo1Preview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo1.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($phot1)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto(1)">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif
                <x-jet-input-error for="photo1" class="mt-2" />
            </div>
        <div x-data="{photoName: null, photo2Preview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo2"
                       x-ref="photo2"
                       x-on:change="
                                    photoName = $refs.photo2.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photo2Preview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo2.files[0]);
                            " />

                <x-jet-label for="photo2" value="{{ __('Banner Photo 2') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photo2Preview">
                    <img src="{{ asset('storage/' . $phot2) }}" alt="Banner photo 2" class="rounded h-50 w-50 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photo2Preview">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photo2Preview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo2.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($phot2)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto(2)">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif
                <x-jet-input-error for="photo2" class="mt-2" />
            </div>
        <div x-data="{photoName: null, photo3Preview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo3"
                       x-ref="photo3"
                       x-on:change="
                                    photoName = $refs.photo3.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photo3Preview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo3.files[0]);
                            " />

                <x-jet-label for="photo3" value="{{ __('Banner Photo 3') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photo3Preview">
                    <img src="{{ asset('storage/' . $phot3) }}" alt="Banner photo 3" class="rounded h-50 w-50 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photo3Preview">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photo3Preview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo3.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($phot3)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto(3)">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif
                <x-jet-input-error for="photo3" class="mt-2" />
            </div>

    <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

    <!-- Short Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Short Name') }}" />
            <x-jet-input id="short_name" type="text" class="mt-1 block w-full" wire:model.defer="short_name" autocomplete="short_name" />
            <x-jet-input-error for="short_name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="title" value="{{ __('Title') }}" />
            <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title" />
            <x-jet-input-error for="title" class="mt-2" />
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
