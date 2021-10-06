<?php

namespace App\Http\Livewire\Admin\ProductionTime;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\ProductionTime;

class ProductionTimeList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchProductiontimeprice,$searchProductiontimename,  $perPage = 5;
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
        $this->searchProductiontimeprice = "";
        $this->searchProductiontimename = "";


    }

    public function render()
    {
        $productiontimeQuery = ProductionTime::query();
        if ($this->searchProductiontimeprice)
            $productiontimeQuery->Where('price', 'like', '%' . $this->searchProductiontimeprice . '%');
    
        if ($this->searchProductiontimename)
            $productiontimeQuery->Where('production_time_name', 'like', '%' . $this->searchProductiontimename . '%');
        return view('livewire.admin.production-time.production-time-list', [
            'productiontimes' => $productiontimeQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        ProductionTime::destroy($id);
        $this->showModal('success', 'Success', 'Product is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, Change!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

   
}
