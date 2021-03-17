<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function add(Product $product )
    {
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product,
        ));

        return redirect()->route('cart.index');
    }







    public function index (){


       $cartItems = \Cart::session(auth()->id())->getContent();

       $orders = Order::take(3)->get();

        return view ('cart.index', compact('cartItems'), ['recentOrders' => $orders]);
    }


    public function destroy ($itemId){


   \Cart::session(auth()->id())->remove($itemId);

         return back();
     }

     public function update ($rowId)
     {
        \Cart::session(auth()->id())->update($rowId,[
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            ),

        ]);
        return back ();

     }

     public function  checkout ()
     {
         return view('cart.checkout' );

     }




}