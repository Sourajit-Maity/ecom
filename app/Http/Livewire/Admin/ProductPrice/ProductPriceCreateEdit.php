<?php

namespace App\Http\Livewire\Admin\ProductPrice;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\ProductPrice;
use App\Models\Product;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Models\Media;
use Carbon\Carbon;

class ProductPriceCreateEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $name,$slug,$magnet,$pin, $user_id,$blankArr, $swivel_clip,$price;
    public $isEdit=false;
    public $categoryList = [];
    public $product_rangeList = [];
    public $productnames = [];

    public function mount($price = null)
    {
        if ($price) {
            $this->price = $price;
            $this->fill($this->price);
            $this->isEdit=true;
        }
        else
            $this->price=new ProductPrice;
            $this->blankArr = [
                "value"=> "", "text"=> "== Select One =="
            ];

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'product_type' => ['required'],
                '1-5' => ['required'],
                'product_category' => ['required'],
                "price_range"  =>  ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'product_type' => ['required'],
                'price' => ['required'],
                'product_category' => ['required'],
                "price_range"  =>  ['required'],               
                
            ];
    }



    public function saveOrUpdate()
    {
       
        $this->isEdit ? $this->productprice->user_id = auth()->user()->id : $this->productprice->user_id = auth()->user()->id;

        $this->productprice->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Product Price is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('product-price.index');
    }
    public function render()
    {
        return view('livewire.admin.product-price.product-price-create-edit');
    }
}
