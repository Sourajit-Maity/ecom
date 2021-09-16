<?php

namespace App\Http\Livewire;

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

class CartUpdate extends Component
{
    public $cartItems = [];
    public $quantity = 1;

    public function mount($usercart)
    {
        $this->cartItems = $usercart;

        $this->quantity = $usercart['quantity'];
    }

    public function updateCart()
    {
        UserCart::update($this->cartItems['id'], [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity
            ]
        ]);

        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart-update');
    }
}