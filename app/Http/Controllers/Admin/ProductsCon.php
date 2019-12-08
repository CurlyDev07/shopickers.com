<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use App\ProductVariantOption;
use App\Http\Requests\Products\UploadProductsRequest;

class ProductsCon extends Controller
{
    public function index(){
        $products = Product::with(array('images' => function($query){
                $query->where('primary', 1);
            })
        )->get()->toArray();
        return view('admin.products.index', compact('products'));
    }
    
    public function add(){
        return view('admin.products.add');
    }

    public function store(UploadProductsRequest $request){
        $product = Product::create($request->all());

        $primary = 0;
        foreach ($request->images as $key => $value) {
            $product->images()->create([
                'img' => url('/').'/'.base64ToImage($value['base64_image'], 'images/products/'),
                'primary' => $value['primary']
            ]);
            $value['primary'] == 1 ? $primary++ : '';
        }

        if ($primary == 0) {
            $product->images()->first()->update(['primary' => 1]);
        }// Set Main image if user didnt choose primary img

        if ($request->has_variant == false) {
            foreach ($request->variant_types as $key => $value) {
    
                $product_variant_types = $product->product_variants()->create([
                    'name' => $key,
                ]);
    
                foreach ($value as $value) {
                    $product_variant_types->product_variant_types()->create([
                        'name' => $value,
                    ]);
                }
            }
    
            foreach ($request->variant_options as $key => $value) {
                $product->product_variant_options()->create([
                    "name" => $value['name'],
                    "price" => $value['price'],
                    "qty" => $value['qty'],
                    "sku" => $value['sku'],
                    "barcode" => $value['barcode'],
                ]);
            }
        }

        return response()->json(['code' => 200]);
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
