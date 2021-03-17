<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $request->validate([
            'buyer_fullname' => 'required',
            'buyer_address' => 'required',
            'buyer_phone' => 'required',
            'payment_method' => 'required',


        ]);

         $order = new Order();

         $order->order_number = uniqid('orderNumber-');

        $order->buyer_fullname = $request->input('buyer_fullname');
        $order->buyer_address = $request->input('buyer_address');
        $order->buyer_phone = $request->input('buyer_phone');


        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('buyer_fullname');
            $order->billing_address = $request->input('buyer_address');
            $order->billing_phone = $request->input('buyer_phone');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
        }



        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();

        $order->save();


        //saving the ordered items

        $cartItems = \Cart::session(auth()->id())->getContent();


        foreach($cartItems as $item ){
            $order->items()->attach($item->id, ['price'=>$item->price, 'quantity'=> $item->quantity ]);
        }

        // payment method

        // if(request('payment_method') == 'paypal') {
            //redirect to paypal
        // return redirect()->route('paypal.checkout', $order->id);
        // if(request('payment_method') == 'cash_on_delivery') {
            //redirect to paypal
    //     return redirect()->route('orders', $order->id);

    // }

    if(request('payment_method') == 'paypal'){
        \Cart::session(auth()->id())->clear();
        return redirect()->to('paymentpal');
    }



    elseif(request('payment_method') == 'afri_money'){
        \Cart::session(auth()->id())->clear();
        return redirect()->to('https://africell.sl/');
         //empty the cart

    }
    elseif (request('payment_method') == 'orange_money') {
        \Cart::session(auth()->id())->clear();
        return redirect()->to('http://orange.sl');
    }

    elseif (request('payment_method') == 'cash_on_delivery') {
        \Cart::session(auth()->id())->clear();
        return redirect()->to('token');
    }



        // take user to thank you page
        return "order completed, thank you very much!";
        // dd('order created', $order);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }


    // public function store(Request $request)
    // {
    //     dd($request->all());
    // }
}


 // elseif(request('payment_method') == 'paypal'){
    //     return redirect()->to('https://www.sandbox.paypal.com/');
    // }

    // elseif(request('payment_method') == 'paypal'){
    //     \Cart::session(auth()->id())->clear();
    //     return redirect()->to('https://www.sandbox.paypal.com/');
    //      //empty the cart

    // }

       // elseif(request('payment_method') == 'stripe'){
    //     return redirect()->to('orders');
    // }




        //empty the cart
        // \Cart::session(auth()->id())->clear();
        // send email
