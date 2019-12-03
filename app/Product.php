<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'price', 'compare_price', 'qty', 'sku', 'barcode'];

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
    
    public function product_variants(){
        return $this->hasMany(ProductVariant::class);
    }
}
