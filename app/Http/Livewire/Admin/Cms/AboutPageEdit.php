<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Cms;
use App\Models\Pages;
use App\Models\Aboutpage;


class AboutPageEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $content_heading,$content_text,$content_sub_heading,$banner_image = "",$content_image2="",$content_image1="",$details;

   

    public function mount($details = null){
        if($details) {
            $details = $details->toArray();
            $this->aboutpagedetails = $details['about'];
            $this->fill($this->aboutpagedetails);
            $this->isEdit = true;            
        }        
    }


    public function validationRuleForUpdate(): array
    {
        return
            [
                'content_heading' => ['required', 'max:255'],
                'content_text' => ['required'],
                'content_sub_heading' => ['required'],
            ];
    }


    public function saveOrUpdate()
    {

        if ($this->details->about) {
            $validatedData = $this->validate($this->validationRuleForUpdate());

            if (!is_string($this->banner_image)) {
                $this->validate([
                    'banner_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->banner_image);
                $name = md5($this->banner_image . microtime()) . '.' . $this->banner_image->extension();
                $this->banner_image->storeAs("cms_images", $name, "public");
                $validatedData['banner_image'] = "cms_images/" . $name;
            }

            if (!is_string($this->content_image1)) {
                $this->validate([
                    'content_image1' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content_image1);
                $name = md5($this->content_image1 . microtime()) . '.' . $this->content_image1->extension();
                $this->content_image1->storeAs("cms_images", $name, "public");
                $validatedData['content_image1'] = "cms_images/" . $name;
            }
            if (!is_string($this->content_image2)) {
                $this->validate([
                    'content_image2' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content_image2);
                $name = md5($this->content_image2 . microtime()) . '.' . $this->content_image2->extension();
                $this->content_image2->storeAs("cms_images", $name, "public");
                $validatedData['content_image2'] = "cms_images/" . $name;
            }
   
            $this->details->about->update($validatedData);
            $msgAction = $this->details->name . ' Page has been updated';
            $this->showToastr("success", $msgAction);
            return redirect()->route('pages.index');
        }
        $this->showToastr("error", "No record to update!!");
        return redirect()->route('pages.index');
    }
    public function render()
    {
        return view('livewire.admin.cms.about-page-edit');
    }
}
