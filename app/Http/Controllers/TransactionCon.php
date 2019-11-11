<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionCon extends Controller
{
    public function checkout(){
        return view('pages.front.checkout');
    }
}

