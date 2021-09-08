<?php

namespace App\Http\Livewire\Admin\Review;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Review;
use App\Models\User;

class ReviewCreateEdit extends Component
{ 
    use AlertMessage;
    public $user_id,$review,$blankArr, $review_description;
    public $isEdit=false;
    public $username = [];

    public function mount($review = null)
    {
        if ($review) {
            $this->review = $review;
            $this->fill($this->review);
            $this->isEdit=true;
        }
        else
            $this->review=new Review;

            $this->username = User::get();
            $this->blankArr = [
                "value"=> "", "text"=> "== Select One =="
            ];
    }

    public function validationRuleForSave(): array
    {
        return
            [
                'user_id' => ['required'],
                'review_description' => ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'user_id' => ['required'],
                'review_description' => ['required'],
                
            ];
    }

    public function saveOrUpdate()
    {
        $this->review->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Review is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('review-master.index');
    }
    public function render()
    {
        return view('livewire.admin.review.review-create-edit');
    }
}
