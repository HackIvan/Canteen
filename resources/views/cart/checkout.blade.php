@extends('layouts.app')


@section('content')


<h3>Order Information</h3>

<form action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="buyer_fullname" id="" class="form-control">
    </div>



    <div class="form-group">
        <label for="">Full Address</label>
        <input type="text" name="buyer_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="buyer_phone" id="" class="form-control">
    </div>
    <h4>Payment option</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            Cash On Delivery
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
          PayPal
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="afri_money">
         AfriMoni
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="orange_money">
          OrangeMoney
        </label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Place Your Food Order</button>
</form>
<div class="col-lg-6 col-md-6">
    <div class="payment-img">
       <a href="https://orange.sl"><img style="width: 25%" src="https://download.logo.wine/logo/Orange_Money/Orange_Money-Logo.wine.png" alt=""></a>                             <a href="https://africell.sl"><img style="width: 20%" src="https://www.nightwatchsl.com/wp-content/uploads/2020/04/AFR-600x197.jpg" alt=""></a>


    </div>
</div>

@endsection
