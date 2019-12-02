<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantType extends Model
{
    protected $fillable = ['product_id', 'name'];
    public $timestamps = false;

    public function variant_type_values(){
        return $this->hasMany(ProductVariantTypeValues::class);
    }
}
