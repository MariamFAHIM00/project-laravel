<?php

namespace App\Http\Controllers;

use Omnipay\Omnipay;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    function verify_payment(Request $request,$transaction_id){
        $request->session()->put('transaction_id',$transaction_id);
        return redirect('/complete_payment');
    }

    function complete_payment(Request $request){
        if($request->session()->has('transaction_id')){
            foreach(\Cart::getContent() as $item){
                Order::create([
                    "user_id"=>auth()->user()->id,
                    "product_name"=>$item->name,
                    "qty"=>$item->quantity,
                    "price"=>$item->price,
                    "total"=>$item->price * $item->quantity,
                    "paid"=>1
                 ]);  
                 \Cart::clear();      
            }
            return redirect()->route('thank.you')->with([
                'success'=>'Your payment made successfully'
            ]);

        }
        else{
            return redirect('/cart');
        }


    }

}