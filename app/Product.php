<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'price', 'compare_price', 'qty', 'sku', 'barcode'];

    protected $hidden = ['status', 'created_at', 'updated_at'];

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
    
    public function product_variants(){
        return $this->hasMany(ProductVariant::class);
    }
    
    public function product_variant_options(){
        return $this->hasMany(ProductVariantOption::class);
    }
}
