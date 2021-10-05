<x-admin.form-section submit="saveOrUpdate" enctype="multipart/form-data">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Production Time Name" required />
                        <x-admin.input type="text" wire:model.defer="production_time_name" placeholder="Production Time Name"  class="{{ $errors->has('production_time_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="production_time_name" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Price" required />
                        <x-admin.input type="text" wire:model.defer="price" placeholder="price"  class="{{ $errors->has('price') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="price" />
                    </x-admin.form-group>
               </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('timeproduction.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>

