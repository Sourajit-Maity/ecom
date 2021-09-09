<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Product;

class ProductList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchProductname,$searchProductslug,$searchProductcategory, $searchStatus = -1, $perPage = 5;
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
        $this->searchProductname = "";
        $this->searchProductslug = "";
        $this->searchProductcategory = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $productQuery = Product::query();
        if ($this->searchProductname)
            $productQuery->Where('product_name', 'like', '%' . $this->searchProductname . '%');
        if ($this->searchProductslug)
            $productQuery->Where('product_slug', 'like', '%' . $this->searchProductslug . '%');
        if ($this->searchProductcategory)
            $productQuery->Where('product_category', 'like', '%' . $this->searchProductcategory . '%');
        if ($this->searchStatus >= 0)
            $productQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.product.product-list', [
            'products' => $productQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        Product::destroy($id);
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

    public function changeStatus(Product $product)
    {
        $product->fill(['active' => ($product->active == 1) ? 0 : 1])->save();
       
        $this->showModal('success', 'Success', 'status is changed successfully');
    }
}

