<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\UserCart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserCartList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $cartItems = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchTitle,$searchImage,$searchNames,$searchPrice,$searchQuantity, $searchStatus = -1, $perPage = 5;
    protected $listeners = ['deleteConfirm', 'changeStatus','cartUpdated' => '$refresh'];

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
        $this->searchProduct = "";
        $this->searchPrice = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $user = Auth::user();
        $cartQuery = Order::query()->where('user_id',$user->id)->with(['user','orderdetails']);
        
        return view('livewire.cart.user-cart-list', [
            'usercarts' => $cartQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
        
    }
    public function deleteConfirm($id)
    {
        Order::destroy($id);
        $this->showModal('success', 'Success', 'Product is removed successfully');
    }

    public function deleteAttempt($id)
    {
        
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to delete this?", 'Yes, delete!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function deleteCart($id)
    {
        Order::destroy($id);
        $this->showModal('success', 'Success', 'City is deleted successfully');
    }

    public function removeCart($id)
    {
        //dd($id);
        Order::destroy($id);

        session()->flash('success', 'Item has removed!');
    }

    public function clearAllCart()
    {
        Order::clear();

        session()->flash('success', 'All Item Clear Successfully!');
    }
}
    