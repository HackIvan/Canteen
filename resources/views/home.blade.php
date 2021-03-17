@extends('layouts.front')

@section('content')


<div id="catalog">
 <div class="product-style-area pt-30 wow fadeInUp">
    <div class="container">
        <div class="section-title-furits text-center mb-95">
            <img src="assets/img/icon-img/49.png" alt="">
            <h2>Today's Hot Menu</h2>
        </div>
        <div class="row">
            @foreach ($allProducts as $product)


            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="product-fruit-wrapper mb-60">
                    <div class="product-fruit-img">
                        {{-- <img src="{{ asset('storage/'.$product->cover_img) }}" alt="Product Image"> --}}
                        <img class="card-img-top" src="{{asset('storage/'.$product->cover_img)}}" alt="Card image cap">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="{{ route('cart.add', $product->id)}}">
                                <i class="pe-7s-cart"></i>
                            </a>

                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="{{ route('cart.add', $product->id)}}">{{ $product->name }}</a></h4>
                    <span>Le {{$product->price}}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


</div>




@endsection



