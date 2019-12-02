<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductVariantType;
use App\ProductVariantTypeValues;

class ProductsCon extends Controller
{
    public function index(){
        return view('admin.products.index');
    }
    
    public function add(){
        return view('admin.products.add');
    }

    public function store(Request $request){
        $product = Product::create($request->all());

        foreach ($request->images as $key => $value) {
            $product->images()->create([
                'img' => url('/').'/'.base64ToImage($value['base64_image'], 'images/products/'),
                'primary' => $value['primary']
            ]);
        }

        foreach ($request->variant_types as $key => $value) {

            $variant_types = $product->variant_types()->create([
                'name' => $key,
            ]);

            foreach ($value as $value) {
                ProductVariantTypeValues::create([
                    'product_variant_types_id' => $variant_types->id,
                    'name' => $value,
                ]);
            }
        }
    }

    public function generate_variant(){
        $arranged = request()->variants ? get_variations(request()->variants) : [];
            $variant_key_values = json_encode(request()->variants);
        
            $all_combination = [];
        
            foreach ($arranged as $key => $value) {
                $one_combination = '';
                $i = 0;
                foreach ($value as $key2 => $value2) {
                    if ($i == 0 && count($value) == 1) {
                        $one_combination .= $value2;
                        $i++;
                        break;
                    }// for only one variant remove the (/)
                    
                    if(count($value) == ($i + 1)){
                        $one_combination .= $value2;
                        $i++;
                        break;
                    }// last variant remove the (/)
                    
                    // for variant greater than 1 and less than the variant count add (/)
                    $one_combination .= $value2 .' / ';
                    $i++;
                }
                $all_combination[] = $one_combination;
            }
           
            return view('admin.products.variant_items_form', compact('all_combination', 'variant_key_values'));
    }
}
