<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $search;
    public $product_cat;
    public $product_cat_id;
    public $product , $category;
public $prueba ="a";
    public function mount()
    {
        $this->category_id =Category::where('name',$this->category)->first();
        $this->sorting = "default";/* clasificacion */
        $this->pagesize = 12;
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }

    public function store( $product_id)/* */
    {
        $product = Product::where('_id',$product_id)->first();
        Cart::add([
        'id' => $product->id, 
        'name' => $product->name, 
        'qty' => 1, 
        'price' => $product->price_cost, 
        'weight' => 0, 
        'options' => [
            'image'=> $product->image ,
            'slug'=> $product->slug
            ]
        ]);
        session()->flash('success_message', 'Item added in Cart');
       
        /* return redirect()->route('product.cart'); */
    }

//    use WithPagination;
    public function render()
    {
        if ($this->sorting == "date") {
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->category_id->id.'%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting == "price") {
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->category_id->id.'%')->orderBy('price_cost', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting == "price-desc") {
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->category_id->id.'%')->orderBy('price_cost', 'DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::where('name','like','%'.$this->search .'%')->paginate($this->pagesize);
        }

        $categories =Category::all();

        return view('livewire.search-component',['products' => $products, 'categories'=>$categories]);
    }
}
