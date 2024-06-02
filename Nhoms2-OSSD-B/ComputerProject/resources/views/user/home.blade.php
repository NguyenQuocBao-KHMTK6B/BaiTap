@extends('trangchu')
@section('home')
    <!-- Start Explore Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary">
                    <i class="far fa-shopping-basket"></i> Our Products
                </span>
                <h2 class="title">Explore our Products</h2>
            </div>
            <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="row row--15">
                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{ route('user.productdetails', ['id' => $product->product_id]) }}">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="{{ $product->images }}" alt="">
                                            <img class="hover-img" src="#" alt="">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">{{ $product->discount }}% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                <li class="select-option">
                                                    <a href="{{ route('user.productdetails', ['id' => $product->product_id]) }}">See details</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ route('user.addCart', ['id' => $product->product_id]) }}"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <div class="product-rating">
                                                <span class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span class="rating-number">(64)</span>
                                            </div>
                                            <h5 class="title"><a href="{{ route('user.productdetails', ['id' => $product->product_id]) }}">{{ $product->title }}</a></h5>
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
                        <!-- End Single Product  -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="agileits-box-body clearfix">
                    {{ $products->links('pagination::bootstrap-4') }} <!-- Hiển thị các liên kết phân trang với Bootstrap -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Explore Product Area  -->
@endsection
