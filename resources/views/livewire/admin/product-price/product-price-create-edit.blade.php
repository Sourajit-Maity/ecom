<x-admin.form-section submit="saveOrUpdate" enctype="multipart/form-data">
    <x-slot name="form">
                   
                  
                     <x-admin.form-group>
                        <x-admin.lable value="Product Type" required />
                        <x-admin.input type="text" wire:model.defer="product_type" placeholder="Product Type"  class="{{ $errors->has('product_type') ? 'is-invalid' :'' }}" />
                        <x-admin.input type="hidden" wire:model.defer="product_type_slug" placeholder="Product Type Slug"  class="{{ $errors->has('product_type_slug') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="product_type" />
                    </x-admin.form-group>
                    <!-- <x-admin.form-group>
                        <x-admin.lable value="Product Quantity range" required />
                        <x-admin.input type="text" wire:model.defer="price_range" placeholder="Product Quantity Range"  class="{{ $errors->has('price_range') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="price_range" />
                    </x-admin.form-group> -->
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
                        <x-admin.lable value="Product Quantity Range" required/>
                        <x-admin.dropdown  wire:model.defer="price_range" placeHolderText="Please select one" autocomplete="off" class="{{ $errors->has('price_range') ? 'is-invalid' :'' }}">
                                @foreach ($product_rangeList as $pricecategory)
                                    <x-admin.dropdown-item  :value="$pricecategory['value']" :text="$pricecategory['text']"/>                          
                                @endforeach
                        </x-admin.dropdown>
                        <x-admin.input-error for="price_range" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="Price" required />
                        <x-admin.input type="text" wire:model.defer="price" placeholder="Price"  class="{{ $errors->has('price') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="price" />
                    </x-admin.form-group>
                      
                </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('product-price.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>

