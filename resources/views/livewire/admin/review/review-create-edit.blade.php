<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
    <x-admin.form-group>
                    <x-admin.lable value="User" required/>
                        <x-admin.dropdown  wire:model.defer="user_id" placeHolderText="Please select one" autocomplete="off" class="state {{ $errors->has('user_id') ? 'is-invalid' :'' }}">
                                <x-admin.dropdown-item  :value="$blankArr['value']" :text="$blankArr['text']"/> 
                                @foreach ($username as $user)
                                    <x-admin.dropdown-item  :value="$user['id']" :text="$user['first_name']"/>                      
                                @endforeach
                        </x-admin.dropdown>
                        <x-admin.input-error for="user_id" />
                    </x-admin.form-group>
                    
                    <x-admin.form-group class="col-lg-12" wire:ignore>
                    <x-admin.lable value="Review" required />
                    <textarea
                    x-data x-init="editor = CKEDITOR.replace('review_description');
                    editor.on('change', function(event){
                        @this.set('review_description', event.editor.getData());
                    })" wire:model.defer="review_description" id="review_description" class="form-control {{ $errors->has('review_description') ? 'is-invalid' :'' }}"></textarea>
                    </x-admin.form-group>
                </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('review-master.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>