@extends('layouts.app')

@section('content')
<h2>Cart </h2>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cartItems as $item)
        <tr>
        <td scope="row">{{ $item->name }}</td>
            <td>

              {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
            </td>
            <td>
            <form action="{{route('cart.update', $item->id)}}">
                <input name="quantity" type="number" value= {{ $item->quantity }}>
                <input type="submit" value="save">
            </form>
            </td>
            <td><a href="{{ route('cart.destroy', $item->id) }}">delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<h3>
    Total Price : Le {{\Cart::session(auth()->id())->getTotal()}}

<a name="" id="" class="btn btn-primary" href="{{}}" role="button">Proceed to Checkout</a>
</h3>

@endsection
