<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsCon extends Controller
{
    public function show($slug, $item_id){
        $product = Product::with(['images'])
        ->where('id', $item_id)
        ->first()
        ->toArray();
        
        return view('pages.products.show', compact('product'));
    }

    public function all(){
        $products = Product::with(array('images' => function($query){
                $query->where('primary', 1);
            })
        )->select('id', 'title', 'price', 'compare_price')->get()->toArray();

        return view('pages.products.all', compact('products'));
    }
  
}
