<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
     /* Recuperamos los datos pasados del HEADER-SEACH-COMPONENET */
     public function __invoke(Request $request){
        /* return $request->search .$request->product_cat ; */
        /* if($request->search){
            $product = Product::where('name','like','%' . $request->search.'%')->get();

        }else{
            $product = [];
        } */
        $product = $request->search;
        $category = $request->product_cat;
        
        return view('search',['product' => $product, 'category' => $category]);

     }
}
