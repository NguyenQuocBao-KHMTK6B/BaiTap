
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    
        <!-- CSS
        ============================================ -->
    
        <!-- Bootstrap CSS -->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>@yield('title')</title>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="robots" content="noindex, follow" />
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Favicon -->
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('client/assets/images/favicon.png')}}">
        
            <!-- CSS
            ============================================ -->
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/font-awesome.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/flaticon/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/slick.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/slick-theme.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/jquery-ui.min.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/sal.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/vendor/base.css')}}">
            <link rel="stylesheet" href="{{asset('client/assets/css/style.min.css')}}">
        
        </head>
        
        
        <body class="sticky-header newsletter-popup-modal">
        
            <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
            <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
            <header class="header axil-header header-style-1">
                <div class="header-top-campaign">
                    <div class="container position-relative">
                        <div class="campaign-content">
                            <p>đây là bài quản lý website bán máy tính <a href="#">báo cáo nhóm 4</a></p>
                        </div>
                    </div>
                    <button class="remove-campaign"><i class="fal fa-times"></i></button>
                </div>
                <div class="axil-header-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="header-top-dropdown">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            English
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">English</a></li>
                                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            USD
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">USD</a></li>
                                            <li><a class="dropdown-item" href="#">AUD</a></li>
                                            <li><a class="dropdown-item" href="#">EUR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="header-top-link">
                                    <ul class="quick-link">
                                        @if (Auth::check())
                                            <li><a href="">Hello, {{ Auth::user()->name }}</a></li>
                                            @php
                                                $role = Auth::user()->role;
                                                if ($role === null) {
                                                    $role = 1; // Set default role to 1 if it's null
                                                }
                                            @endphp
                                            @if ($role == 0)
                                                <li><a href="{{ route('adminform') }}">admin</a></li>
                                            @endif
                                            <li><a href="{{ route('user.logout') }}">Logout</a></li> <!-- Đường dẫn tới trang logout -->
                                        @else
                                            <li><a href="{{ route('user.login') }}">Sign In</a></li>
                                            <li><a href="">Join Us</a></li>
                                        @endif
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Mainmenu Area  -->
                <div id="axil-sticky-placeholder"></div>
                <div class="axil-mainmenu">
                    <div class="container">
                        <div class="header-navbar">
                            <div class="header-brand">
                                <a href="index.html" class="logo logo-dark">
                                    <img src="{{asset('client/assets/images/logo/logo.png')}}" alt="Site Logo">
                                </a>
                                <a href="index.html" class="logo logo-light">
                                    <img src="{{asset('client/assets/images/logo/logo-light.png')}}" alt="Site Logo">
                                </a>
                            </div>
                            <div class="header-main-nav">
                                <!-- Start Mainmanu Nav -->
                                <nav class="mainmenu-nav">
                                    <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                                    <div class="mobile-nav-brand">
                                        <a href="index.html" class="logo">
                                            <img src="{{asset('client/assets/images/logo/logo.png')}}" alt="Site Logo">
                                        </a>
                                    </div>
                                    <ul class="mainmenu">
                                        <li class="menu-item-has-children">
                                            <a href="{{route("/")}}">Home</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{route("user.shopcart")}}">Shop</a>
                                        </li>                               
                                        <li><a href="{{route("user.About")}}">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{route("user.blog")}}">Blog</a>
                                        </li>
                                        <li><a href="{{route("user.contact")}}">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- End Mainmanu Nav -->
                            </div>
                            <div class="header-action">
                                <ul class="action-list">
                                    <li class="axil-search">
                                        <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                            <i class="flaticon-magnifying-glass"></i>
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="wishlist.html">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li class="shopping-cart">
                                        <a href="{{ route('user.viewCart') }}">
                                            <span class="cart-count"></span>
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li class="my-account">
                                        <a href="javascript:void(0)">
                                            <i class="flaticon-person"></i>                        
                                    </li>
                                    <li class="axil-mobile-toggle">
                                        <button class="menu-btn mobile-nav-toggler">
                                            <i class="flaticon-menu-2"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Mainmenu Area -->
            </header>
        <!-- End Mainmenu Area -->
        <div class="header-top-campaign">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
                            <div class="slick-slide">
                                <div class="campaign-content">
                                    <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="campaign-content">
                                    <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
            <div class="single-product-thumb mb--40">
                @yield('product')
            </div>
            <!-- End .single-product-thumb -->

            <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white">
                <div class="container">
                    <ul class="nav tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a id="additional-info-tab" data-bs-toggle="tab" href="#additional-info" role="tab" aria-controls="additional-info" aria-selected="false">Additional Information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-desc-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mb--30">
                                        <div class="single-desc">
                                            <h5 class="title">Specifications:</h5>
                                            <p>We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather,
                                                initial all the made, have spare to negatives.</p>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                    <div class="col-lg-6 mb--30">
                                        <div class="single-desc">
                                            <h5 class="title">Care & Maintenance:</h5>
                                            <p>Use warm water to describe us as a product team that creates amazing UI/UX experiences, by crafting top-notch user experience.</p>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                </div>
                                <!-- End .row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="pro-des-features">
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="assets/images/product/product-thumb/icon-3.png" alt="icon">
                                                </div>
                                                Easy Returns
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="assets/images/product/product-thumb/icon-2.png" alt="icon">
                                                </div>
                                                Quality Service
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="assets/images/product/product-thumb/icon-1.png" alt="icon">
                                                </div>
                                                Original Product
                                            </li>
                                        </ul>
                                        <!-- End .pro-des-features -->
                                    </div>
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .product-desc-wrapper -->
                        </div>
                        <div class="tab-pane fade" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Stand Up</th>
                                                <td>35″L x 24″W x 37-45″H(front to back wheel)</td>
                                            </tr>
                                            <tr>
                                                <th>Folded (w/o wheels) </th>
                                                <td>32.5″L x 18.5″W x 16.5″H</td>
                                            </tr>
                                            <tr>
                                                <th>Folded (w/ wheels) </th>
                                                <td>32.5″L x 24″W x 18.5″H</td>
                                            </tr>
                                            <tr>
                                                <th>Door Pass Through </th>
                                                <td>24</td>
                                            </tr>
                                            <tr>
                                                <th>Frame </th>
                                                <td>Aluminum</td>
                                            </tr>
                                            <tr>
                                                <th>Weight (w/o wheels) </th>
                                                <td>20 LBS</td>
                                            </tr>
                                            <tr>
                                                <th>Weight Capacity </th>
                                                <td>60 LBS</td>
                                            </tr>
                                            <tr>
                                                <th>Width</th>
                                                <td>24″</td>
                                            </tr>
                                            <tr>
                                                <th>Handle height (ground to handle) </th>
                                                <td>37-45″</td>
                                            </tr>
                                            <tr>
                                                <th>Wheels</th>
                                                <td>Aluminum</td>
                                            </tr>
                                            <tr>
                                                <th>Size</th>
                                                <td>S, M, X, XL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="reviews-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mb--40">
                                        <div class="axil-comment-area pro-desc-commnet-area">
                                            <h5 class="title">01 Review for this product</h5>
                                            <ul class="comment-list">
                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="assets/images/blog/author-image-4.png" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Cameron Williamson">Eleanor Pena</span>
                                                                        </span>
                                                                    </a>
                                                                    <span class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star empty-rating"></i></a>
                                                                    </span>
                                                                </h6>
                                                                <div class="comment-text">
                                                                    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ” </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->

                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="assets/images/blog/author-image-4.png" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Rahabi Khan">Courtney Henry</span>
                                                                        </span>
                                                                    </a>
                                                                    <span class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                    </span>
                                                                </h6>
                                                                <div class="comment-text">
                                                                    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ”</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->

                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="assets/images/blog/author-image-5.png" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Rahabi Khan">Devon Lane</span>
                                                                        </span>
                                                                    </a>
                                                                    <span class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                    </span>
                                                                </h6>
                                                                <div class="comment-text">
                                                                    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ” </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->
                                            </ul>
                                        </div>
                                        <!-- End .axil-commnet-area -->
                                    </div>
                                    <!-- End .col -->
                                    <div class="col-lg-6 mb--40">
                                        <!-- Start Comment Respond  -->
                                        <div class="comment-respond pro-des-commend-respond mt--0">
                                            <h5 class="title mb--30">Add a Review</h5>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <div class="rating-wrapper d-flex-center mb--40">
                                                Your Rating <span class="require">*</span>
                                                <div class="reating-inner ml--20">
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>

                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Other Notes (optional)</label>
                                                            <textarea name="message" placeholder="Your Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Name <span class="require">*</span></label>
                                                            <input id="name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Email <span class="require">*</span> </label>
                                                            <input id="email" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <button type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Submit Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Comment Respond  -->
                                    </div>
                                    <!-- End .col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- woocommerce-tabs -->

        </div>
        <!-- End Shop Area  -->

        <!-- Start Recently Viewed Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Your Recently</span>
                    <h2 class="title">Viewed Items</h2>
                </div>
            
            </div>
        </div>
        <!-- End Recently Viewed Product Area  -->
        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->
    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <!-- <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo" src="{{asset('client/assets/images/logo/logo.png')}}" alt="Logo Images">
                            </a>
                        </div> -->
                            <div class="inner">
                                <p>TRƯỜNG ĐẠI HỌC HẠ LONG <br>
                                Cơ sở 1: Số 258, đường Bạch Đằng, <br>
                                phường Nam Khê - thành phố Uông Bí - tỉnh Quảng Ninh.
                                </p>
                                <ul class="support-list-item">
                                    <li><a href="mailto:nguyenbaosieucapvip2002@gmail.com"><i class="fal fa-envelope-open"></i> nguyenbaosieucapvip2002@gmail.com</a></li>
                                    <li><a href="tel:0987654321"><i class="fal fa-phone-alt"></i> 0987654321</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Lớp KHMTK6B</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="#">Nhóm 4</a></li>
                                    <li><a href="#">Nguyễn Quốc bảo</a></li>
                                    <li><a href="#">Hoàng Minh Sơn</a></li>
                                    <li><a href="#">Ongdee CTN</a></li>
                                    <li><a href="#">Giảng viên hướng dẫn: Nguyễn Văn Thẩm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Lập Trình Website</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="#">PHP</a></li>
                                    <li><a href="#">MVC</a></li>
                                    <li><a href="#">Laravel</a></li>
                                    <li><a href="#">siêu cấp víp</a></li>
                                    <li><a href="#">Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Download App</h5>
                            <div class="inner">
                                <span>Save $3 With App & New User only</span>
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                        <img src="{{asset('client/assets/images/others/qr.png')}}" alt="Axilthemes">
                                    </div>
                                    <div class="app-link">
                                        <a href="#">
                                            <img src="{{asset('client/assets/images/others/app-store.png')}}" alt="App Store">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('client/assets/images/others/play-store.png')}}" alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2022. All rights reserved by <a target="_blank" href="https://axilthemes.com/">Axilthemes</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="{{asset('client/assets/images/icons/cart/cart-1.png')}}" alt="paypal cart"></li>
                                <li><img src="{{asset('client/assets/images/icons/cart/cart-2.png')}}" alt="paypal cart"></li>
                                <li><img src="{{asset('client/assets/images/icons/cart/cart-5.png')}}" alt="paypal cart"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->

    <!-- Product Quick View Modal Start -->
   
    <!-- Product Quick View Modal End -->

    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="{{ route('search') }}" method="post">
                    @csrf
                    <input type="text" name="SelectName" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('client/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('client/assets/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('client/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/js.cookie.js')}}"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="{{asset('client/assets/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/sal.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/counterup.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/waypoints.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('client/assets/js/main.js')}}"></script>

    <script>

</body>

</html>