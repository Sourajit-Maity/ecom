<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Cms;
use App\Models\Pages;
use App\Models\HomePage; 

class HomePageEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $banner_heading,$banner_sub_heading,$banner_content,$content2_heading,$content1_subheading,$content2_option_image3,
    $content1_heading,$content2_option_text1,$content1_text,$content2_option_heading1,$content2_option_heading3,
    $content2_text,$content2_option_text2,$content2_option_heading2,$content1_image = "",$content2_option_text3,
    $content2_option_image1 = "",$content2_option_image2 = "",$content2_image = "",$banner_image = "",$details;
 
    public function mount($details = null){
        if($details) {
            $details = $details->toArray();
            $this->homepagedetails = $details['home'];
            $this->fill($this->homepagedetails);
            $this->isEdit = true;            
        }        
    }


    public function validationRuleForUpdate(): array
    {
        return
            [
                'banner_heading' => ['required', 'max:255'],
                'banner_sub_heading' => ['required', 'max:255'],
                'banner_content' => ['required'],
                'content1_heading' => ['required', 'max:255'],
                'content1_text' => ['required'],
                'content1_subheading' => ['required'],
                'content2_heading' => ['required', 'max:255'],
                'content2_text' => ['required'],
                'content2_option_heading1' => ['required', 'max:255'],
                'content2_option_text1' => ['required'],
                'content2_option_heading2' => ['required', 'max:255'],
                'content2_option_text2' => ['required'],   
                'content2_option_heading3' => ['required', 'max:255'],
                'content2_option_text3' => ['required'],              

            ];
    }


    public function saveOrUpdate()
    {
        // dd($this->cms->home);
        // dd($this);
        if ($this->details->home) {
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
            if (!is_string($this->content1_image)) {
                $this->validate([
                    'content1_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content1_image);
                $name = md5($this->content1_image . microtime()) . '.' . $this->content1_image->extension();
                $this->content1_image->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content1_image' => "cms_images/" . $name]);
                $validatedData['content1_image'] = "cms_images/" . $name;
            }
           if (!is_string($this->content2_option_image1)) {
                $this->validate([
                    'content2_option_image1' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content2_option_image1);
                $name = md5($this->content2_option_image1 . microtime()) . '.' . $this->content2_option_image1->extension();
                $this->content2_option_image1->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content2_option_image1' => "cms_images/" . $name]);
                $validatedData['content2_option_image1'] = "cms_images/" . $name;
            }
            if (!is_string($this->content2_image)) {
                $this->validate([
                    'content2_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content2_image);
                $name = md5($this->content2_image . microtime()) . '.' . $this->content2_image->extension();
                $this->content2_image->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content2_image' => "cms_images/" . $name]);
                $validatedData['content2_image'] = "cms_images/" . $name;
            }
            if (!is_string($this->content2_option_image2)) {
                $this->validate([
                    'content2_option_image2' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content2_option_image2);
                $name = md5($this->content2_option_image2 . microtime()) . '.' . $this->content2_option_image2->extension();
                $this->content2_option_image2->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content2_option_image2' => "cms_images/" . $name]);
                $validatedData['content2_option_image2'] = "cms_images/" . $name;
            }   
            if (!is_string($this->content2_option_image3)) {
                $this->validate([
                    'content2_option_image3' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content2_option_image3);
                $name = md5($this->content2_option_image3 . microtime()) . '.' . $this->content2_option_image3->extension();
                $this->content2_option_image3->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content2_option_image3' => "cms_images/" . $name]);
                $validatedData['content2_option_image3'] = "cms_images/" . $name;
            }   
        
            
            $this->details->home->update($validatedData);
            $msgAction = $this->details->name . ' Page has been updated';
            $this->showToastr("success", $msgAction);
            return redirect()->route('pages.index');
        }
        $this->showToastr("error", "No record to update!!");
        return redirect()->route('pages.index');
    }

    public function render()
    {
        return view('livewire.admin.cms.home-page-edit');
    }
}
    
