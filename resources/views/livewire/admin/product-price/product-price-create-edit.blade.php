<x-admin.form-section submit="saveOrUpdate" enctype="multipart/form-data">
    <x-slot name="form">
                   
                  
                     <x-admin.form-group>
                        <x-admin.lable value="Name" required />
                        <x-admin.input type="text" wire:model.defer="name" placeholder="name"  class="{{ $errors->has('name') ? 'is-invalid' :'' }}" />
                        <x-admin.input type="hidden" wire:model.defer="slug" placeholder="Product Type Slug"  class="{{ $errors->has('slug') ? 'is-invalid' :'' }}" />
                        <x-admin.input type="hidden" wire:model.defer="price_id" placeholder="price_id"  class="{{ $errors->has('price_id') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="name" />
                    </x-admin.form-group>
                   

                    <x-admin.form-group>
                        <x-admin.lable value="1-5" required />
                        <x-admin.input type="text" wire:model.defer="one_to_five" placeholder="1-5"  class="{{ $errors->has('one_to_five') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="one_to_five" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="6-15" required />
                        <x-admin.input type="text" wire:model.defer="six_to_fifteen" placeholder="6-15"  class="{{ $errors->has('six_to_fifteen') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="six_to_fifteen" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="16-25" required />
                        <x-admin.input type="text" wire:model.defer="sixteen_to_twentyfive" placeholder="sixteen_to_twentyfive"  class="{{ $errors->has('sixteen_to_twentyfive') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="sixteen_to_twentyfive" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="26-50" required />
                        <x-admin.input type="text" wire:model.defer="twentysix_to_fifty" placeholder="26-50"  class="{{ $errors->has('twentysix_to_fifty') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="twentysix_to_fifty" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="51-100" required />
                        <x-admin.input type="text" wire:model.defer="fiftyone_to_hundred" placeholder="51-100"  class="{{ $errors->has('fiftyone_to_hundred') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="fiftyone_to_hundred" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="101-199" required />
                        <x-admin.input type="text" wire:model.defer="hundredone_to_oneninetynine" placeholder="101-199"  class="{{ $errors->has('hundredone_to_oneninetynine') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="hundredone_to_oneninetynine" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="200-499" required />
                        <x-admin.input type="text" wire:model.defer="twohundred_to_fournintynine" placeholder="200-499"  class="{{ $errors->has('twohundred_to_fournintynine') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="twohundred_to_fournintynine" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="500+" required />
                        <x-admin.input type="text" wire:model.defer="fivehundredplus" placeholder="500+"  class="{{ $errors->has('fivehundredplus') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="fivehundredplus" />
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

