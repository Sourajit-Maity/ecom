<?php

namespace App\Http\Livewire\Admin\Faq;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Faq; 
class FaqCreateEdit extends Component
{

    use AlertMessage;
    public $question,$answer, $faq;
    public $isEdit=false;

    public function mount($faq = null)
    {
        if ($faq) {
            $this->faq = $faq;
            $this->fill($this->faq);
            $this->isEdit=true;
        }
        else
            $this->faq=new Faq;

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'question' => ['required', 'max:255', Rule::unique('faqs')],
                'answer' => ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'question' => ['required', 'max:255', Rule::unique('faqs')->ignore($this->faq->id)],
                'answer' => ['required'],
                
            ];
    }

    public function saveOrUpdate()
    {
        $this->faq->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'FAQ is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('faq-master.index');
    }

    public function render()
    {
        return view('livewire.admin.faq.faq-create-edit');
    }
}


