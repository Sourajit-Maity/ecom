<?php

namespace App\Http\Livewire\Admin\ProductPrice;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\ProductPrice;
use App\Models\Product;

class ProductPriceList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchProducttype,$searchPrice,$searchPricerange,$searchProductcategory, $perPage = 5;
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
        $this->searchProducttype = "";
        $this->searchPrice = "";
        $this->searchPricerange = "";
        $this->searchProductcategory = "";

    }

    public function render()
    {
        $productpriceQuery = ProductPrice::query();
        if ($this->searchProducttype)
        $productpriceQuery->Where('product_type', 'like', '%' . $this->searchProducttype . '%');
        if ($this->searchPrice)
            $productpriceQuery->Where('price', 'like', '%' . $this->searchPrice . '%');
        if ($this->searchPricerange)
            $productpriceQuery->Where('price_range', 'like', '%' . $this->searchPricerange . '%');
        if ($this->searchProductcategory)
            $productpriceQuery->Where('product_category', 'like', '%' . $this->searchProductcategory . '%');

        return view('livewire.admin.product-price.product-price-list', [
            'productprices' => $productpriceQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        ProductPrice::destroy($id);
        $this->showModal('success', 'Success', 'ProductPrice is deleted successfully');
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
