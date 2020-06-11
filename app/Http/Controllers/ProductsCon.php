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
        $products = Product::with(array('images' => function($query){
                $query->where('primary', 1);
            })
        )
        ->where('status', '!=','inactive')
        ->select('id', 'title', 'price', 'compare_price')
        ->when($request->min, function ($query, $min) {
            return $query->where('price', '>', $min);
        })
        ->when($request->max, function ($query, $max) {
            return $query->where('price', '<', $max);
        })
        ->when($request->price, function ($query, $price) {
            return $query->orderBy('price', $price);
        })
        ->paginate(24);
        return view('pages.products.all', compact('products'));
    }
}
