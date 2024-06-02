
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
    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Contact</li>
                            </ul>
                            <h1 class="title">Contact With Us</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="{{asset('client/assets/images/product/product-45.png')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Contact Area  -->
        <div class="axil-contact-page-area axil-section-gap">
            <div class="container">
                <div class="axil-contact-page">
                    <div class="row row--30">
                        <div class="col-lg-8">
                            <div class="contact-form">
                                <h3 class="title mb--10">We would love to hear from you.</h3>
                                <p>If you’ve got great products your making or looking to work with us then drop us a line.</p>
                                <form id="contact-form" method="POST" action="https://new.axilthemes.com/demo/template/etrade/mail.php" class="axil-contact-form">
                                    <div class="row row--10">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-name">Name <span>*</span></label>
                                                <input type="text" name="contact-name" id="contact-name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-phone">Phone <span>*</span></label>
                                                <input type="text" name="contact-phone" id="contact-phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-email">E-mail <span>*</span></label>
                                                <input type="email" name="contact-email" id="contact-email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-message">Your Message</label>
                                                <textarea name="contact-message" id="contact-message" cols="1" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb--0">
                                                <button name="submit" type="submit" id="submit" class="axil-btn btn-bg-primary">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-location mb--40">
                                <h4 class="title mb--20">Our Store</h4>
                                <span class="address mb--20">8212 E. Glen Creek Street Orchard Park, NY 14127, United States of America</span>
                                <span class="phone">Phone: +123 456 7890</span>
                                <span class="email">Email: Hello@etrade.com</span>
                            </div>
                            <div class="contact-career mb--40">
                                <h4 class="title mb--20">Careers</h4>
                                <p>Instead of buying six things, one that you really like.</p>
                            </div>
                            <div class="opening-hour">
                                <h4 class="title mb--20">Opening Hours:</h4>
                                <p>Monday to Saturday: 9am - 10pm
                                    <br> Sundays: 10am - 6pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Google Map Area  -->
                <div class="axil-google-map-wrap axil-section-gap pb--0">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="1080" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=https://maps.app.goo.gl/93zwq9E4Qtotax276"></iframe>
                        </div>
                        
                    </div>
                </div>
                <!-- End Google Map Area  -->
            </div>
        </div>
        <!-- End Contact Area  -->
    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{asset('client/assets/images/icons/service1.png')}}" alt="Service">
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
                            <img src="{{asset('client/assets/images/icons/service2.png')}}" alt="Service">
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
                            <img src="{{asset('client/assets/images/icons/service3.png')}}" alt="Service">
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
                            <img src="{{asset('client/assets/images/icons/service4.png')}}" alt="Service">
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
    
    <!-- Header Search Modal End -->

    <!-- Offer Modal Start -->
    <div class="offer-popup-modal" id="offer-popup-modal">
        <div class="offer-popup-wrap">
            <div class="card-body">
                <button class="popup-close"><i class="fas fa-times"></i></button>
                <div class="content">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Don’t Miss!!</span>
                        <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                    </div>
                    <div class="poster-countdown countdown"></div>
                    <a href="shop.html" class="axil-btn btn-bg-primary">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="closeMask"></div>
    <!-- Offer Modal End -->
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