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
    public $name,$slug,$magnet,$pin,$price_id, $user_id,$blankArr, $swivel_clip,$price;
    public $one_to_five,$six_to_fifteen,$sixteen_to_twentyfive,$twentysix_to_fifty, $fiftyone_to_hundred;
    public $hundredone_to_oneninetynine, $twohundred_to_fournintynine,$fivehundredplus;
    public $isEdit=false;
 

    public function mount($price = null)
    {
        if ($price) {
            $this->price = $price->toarray();
            $this->price_id = $this->price['id'];
            $this->one_to_five = $this->price['1-5'];
            $this->six_to_fifteen = $this->price['6-15'];
            $this->sixteen_to_twentyfive = $this->price['16-25'];
            $this->twentysix_to_fifty = $this->price['26-50'];
            $this->fiftyone_to_hundred = $this->price['51-100'];
            $this->hundredone_to_oneninetynine = $this->price['101-199'];
            $this->twohundred_to_fournintynine = $this->price['200-499'];
            $this->fivehundredplus = $this->price['500+'];
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
                
                'one_to_five' => ['nullable'],
                'six_to_fifteen' => ['nullable'],
                "sixteen_to_twentyfive"  =>  ['nullable'],
                'twentysix_to_fifty' => ['nullable'],
                'fiftyone_to_hundred' => ['nullable'],
                'hundredone_to_oneninetynine' => ['nullable'],
                'twohundred_to_fournintynine' => ['nullable'],
                "fivehundredplus"  =>  ['nullable'],
                'magnet' => ['nullable'],
                'pin' => ['nullable'],
                'swivel_clip' => ['nullable'],
                "name"  =>  ['required'],
                "price_id" =>  ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
        [
            'one_to_five' => ['nullable'],
            'six_to_fifteen' => ['nullable'],
            "sixteen_to_twentyfive"  =>  ['nullable'],
            'twentysix_to_fifty' => ['nullable'],
            'fiftyone_to_hundred' => ['nullable'],
            'hundredone_to_oneninetynine' => ['nullable'],
            'twohundred_to_fournintynine' => ['nullable'],
            "fivehundredplus"  =>  ['nullable'],
            'magnet' => ['nullable'],
            'pin' => ['nullable'],
            'swivel_clip' => ['nullable'],
            "name"  =>  ['required'],
            "price_id" =>  ['required'],
            
        ];
    }



    public function saveOrUpdate()
    {
       $id = $this->price_id;
        $this->price = ProductPrice::find($id);
        $data = array();

        $data['1-5'] = $this->one_to_five;
        $data['6-15'] = $this->six_to_fifteen;
        $data['16-25'] = $this->sixteen_to_twentyfive;
        $data['26-50'] = $this->twentysix_to_fifty;
        $data['51-100'] = $this->fiftyone_to_hundred;
        $data['101-199'] = $this->hundredone_to_oneninetynine;
        $data['200-499'] = $this->twohundred_to_fournintynine;
        $data['500+'] = $this->fivehundredplus;
        $data['name'] = $this->name;
        $data['magnet'] = $this->magnet;
        $data['pin'] = $this->pin;
        $data['swivel_clip'] = $this->swivel_clip;
        
        $this->price->update($data);
        
        $msgAction ='Product Price is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('price.index'); 
    }
    public function render()
    {
        return view('livewire.admin.product-price.product-price-create-edit');
    }
}
