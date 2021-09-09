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
    public $product_id,$price,$product_category, $user_id,$blankArr, $productprice,$price_range;
    public $isEdit=false;
    public $categoryList = [];
    public $productnames = [];

    public function mount($productprice = null)
    {
        if ($productprice) {
            $this->productprice = $productprice;
            $this->fill($this->productprice);
            $this->isEdit=true;
        }
        else
            $this->productprice=new ProductPrice;
            $this->productnames = Product::get();
            $this->blankArr = [
                "value"=> "", "text"=> "== Select One =="
            ];

            $this->categoryList = [
                ['value' => 0, 'text' => "Choose Category"],
                ['value' => "Category1", 'text' => "Category1"],
                ['value' => "Category2", 'text' => "Category2"],
                ['value' => "Category3", 'text' => "Category3"],
                ['value' => "Category4", 'text' => "Category4"],
                ['value' => "Category5", 'text' => "Category5"],
                ['value' => "Category6", 'text' => "Category6"],
            ];


    }

    public function validationRuleForSave(): array
    {
        return
            [
                'product_id' => ['required'],
                'price' => ['required'],
                'product_category' => ['required'],
                "price_range"  =>  ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'product_id' => ['required'],
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
