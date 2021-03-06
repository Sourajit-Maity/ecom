<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
    <div class="form-group col-lg-12">
          
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon-layer"></i>
            </span>
                    <h3 class="kt-portlet__head-title">
                        Home page
                    </h3>
                </div>
            </div>
        </div>
        <x-admin.form-group>
            <x-admin.lable value="Heading" required />
            <x-admin.input type="text"  wire:model.defer="banner_heading" placeholder="Enter Heading"
                class="{{ $errors->has('banner_heading') ? 'is-invalid' :'' }}"/>
            <x-admin.input-error for="banner_heading" />
        </x-admin.form-group>

        <x-admin.form-group>
            <x-admin.lable value="Sub Heading" required />
            <x-admin.input type="text" wire:model.defer="banner_sub_heading" placeholder="Enter Sub Heading"
                class="{{ $errors->has('banner_sub_heading') ? 'is-invalid' :'' }}" />
            <x-admin.input-error for="banner_sub_heading" />
        </x-admin.form-group>
       
       
        <x-admin.form-group class="col-lg-12">
                        <x-admin.lable value="Description" required />
                        <x-admin.textarea type="text" wire:model.defer="banner_content" placeholder="banner content..."  class="{{ $errors->has('banner_content') ? 'is-invalid' :'' }}" rows='8' />
                        <x-admin.input-error for="banner_content" />
        </x-admin.form-group>
        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="banner_image"   class="{{ $errors->has('banner_image') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="banner_image" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->home->banner_image) ? Storage::url($details->home->banner_image) : asset($details->home->banner_image)}}" width="200px" height="150px">
        </div>
       
        <!-- content1 page -->
        <x-admin.form-group>
            <x-admin.lable value="Welcome Heading" required />
            <x-admin.input type="text"  wire:model.defer="content1_heading" placeholder="Enter Heading"
                class="{{ $errors->has('content1_heading') ? 'is-invalid' :'' }}"/>
            <x-admin.input-error for="content1_heading" />
        </x-admin.form-group>
        <x-admin.form-group>
            <x-admin.lable value="Welcome Sub Heading" required />
            <x-admin.input type="text"  wire:model.defer="content1_subheading" placeholder="Enter Sub Heading"
                class="{{ $errors->has('content1_subheading') ? 'is-invalid' :'' }}"/>
            <x-admin.input-error for="content1_subheading" />
        </x-admin.form-group>

        <x-admin.form-group class="col-lg-12">
                        <x-admin.lable value="Welcome Content" required />
                        <x-admin.textarea type="text" wire:model.defer="content1_text" placeholder="content1_text..."  class="{{ $errors->has('content1_text') ? 'is-invalid' :'' }}" rows='8' />
                        <x-admin.input-error for="content1_text" />
        </x-admin.form-group>
        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="content1_image"   class="{{ $errors->has('content1_image') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="content1_image" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->home->content1_image) ? Storage::url($details->home->content1_image) : asset($details->home->content1_image)}}" width="200px" height="150px">
        </div>
<!-- content2 -->
<x-admin.form-group>
            <x-admin.lable value="Content Heading" required />
            <x-admin.input type="text" wire:model.defer="content2_heading" placeholder="Enter  Heading"
                class="{{ $errors->has('content2_heading') ? 'is-invalid' :'' }}" />
            <x-admin.input-error for="content2_heading" />
        </x-admin.form-group>
       
        <x-admin.form-group class="col-lg-12">
                        <x-admin.lable value="Content" required />
                        <x-admin.textarea type="text" wire:model.defer="content2_text" placeholder="content2_text..."  class="{{ $errors->has('content2_text') ? 'is-invalid' :'' }}" rows='8' />
                        <x-admin.input-error for="content2_text" />
        </x-admin.form-group>
        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="content2_image"   class="{{ $errors->has('content2_image') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="content2_image" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->home->content2_image) ? Storage::url($details->home->content2_image) : asset($details->home->content2_image)}}" width="200px" height="150px">
        </div>
          <!-- Content 3 -->
       <x-admin.form-group>
            <x-admin.lable value="Content Heading" required />
            <x-admin.input type="text"  wire:model.defer="content2_option_heading1" placeholder="Enter Heading"
                class="{{ $errors->has('content2_option_heading1') ? 'is-invalid' :'' }}"/>
            <x-admin.input-error for="content2_option_heading1" />
        </x-admin.form-group>
       
        <x-admin.form-group class="col-lg-12">
                        <x-admin.lable value="Content" required />
                        <x-admin.textarea type="text" wire:model.defer="content2_option_text1" placeholder="content2_option_text1..."  class="{{ $errors->has('content2_option_text1') ? 'is-invalid' :'' }}" rows='8' />
                        <x-admin.input-error for="content2_option_text1" />
        </x-admin.form-group>
        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="content2_option_image1"   class="{{ $errors->has('content2_option_image1') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="content2_option_image1" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->home->content2_option_image1) ? Storage::url($details->home->content2_option_image1) : asset($details->home->content2_option_image1)}}" width="200px" height="150px">
        </div>           
       
<!-- content 4  -->
<x-admin.form-group>
            <x-admin.lable value=" Heading" required />
                <x-admin.input type="text"  wire:model.defer="content2_option_heading2" placeholder="Enter Heading"
                    class="{{ $errors->has('content2_option_heading2') ? 'is-invalid' :'' }}"/>
                <x-admin.input-error for="content2_option_heading2" />
        </x-admin.form-group>
       
        <x-admin.form-group class="col-lg-12">
                        <x-admin.lable value="Content" required />
                        <x-admin.textarea type="text" wire:model.defer="content2_option_text2" placeholder="content2_option_text2..."  class="{{ $errors->has('content2_option_text2') ? 'is-invalid' :'' }}" rows='8' />
                        <x-admin.input-error for="content2_option_text2" />
        </x-admin.form-group>
        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="content2_option_image2"   class="{{ $errors->has('content2_option_image2') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="content2_option_image2" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->home->content2_option_image2) ? Storage::url($details->home->content2_option_image2) : asset($details->home->content2_option_image2)}}" width="200px" height="150px">
        </div> 
        <x-admin.form-group>
            <x-admin.lable value=" Heading" required />
                <x-admin.input type="text"  wire:model.defer="content2_option_heading3" placeholder="Enter Heading"
                    class="{{ $errors->has('content2_option_heading3') ? 'is-invalid' :'' }}"/>
                <x-admin.input-error for="content2_option_heading3" />
        </x-admin.form-group>
  
        <x-admin.form-group class="col-lg-12">
                        <x-admin.lable value=" Content" required />
                        <x-admin.textarea type="text" wire:model.defer="content2_option_text3" placeholder="content2_option_text3..."  class="{{ $errors->has('content2_option_text3') ? 'is-invalid' :'' }}" rows='8' />
                        <x-admin.input-error for="content2_option_text3" />
        </x-admin.form-group>
        <x-admin.form-group>
                        <x-admin.lable value="Image" required />
                        <x-admin.input type="file" wire:model.defer="content2_option_image3"   class="{{ $errors->has('content2_option_image3') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="content2_option_image3" />
        </x-admin.form-group>

        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($details->home->content2_option_image3) ? Storage::url($details->home->content2_option_image3) : asset($details->home->content2_option_image3)}}" width="200px" height="150px">
        </div>
    
            </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('pages.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
