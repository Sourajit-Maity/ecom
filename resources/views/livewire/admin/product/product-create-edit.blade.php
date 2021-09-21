<x-admin.form-section submit="saveOrUpdate" enctype="multipart/form-data">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Product Name" required />
                        <x-admin.input type="text" wire:model.defer="product_name" placeholder="Product Name"  class="{{ $errors->has('product_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="product_name" />
                    </x-admin.form-group>
                  
                    <x-admin.form-group class="col-lg-12">
                        <x-admin.lable value="Product Description" required />
                        <x-admin.textarea type="text" wire:model.defer="product_description" placeholder="product description..."  class="{{ $errors->has('product_description') ? 'is-invalid' :'' }}" rows='8' />
                        <x-admin.input-error for="product_description" />
                    </x-admin.form-group>
                <x-admin.form-group>
                        <x-admin.lable value="Product Image" required />
                        <x-admin.input type="file" wire:model.defer="product_photo_path"   class="{{ $errors->has('product_photo_path') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="product_photo_path" />
                </x-admin.form-group>

                <div class="form-group col-lg-3 d-flex justify-content-end">
                    <img src="{{Storage::disk('public')->exists($product->product_photo_path) ? Storage::url($product->product_photo_path) : asset($product->product_photo_path)}}" width="200px" height="150px">
                </div>

                
                   
                   
                </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('product.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>

