@extends('layouts.basket')

@section('content')


<div class="container text-center">
    <h2>Items to Order </h2>
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


                    <input type="submit" value="Update" class="btn btn-secondary ">
                                </form>
                </form>
                    {{-- <input type="submit" value="Update" class="btn btn-success  fa fa-trash-o"> --}}
                </form>
                </td>
                {{-- <td><a href="{{ route('cart.destroy', $item->id) }}">delete</a></td> --}}
                <td>  <a href="{{ route('cart.destroy', $item->id) }}"><i  class="pe-7s-trash" style="font-size: 40px;"></i></a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>
        Total Price : Le {{\Cart::session(auth()->id())->getTotal()}}

    <a name="" id="" class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to Place Order</a>
    </h3>
</div>

@endsection

@section('recent-orders')
<div class="blog-area pt-130 pb-70">
    <div class="container">
        <div class="section-title-furits text-center mb-95">
            <img src="assets/img/icon-img/49.png" alt="">
            <h2>Recently Ordered Foods</h2>
        </div>
        <div class="row">
            @foreach ($recentOrders as $orders)


            <div class="col-lg-4 col-md-6">
                <div class="blog-wrapper mb-30 wow fadeInLeft">
                    <div class="blog-img-2">
                        <a href="blog-details.html"><img alt="" src="{{asset('storage/'.$orders->cover_img)}}"></a>
                    </div>
                    <div class="blog-info-wrapper-2 text-center">
                        <div class="blog-meta-2">
                            <ul>

                            <h4>{{$orders->name}}</h4>

                            <li><a href="#">Order Status {{$orders->status}}</a></li>
                        </ul>
                    </div>
                    <h3><a href="#">{{$orders->buyer_fullname}}</a></h3>
                    <div class="blog-meta-2">
                            <ul>
                                <li><a href="#">Ordered {{$orders->item_count}} of this.</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection


