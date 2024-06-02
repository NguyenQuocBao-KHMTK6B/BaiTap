@extends('shop')
@section('search')
<div class="col-lg-9">
    <!-- End .row -->
    <div class="row row--15">
        @foreach ($products as $product)
            <div class="col-xl-4 col-sm-6">
                <div class="axil-product product-style-one mb--30">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="{{ $product->images }}" alt="Product Images">
                        </a>
                        <div class="label-block label-right">
                            <div class="product-badget">{{ $product->discount }}% OFF</div>
                        </div>
                        <div class="product-hover-action">
                            <ul class="cart-action">
                                <li class="wishlist"><a href="{{ route('user.addCart', ['id' => $product->product_id]) }}"><i class="far fa-heart"></i></a></li>
                                <li class="select-option"><a href="cart.html">See details</a></li>
                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <h5 class="title"><a href="#">{{ $product->title }}</a></h5>
                            <div class="product-price-variant">
                                @php
                                    // Tính giá sau khi áp dụng discount
                                    $discountedPrice = $product->price - ($product->price * $product->discount / 100);
                                @endphp
                                <span class="price current-price">{{ number_format($discountedPrice, 2, ',', '.') }} VND</span>
                                <span class="price old-price">{{ number_format($product->price, 2, ',', '.') }} VND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center pt--20">
        <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
    </div>
</div>
@endsection
