<?php

namespace App\Http\Livewire\Admin\Review;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Review;
use App\Models\User;

class ReviewList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchUser,$searchReview, $searchStatus = -1, $perPage = 5;
    protected $listeners = ['deleteConfirm', 'changeStatus'];

    public function mount()
    {
        $this->perPageList = [
            ['value' => 5, 'text' => "5"],
            ['value' => 10, 'text' => "10"],
            ['value' => 20, 'text' => "20"],
            ['value' => 50, 'text' => "50"],
            ['value' => 100, 'text' => "100"]
        ];
    }
    public function getRandomColor()
    {
        $arrIndex = array_rand($this->badgeColors);
        return $this->badgeColors[$arrIndex];
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function search()
    {
        $this->resetPage();
    }
    public function resetSearch()
    {
        $this->searchUser = "";
        $this->searchReview = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $reviewQuery = Review::query();
        if ($this->searchUser) {
            $user_name = User::Where('first_name', 'like', '%' . $this->searchUser . '%')->get();
            foreach ($user_name as $value) {
                $reviewQuery->orWhere('user_id', $value->id);
             }
         } 
        if ($this->searchReview)
            $reviewQuery->Where('review_description', 'like', '%' . $this->searchReview . '%');
        if ($this->searchStatus >= 0)
            $reviewQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.review.review-list', [
            'reviews' => $reviewQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        Review::destroy($id);
        $this->showModal('success', 'Success', 'Review is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, Change!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(Review $review)
    {
        $review->fill(['active' => ($review->active == 1) ? 0 : 1])->save();
       
        $this->showModal('success', 'Success', 'Review status is changed successfully');
    }
}
  

