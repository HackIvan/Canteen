@extends('layouts.app')

@section('content')
<h2>Place Order  </h2>

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
            <input type="radio" class="form-check-input" name="payment_method" id="" value="stripe">
          Stripe
        </label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Place Your Food Order</button>
</form>


@endsection

