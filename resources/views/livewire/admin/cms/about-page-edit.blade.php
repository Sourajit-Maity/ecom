<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
    <div class="form-group col-lg-12">
          
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon-layer"></i>
            </span>
                    <h3 class="kt-portlet__head-title">
                        Contact Us page
                    </h3>
                </div>
            </div>
        </div>
        <x-admin.form-group>
            <x-admin.lable value="Heading" required />
            <x-admin.input type="text"  wire:model.defer="content_heading" placeholder="Enter Heading"
                class="{{ $errors->has('content_heading') ? 'is-invalid' :'' }}"/>
            <x-admin.input-error for="content_heading" />
        </x-admin.form-group>

        <x-admin.form-group>
            <x-admin.lable value="Heading" required />
            <x-admin.input type="text"  wire:model.defer="content_sub_heading" placeholder="Enter Sub Heading"
                class="{{ $errors->has('content_sub_heading') ? 'is-invalid' :'' }}"/>
            <x-admin.input-error for="content_sub_heading" />
        </x-admin.form-group>

       
        <x-admin.form-group class="col-lg-12" wire:ignore>
            <x-admin.lable value="Description" required/>
                <textarea
                    x-data x-init="editor = CKEDITOR.replace('content_text');
                    editor.on('change', function(event){
                        @this.set('content_text', event.editor.getData());
                    })" wire:model.defer="content_text" id="content_text" class="form-control {{ $errors->has('content_text') ? 'is-invalid' :'' }}"></textarea>
        </x-admin.form-group>
        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="banner_image"   class="{{ $errors->has('banner_image') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="banner_image" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->about->banner_image) ? Storage::url($details->about->banner_image) : asset($details->about->banner_image)}}" width="200px" height="150px">
        </div>

        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="content_image1"   class="{{ $errors->has('content_image1') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="content_image1" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->about->content_image1) ? Storage::url($details->about->content_image1) : asset($details->about->content_image1)}}" width="200px" height="150px">
        </div>

        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="content_image2"   class="{{ $errors->has('content_image2') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="content_image2" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->about->content_image2) ? Storage::url($details->about->content_image2) : asset($details->about->content_image2)}}" width="200px" height="150px">
        </div>
        </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('pages.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
