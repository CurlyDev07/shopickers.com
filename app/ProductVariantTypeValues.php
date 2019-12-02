<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantTypeValues extends Model
{
    protected $fillable = ['product_variant_types_id', 'name'];
    public $timestamps = false;
}
