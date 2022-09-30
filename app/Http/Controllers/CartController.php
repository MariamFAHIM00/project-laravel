<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except(["index","addProductToCart","updateProductOnCart","removeProductFromCart"]);   
    }
    //return cart items
    public function index(){
        return view("cart.index")->with([
            "items" => \Cart::getContent()
        ]);
    }
    //add item to cart
    public function addProductToCart(Request $request,Product $product){
        \Cart::add(array( 
            "id"=>$product->id,
            "name"=>$product->title,
            "price"=>$product->price,
            "quantity"=>$request->qty,
            "attributes"=>array(),
            "associatedModel"=>$product,
        ));
        return redirect()->route("cart.index");
    }

    //update item on cart
    public function updateProductOnCart(Request $request,Product $product){
        \Cart::update($product->id,array(
            'quantity'=>array(
                'relative'=>false,
                'value'=>$request->qty
            )
        ));
        return redirect()->route("cart.index");
    }

    //remove item from cart
    public function removeProductFromCart(Product $product){
        \Cart::remove($product->id);
        return redirect()->route("cart.index");
    }

    //cart form view
    public function formView(){
        return view("cart.form");
    }
    //cart form
    public function cartForm(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:10|max:13',
            'address'=>'required',
            'country'=>'required',
            'town'=>'required',
        ]);

        $form = new Cart();
        $form->user_id=auth()->user()->id;
        $form->name=$request->name;
        $form->email=$request->email;
        $form->phone=$request->phone;
        $form->address=$request->address;
        $form->country=$request->country;
        $form->town=$request->town;
        $res=$form->save();
        if($res){
            return redirect()->route("pay.view");
        }
    }
    //pay view
    public function payView(){
        return view("cart.pay");
    }
    //thank u view
    public function thankuView(){
        return view("cart.thanku");
    }
}
