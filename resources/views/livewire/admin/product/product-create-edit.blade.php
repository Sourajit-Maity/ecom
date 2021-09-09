<x-admin.form-section submit="saveOrUpdate" enctype="multipart/form-data">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Product Name" required />
                        <x-admin.input type="text" wire:model.defer="product_name" placeholder="Product Name"  class="{{ $errors->has('product_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="product_name" />
                    </x-admin.form-group>
                    @if(!$isEdit)
                    <x-admin.form-group>
                        <x-admin.lable value="Product Slug" required />
                        <x-admin.input type="text" wire:model.defer="product_slug" placeholder="Product Slug"  class="{{ $errors->has('product_slug') ? 'is-invalid' :'' }}
                        " />
                        <x-admin.input-error for="product_slug" />
                    </x-admin.form-group>
                    @endif
                    <x-admin.form-group>
                        <x-admin.lable value="Product Category" required/>
                        <x-admin.dropdown  wire:model.defer="product_category" placeHolderText="Please select one" autocomplete="off" class="{{ $errors->has('product_category') ? 'is-invalid' :'' }}">
                                @foreach ($categoryList as $category)
                                    <x-admin.dropdown-item  :value="$category['value']" :text="$category['text']"/>                          
                                @endforeach
                        </x-admin.dropdown>
                        <x-admin.input-error for="product_category" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="Product Image" required />
                        <x-admin.input type="file" wire:model.defer="product_photo_path"   class="{{ $errors->has('product_photo_path') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="product_photo_path" />
                    </x-admin.form-group>

                @if($isEdit)
                    <div class="form-group col-lg-3 d-flex justify-content-end">
                    @if($product->product_photo_path)
                        <img src="{{ Storage::url($product->product_photo_path) }}" width="200px" height="150px">
                    @else
                        <img src="" alt="No Image" width="200px" height="150px">
                    @endif
                    </div>
                @endif

                
                   
                   
                </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('product.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>

