<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use File;
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

    public function update($id){
        $products = Product::where('id', $id)->with(['images'])->get()->toArray()[0];
        return view('admin.products.update', compact('products'));
    }
    
    public function patch(UploadProductsRequest $request){
        /*--------------------------------------------------------------------------
        | FIND AND UPDATE THE PROPERTY
        |--------------------------------------------------------------------------*/
        $product = Product::find($request->id);
        $update = $product->update($request->except(['id', 'images']));
        
        /*--------------------------------------------------------------------------
        | DELETE IMAGES
        |--------------------------------------------------------------------------*/
        $siteURL = url('/');// get the current url
        $delete_image = ProductImage::where('product_id', $request->id)->get();// delete images
        foreach ($delete_image as $value) {
            $value->delete();// delete  image db value
            $trim_img_url = ltrim($value['img'], $siteURL);// generate the url to use on deleting image
            File::delete($trim_img_url); // delete image
        }

        /*--------------------------------------------------------------------------
        | CRATE NEW IMAGES
        |--------------------------------------------------------------------------*/
        $primary = 0;
        foreach ($request->images as $key => $value) {
            $product->images()->create([
                'img' => url('/').'/'.base64ToImage($value['base64_image'], 'images/products/'),
                'primary' => $value['primary']
            ]);
            $value['primary'] == 1 ? $primary++ : '';
        }

        /*--------------------------------------------------------------------------
        | SET MAIN IMAGE IF NOT SET
        |--------------------------------------------------------------------------*/
        if ($primary == 0) {
            $product->images()->first()->update(['primary' => 1]);
        }

        return response()->json(['code' => 200]);
    
    }

    public function status(Request $request){
       Product::find($request->id)->update(['status' => $request->status]);
    }

    public function delete(Request $request){
        foreach ($request->property_ids as $property_id) {
            Product::find($property_id)->delete();
        }
    }

    public function restore(Request $request){
        foreach ($request->property_ids as $property_id) {
            Product::withTrashed()->find($property_id)->restore();
        }
    }

    public function archive(){
        $archive = Product::with(array('images' => function($query){
                $query->where('primary', 1);
            })
        )
        ->select('id', 'title', 'price', 'deleted_at')
        ->onlyTrashed()->get()->toArray();

        $ids = Product::onlyTrashed()->pluck('id');
        return view('admin.products.archive', compact('archive', 'ids'));
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
