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

    public function all(Request $request){
        $page = 'Products';
        $products = Product::with(array('images' => function($query){
                $query->where('primary', 1);
            })
        )
        ->where('status', 'active')
        ->select('id', 'title', 'price', 'compare_price')
        ->when($request->price, function ($query, $price) {
            return $query->orderBy('price', $price);
        })
        ->get()->toArray();
        return view('pages.products.all', compact('products', 'page'));
    }
}
