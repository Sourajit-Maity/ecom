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
    public $one_to_five,$six_to_fifteen,$sixteen_to_twentyfive,$twentysix_to_fifty, $fiftyone_to_hundred;
    public $hundredone_to_oneninetynine, $twohundred_to_fournintynine,$fivehundredplus;
    public $isEdit=false;
 

    public function mount($price = null)
    {
        if ($price) {
            $this->price = $price;
            $this->fill($this->price);
            $this->isEdit=true;
        }
        else
            $this->price = new ProductPrice;
            $this->blankArr = [
                "value"=> "", "text"=> "== Select One =="
            ];

    }

    public function validationRuleForSave(): array
    {
        return
            [
                '26-50' => ['required'],
                '1-5' => ['required'],
                '6-15' => ['required'],
                "16-25"  =>  ['required'],
                '51-100' => ['required'],
                '101-199' => ['required'],
                '200-499' => ['required'],
                "500+"  =>  ['required'],
                'magnet' => ['required'],
                'pin' => ['required'],
                'swivel_clip' => ['required'],
                "name"  =>  ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
        [
            '26-50' => ['required'],
            '1-5' => ['required'],
            '6-15' => ['required'],
            "16-25"  =>  ['required'],
            '51-100' => ['required'],
            '101-199' => ['required'],
            '200-499' => ['required'],
            "500+"  =>  ['required'],
            'magnet' => ['required'],
            'pin' => ['required'],
            'swivel_clip' => ['required'],
            "name"  =>  ['required'],
            
        ];
    }



    public function saveOrUpdate()
    {
       
        $this->isEdit ? $this->price->user_id = auth()->user()->id : $this->price->user_id = auth()->user()->id;

        $this->price->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Product Price is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('product-price.index');
    }
    public function render()
    {
        return view('livewire.admin.product-price.product-price-create-edit');
    }
}
