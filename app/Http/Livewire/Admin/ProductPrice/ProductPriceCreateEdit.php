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
    public $product_rangeList = [];
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
            $this->product_rangeList = [
                ['value' => 0, 'text' => "Choose Quantity"],
                ['value' => "1-5", 'text' => "One to Five"],
                ['value' => "6-15", 'text' => "Six to Fifteen"],
                ['value' => "16-25", 'text' => "Sixteen to TweentyFive"],
                ['value' => "26-50", 'text' => "TweentySix to Fifty"],
                ['value' => "51-100", 'text' => "FiftyOne to Hundred"],
                ['value' => "101-199", 'text' => "Hundred One to One Hundred Ninty Nine"],
                ['value' => "200-499", 'text' => "Two Hundred to Four Hundred Ninty Nine"],
                ['value' => "500", 'text' => "More Than Five Hundred"],
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
