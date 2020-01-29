<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Transaction;
use App\TransactionPayment;
use App\TransactionProducts;
use App\Product;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public $gateway;
 
    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
 
    public function index(){
        return view('payment');
    }
 
    public function charge(Request $request) {
        

        if($request->input('submit')){
            try {
                $markdown = $this->save_products($request);// save the transaction and get the markdown

                $response = $this->gateway->purchase(array(
                    'amount' => $markdown['total'],
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();// send the payload to paypal
                    
                
                $markdown['payment_id'] = $response->getTransactionReference();
                $markdown['payment_status'] = 'declined';// set payment status and update to approved when user paid the amount
                TransactionPayment::create($markdown);

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
 
    public function payment_success(Request $request){
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')){
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
         
            if ($response->isSuccessful()){
                // The customer has successfully paid.
                $arr_body = $response->getData();
                
                // Insert transaction data into the database
                $update_payment = TransactionPayment::where('payment_id', $arr_body['id']);
                $payment = $update_payment->first();
                $update_payment->update([
                    'payment_id' => $arr_body['id'],
                    'payer_id' => $arr_body['payer']['payer_info']['payer_id'],
                    'payer_email' => $arr_body['payer']['payer_info']['email'],
                    'total' => $arr_body['transactions'][0]['amount']['total'],
                    'currency' => env('PAYPAL_CURRENCY'),
                    'payment_status' => $arr_body['state'],
                ]);

                $order_number = Transaction::where('id', $payment['transaction_id'])->get(['order_number']);// get order number

                return view('pages\front\payment_success', [
                    'order_number' => $order_number[0]['order_number'],
                    'total_amount' => number_format($payment['total'], 2)
                ]);// redirect to success payment page
                
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
 
    public function payment_error(){
        return 'User is canceled the payment.';
    }

    public function save_products(Request $request){ // return total amount to charge
        $items_decode = json_decode(base64_decode($request->base64_item_details));
        $items = [];
        $shipping = 150;
        $subtotal = 0;
        $total = 0;

        $transaction = Transaction::create([
            'user_id' => auth()->user()->id,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name, 
            "phone_number" => $request->phone_number,  
            "email" => $request->email, 
            "address" => $request->address,   
            "barangay" => $request->barangay,  
            "city" => $request->city,  
            "province" => $request->province,  
            "zip_code" => $request->zip_code,  
        ]);
        $transaction->update(['order_number' => 'T4U'.now()->format('ymd').$transaction['id']]);// Add transaction id

        foreach ($items_decode as $item) {
            $products = Product::where('id', $item->id)->get()->toArray();

            $transaction->products()->create([
                'product_id' => $products[0]['id'],
                'price' => $products[0]['price'],
                'qty' => $item->qty,
                'subtotal' => ($products[0]['price'] * $item->qty),
            ]); // save item
            $subtotal += ($products[0]['price'] * $item->qty);// add subtotal
        }
        
        return [
            "transaction_id" => $transaction['id'],
            "shipping_fee" => $shipping,
            "subtotal" => $subtotal,
            "total" => ($shipping + $subtotal)
        ];
    }
}