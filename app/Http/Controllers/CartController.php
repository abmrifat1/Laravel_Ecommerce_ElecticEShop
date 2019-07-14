<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public  function directAddToCart($id){

        $product=Product::find($id);


        Cart::add([
            'id'=>$product->id,
            'name'=>$product->product_name,
            'qty'=>1,
            'price'=>$product->product_price,
            'options'=>[
                'image'=>$product->product_image
            ]

        ]);
        return redirect('/show-cart');
    }


    public function addToCart(Request $request){
        $product=Product::find($request->product_id);
        Cart::add([
            'id'=>$request->product_id,
            'name'=>$product->product_name,
            'qty'=>$request->qty,
            'price'=>$product->product_price,
            'options'=>[
                'image'=>$product->product_image
            ]

        ]);
       return redirect('/show-cart');
    }
    public function showCart(){
        $cartProducts=Cart::content();

        return view('front.cart.show-cart',['cartProducts'=>$cartProducts]);
    }

    public function updateCart(Request $request){

        Cart::update($request->rowId,$request->qty);

        return redirect('/show-cart')->with('message','Cart Product Info Update Successfully');
    }
    public function deleteCart($id){
        Cart::remove($id);
        return redirect('/show-cart')->with('message','Carrt Product Remove Successfully');
    }

}
