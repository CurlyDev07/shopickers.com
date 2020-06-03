<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(array('images' => function($query){
            $query->where('primary', 1);
            })
        )
        ->where('status', 'active')
        ->select('id', 'title', 'price', 'compare_price')
        ->when($request->price, function ($query, $price) {
            return $query->orderBy('price', $price);
        })->limit(10)->get()->toArray();
        // dd($products);
        return view('pages.front.index', compact("products"));
    }
}
