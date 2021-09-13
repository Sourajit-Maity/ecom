<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Product;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Models\Media;
use Carbon\Carbon;
class ProductCreateEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $product_name,$product_slug,$product_category, $user_id, $product,$product_photo_path;
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
                'product_slug' => ['required'],
                'product_category' => ['required'],
                "product_photo_path"  =>  "required|image:jpeg,png,jpg,gif,svg|max:2048",
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'product_name' => ['required', 'max:255', Rule::unique('products')->ignore($this->product->id)],
                'product_slug' => ['required'],
                'product_category' => ['required'],
               
                
            ];
    }

    protected $messages = [
        'product_photo_path.required' => 'Product photo field is required.',
       
    ];

    public function saveOrUpdate()
    {
        if ($this->product_photo_path) {
            if (!is_string($this->product_photo_path)) {
                $this->validate([
                    'product_photo_path' => ['mimes:jpg,jpeg,png'],
                ],[
                    'product_photo_path.mimes' => 'Image must be jpeg,jpg or png type.',
                ]);
                $name = md5($this->product_photo_path . microtime()) . '.' . $this->product_photo_path->extension();
                $this->product_photo_path->storeAs("attachFile", $name, "public");
                $this->product->product_photo_path = "attachFile/" . $name;
            }
        }
        


        $this->isEdit ? $this->product->user_id = auth()->user()->id : $this->product->user_id = auth()->user()->id;

        $this->product->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Product is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('product.index');
    }
    public function render()
    {
        return view('livewire.admin.product.product-create-edit');
    }
}
