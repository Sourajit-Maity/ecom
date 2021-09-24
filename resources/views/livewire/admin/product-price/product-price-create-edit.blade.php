<x-admin.form-section submit="saveOrUpdate" enctype="multipart/form-data">
    <x-slot name="form">
                   
                  
                     <x-admin.form-group>
                        <x-admin.lable value="Name" required />
                        <x-admin.input type="text" wire:model.defer="name" placeholder="name"  class="{{ $errors->has('name') ? 'is-invalid' :'' }}" />
                        <x-admin.input type="hidden" wire:model.defer="slug" placeholder="Product Type Slug"  class="{{ $errors->has('slug') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="name" />
                    </x-admin.form-group>
                   

                    <x-admin.form-group>
                        <x-admin.lable value="1-5" required />
                        <x-admin.input type="text" wire:model.defer="1-5" placeholder="1-5"  class="{{ $errors->has('1-5') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="1-5" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="6-15" required />
                        <x-admin.input type="text" wire:model.defer="6-15" placeholder="6-15"  class="{{ $errors->has('6-15') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="6-15" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="16-25" required />
                        <x-admin.input type="text" wire:model.defer="16-25" placeholder="16-25"  class="{{ $errors->has('16-25') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="16-25" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="26-50" required />
                        <x-admin.input type="text" wire:model.defer="26-50" placeholder="26-50"  class="{{ $errors->has('26-50') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="26-50" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="51-100" required />
                        <x-admin.input type="text" wire:model.defer="51-100" placeholder="51-100"  class="{{ $errors->has('51-100') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="51-100" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="101-199" required />
                        <x-admin.input type="text" wire:model.defer="101-199" placeholder="101-199"  class="{{ $errors->has('101-199') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="101-199" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="200-499" required />
                        <x-admin.input type="text" wire:model.defer="200-499" placeholder="200-499"  class="{{ $errors->has('200-499') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="200-499" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="500+" required />
                        <x-admin.input type="text" wire:model.defer="500+" placeholder="500+"  class="{{ $errors->has('500+') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="500+" />
                    </x-admin.form-group>



                    <x-admin.form-group>
                        <x-admin.lable value="magnet" required />
                        <x-admin.input type="text" wire:model.defer="magnet" placeholder="magnet"  class="{{ $errors->has('magnet') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="magnet" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="pin" required />
                        <x-admin.input type="text" wire:model.defer="pin" placeholder="pin"  class="{{ $errors->has('pin') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="pin" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="swivel_clip" required />
                        <x-admin.input type="text" wire:model.defer="swivel_clip" placeholder="swivel_clip"  class="{{ $errors->has('swivel_clip') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="swivel_clip" />
                    </x-admin.form-group>
                      
                </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('price.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>

