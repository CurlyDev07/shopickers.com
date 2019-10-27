<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemCon extends Controller
{
    public function show($slug, $item_id){
        return view('pages.front.show');
    }
}
