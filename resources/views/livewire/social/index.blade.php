<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title inline">All Socials</div>
                <div class="card-options inline pull-right">
                    <button wire:click="createM()" class="btn btn-primary"><i class="fe fe-plus"></i> Create Social</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th class="wd-15p">S/N</th>
                            <th class="wd-15p">Icon</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-20p">Url</th>
                            <th class="wd-25p">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($socials as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><i class="fa fa-{{ $item->icon }}"></i></td>
                                <td>{{ Str::title($item->name) }}</td>
                                <td><b>{{ Str::lower($item->url) }}</b></td>
                                <td class="text-center align-middle">
                                    <div class="btn-group align-top">
                                        <button wire:click="editM({{ $item->id }})" class="btn btn-sm btn-outline-warning badge" type="button">Edit</button>
                                        <button wire:click="deleteM({{ $item->id }})" class="btn btn-sm btn-outline-danger badge" type="button"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="font-bold text-xl text-center" colspan="5">
                                    No Socials entered!
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-wrapper -->
        </div>
        <!-- section-wrapper -->

    </div>
    <x-jet-dialog-modal wire:model="createE">
        <x-slot name="title">
            {{ __('Create Social') }}
        </x-slot>
        <x-slot name="content">
            <div class="row">
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" wire:model="name" placeholder="Name">
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Url</label>
                    <input type="text" class="form-control" wire:model="url" placeholder="Url">
                    <x-jet-input-error for="url" class="mt-2" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Icon</label>
                    <input type="text" class="form-control" wire:model="icon" placeholder="Icon">
                    <x-jet-input-error for="icon" class="mt-2" />
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Order</label>
                    <input type="number" class="form-control" wire:model="order" placeholder="Order">
                    <x-jet-input-error for="order" class="mt-2" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('createE')" wire:loading.class="btn-loading">
                {{ __('NeverMind') }}
            </x-jet-secondary-button>

            <x-jet-button wire:click="save" wire:loading.class="btn-loading">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="editE">
        <x-slot name="title">
            {{ __('Edit Social') }}
        </x-slot>
        <x-slot name="content">
            <div class="row">
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" wire:model="name" placeholder="Name">
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Url</label>
                    <input type="text" class="form-control" wire:model="url" placeholder="Url">
                    <x-jet-input-error for="url" class="mt-2" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Icon</label>
                    <input type="text" class="form-control" wire:model="icon" placeholder="Icon">
                    <x-jet-input-error for="icon" class="mt-2" />
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <label class="form-label">Order</label>
                    <input type="number" class="form-control" wire:model="order" placeholder="Order">
                    <x-jet-input-error for="order" class="mt-2" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('editE')" wire:loading.class="btn-loading">
                {{ __('NeverMind') }}
            </x-jet-secondary-button>

            <x-jet-button wire:click="edit" wire:loading.class="btn-loading">
                {{ __('Update') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="deleteE">
        <x-slot name="title">
            {{ __('Delete Social') }}
        </x-slot>
        <x-slot name="content">
            <div class="mt-4">
                Are you sure you want to delete this social entry?
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('deleteE')" wire:loading.class="btn-loading">
                {{ __('NeverMind') }}
            </x-jet-secondary-button>

            <x-jet-button wire:click="delete()" wire:loading.class="btn-loading">
                {{ __('Yes') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>

