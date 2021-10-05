<?php

namespace App\Http\Livewire\Admin\ProductionTime;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\ProductionTime;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Models\Media;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class ProductionTimeCreateEdit extends Component
{

    use AlertMessage;
    use WithFileUploads;
    public $production_time_name,$price, $productiontime;
    public $isEdit=false;
    public $categoryList = [];

    public function mount($productiontime = null)
    {
        if ($productiontime) {
            $this->productiontime = $productiontime;
            $this->fill($this->productiontime);
            $this->isEdit=true;
        }
        else
            $this->productiontime=new ProductionTime;


    }

    public function validationRuleForSave(): array
    {
        return
            [
                'production_time_name' => ['required', 'max:255', Rule::unique('production_times')],
                'price' => ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'production_time_name' => ['required', 'max:255', Rule::unique('production_times')->ignore($this->productiontime->id)],
                'price' => ['required'],
            ];
    }

                

    public function saveOrUpdate()
    {      

        if ($this->productiontime) {
            $validatedData = $this->validate($this->validationRuleForUpdate());

   
            $this->productiontime->update($validatedData);
            $msgAction = $this->productiontime->name . ' Production Time has been updated';
            $this->showToastr("success", $msgAction);
            return redirect()->route('timeproduction.index');
        }
        $this->showToastr("error", "No record to update!!");
        return redirect()->route('timeproduction.index');


    }
    public function render()
    {
        return view('livewire.admin.production-time.production-time-create-edit');
    }
}

   