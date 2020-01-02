<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function products(){
        return $this->hasMany(TransactionProducts::class);
    }

    public function payments(){
        return $this->hasOne(TransactionPayment::class);
    }
}

