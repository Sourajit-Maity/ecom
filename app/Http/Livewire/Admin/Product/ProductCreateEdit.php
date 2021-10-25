<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Product;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Models\Media;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
class ProductCreateEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $product_name,$product_description,$product_features, $user_id, $product,$product_photo_path;
    public $isEdit=false;
    public $categoryList = [];

    public function mount($product = null)
    {
        if ($product) {
            $this->product = $product;
            $this->fill($this->product);
            $this->isEdit=true;
        }
        else
            $this->product=new Product;

            $this->categoryList = [
                ['value' => 0, 'text' => "Choose Category"],
                ['value' => "DigBadge", 'text' => "DigBadge"],
                ['value' => "SMSBadge", 'text' => "SMSBadge"],
                ['value' => "SMGBadge", 'text' => "SMGBadge"],
                ['value' => "BRSBadge", 'text' => "BRSBadge"],
                ['value' => "BRGBadge", 'text' => "BRGBadge"],
                ['value' => "FRBadge", 'text' => "FRBadge"],
                ['value' => "FRGBadge", 'text' => "FRGBadge"],
                ['value' => "FRSBadge", 'text' => "FRSBadge"],
                ['value' => "FRBRSBadge", 'text' => "FRBRSBadge"],
                ['value' => "FRBRGBadge", 'text' => "FRBRGBadge"],
                ['value' => "OvBadge", 'text' => "OvBadge"],
                ['value' => "FrOvBadge", 'text' => "FrOvBadge"],
                ['value' => "FrOvBRSBadge", 'text' => "FrOvBRSBadge"],
            ];


    }

    public function validationRuleForSave(): array
    {
        return
            [
                'product_name' => ['required', 'max:255', Rule::unique('products')],
                'product_description' => ['required'],
                'product_features' => ['required'],
                "product_photo_path"  =>  "required|image:jpeg,png,jpg,gif,svg|max:2048",
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'product_name' => ['required', 'max:255', Rule::unique('products')->ignore($this->product->id)],
                'product_description' => ['required'],
                'product_features' => ['required'],
            ];
    }

                protected $messages = [
                    'product_photo_path.required' => 'Product photo field is required.',
                
                ];

    public function saveOrUpdate()
    {      

        if ($this->product) {
            $validatedData = $this->validate($this->validationRuleForUpdate());

            if (!is_string($this->product_photo_path)) {
                $this->validate([
                    'product_photo_path' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->product_photo_path);
                $name = md5($this->product_photo_path . microtime()) . '.' . $this->product_photo_path->extension();
                $this->product_photo_path->storeAs("cms_images", $name, "public");
                $validatedData['product_photo_path'] = "storage/cms_images/" . $name;
            }
   
            $this->product->update($validatedData);
            $msgAction = $this->product->name . ' Product has been updated';
            $this->showToastr("success", $msgAction);
            return redirect()->route('product.index');
        }
        $this->showToastr("error", "No record to update!!");
        return redirect()->route('product.index');


    }
    public function render()
    {
        return view('livewire.admin.product.product-create-edit');
    }
}
