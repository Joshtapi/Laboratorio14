<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
class NavigationMenu extends Component
{

    public function render()
    {
        $products = Cart::count();
        return view('livewire.navigation-menu', compact('products'));
    }
}
