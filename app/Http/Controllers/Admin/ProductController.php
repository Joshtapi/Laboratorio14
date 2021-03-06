<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 
    public function index()
    {
        
        return view('admin.products.index' );
    }

    public function create()
    {
        return view('admin.products.create');
    }
  
    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
