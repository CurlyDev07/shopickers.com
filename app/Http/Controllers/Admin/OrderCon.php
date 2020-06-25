<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionPayment;

class OrderCon extends Controller
{
    public function index(Request $request){
        $orders = Transaction::with('payments:id,transaction_id,total,payment_status,created_at')
        ->when($request->sort, function($q){
            return $q->orderBy('id', request()->sort);
        })// sort
        ->when($request->search, function($q){
            return $q->where('order_number', 'like', request()->search.'%');
        })// search
        ->select('id', 'order_number', 'first_name', 'last_name')
        ->OrderBy('id', 'desc')
        ->paginate(10);
       
        return view('admin.orders.index', compact('orders'));
    }

    public function show($transaction_id){
        $orders = Transaction::where('id', $transaction_id)->with([
            'payments',
            'products',
            'products.product:id,title',
            'products.product.images' => function($q){
                $q->select('product_id', 'img')->where('primary', 1);
            }
        ])
        ->get()->toArray()[0];
        // dd($orders);

        return view('admin.orders.view', compact('orders'));
    }
}
