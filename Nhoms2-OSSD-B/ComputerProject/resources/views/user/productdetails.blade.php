@extends('product')
@section('product')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb--40">
                <div class="row">
                    <div class="col-lg-10 order-lg-2">
                        <div class="single-product-thumbnail-wrap zoom-gallery">
                            <div class="single-product-thumbnail product-large-thumbnail-3 axil-product">
                                <div class="thumbnail">
                                    <a href="{{ $product->images }}" class="popup-zoom">
                                        <img src="{{ $product->images }}" alt="Product Images">
                                    </a>
                                </div>
                                <div class="thumbnail">
                                    <a href="{{ $product->images }}" class="popup-zoom">
                                        <img src="{{ $product->images }}" alt="Product Images">
                                    </a>
                                </div>
                                <div class="thumbnail">
                                    <a href="{{ $product->images }}" class="popup-zoom">
                                        <img src="{{ $product->images }}" alt="Product Images">
                                    </a>
                                </div>
                                <div class="thumbnail">
                                    <a href="{{ $product->images }}" class="popup-zoom">
                                        <img src="{{ $product->images }}" alt="Product Images">
                                    </a>
                                </div>
                            </div>
                            <div class="label-block">
                                <div class="product-badget">{{ $product->discount }}% OFF</div>
                            </div>
                            <div class="product-quick-view position-view">
                                <a href="{{ $product->images }}" class="popup-zoom">
                                    <i class="far fa-search-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 order-lg-1">
                        <div class="product-small-thumb-3 small-thumb-wrapper">
                            <div class="small-thumb-img">
                                <img src="{{ $product->images }}" alt="thumb image">
                            </div>
                            <div class="small-thumb-img">
                                <img src="{{ $product->images }}" alt="thumb image">
                            </div>
                            <div class="small-thumb-img">
                                <img src="{{ $product->images }}" alt="thumb image">
                            </div>
                            <div class="small-thumb-img">
                                <img src="{{ $product->images }}" alt="thumb image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb--40">
                <div class="single-product-content">
                    <div class="inner">
                        <h2 class="product-title">{{ $product->title }}</h2>
                        @php
                            // Tính giá sau khi áp dụng discount
                            $discountedPrice = $product->price - ($product->price * $product->discount / 100);
                        @endphp
                        <span class="price-amount">{{ number_format($discountedPrice, 2, ',', '.') }} VND</span>
                        <div class="product-rating">
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="review-link">
                                <a href="#">(<span>2</span> customer reviews)</a>
                            </div>
                        </div>
                        <ul class="product-meta">
                            <li><i class="fal fa-check"></i>In stock</li>
                            <li><i class="fal fa-check"></i>Free delivery available</li>
                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                        </ul>
                        <p class="description">{{ $product->description }}</p>

                        <div class="product-variations-wrapper">
                            <!-- Start Product Variation  -->
                            <div class="product-variation">
                                <h6 class="title">Colors:</h6>
                                <div class="color-variant-wrapper">
                                    <ul class="color-variant">
                                        <li class="color-extra-01 active"><span><span class="color"></span></span></li>
                                        <li class="color-extra-02"><span><span class="color"></span></span></li>
                                        <li class="color-extra-03"><span><span class="color"></span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Product Variation  -->

                            <!-- Start Product Variation  -->
                            <div class="product-variation product-size-variation">
                                <h6 class="title">Size:</h6>
                                <ul class="range-variant">
                                    <li>xs</li>
                                    <li>s</li>
                                    <li>m</li>
                                    <li>l</li>
                                    <li>xl</li>
                                </ul>
                            </div>
                            <!-- End Product Variation  -->
                        </div>

                        <!-- Start Product Action Wrapper  -->
                        <div class="product-action-wrapper d-flex-center">
                            <!-- Start Quentity Action  -->
                            <div class="pro-qty"><input type="text" value="1"></div>
                            <!-- End Quentity Action  -->

                            <!-- Start Product Action  -->
                            <ul class="product-action d-flex-center mb--0">
                                <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Buy Now</a></li>
                                <li class="wishlist"><a href="{{ route('user.addCart', ['id' => $product->product_id]) }}" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <!-- End Product Action  -->
                        </div>
                        <!-- End Product Action Wrapper  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
