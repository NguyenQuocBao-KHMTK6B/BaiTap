@if(session('error'))
<div class="altert alert-success">
    {{session('error')}}
</div>
@endif
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 18:21:15 GMT -->
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


<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <a href="index.html" class="site-logo"><img src="assets/images/logo/logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-8">
                    <div class="singin-header-btn">
                        <p>Not a member?</p>
                        <a href="{{route("user.showsignUpForm")}}" class="axil-btn btn-bg-secondary sign-up-btn">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--9">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">Sign in to eTrade.</h3>
                        <p class="b2 mb--55">Enter your detail below</p>
                        <form class="singin-form" action="{{ route('user.login.post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="annie@example.com" required>
                                @if(session('error'))
                                    <div>{{ session('error') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="123456789" required>
                                @if(session('error'))
                                    <div>{{ session('error') }}</div>
                                @endif
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Sign In</button>
                                <a href="{{ route('/') }}" class="forgot-btn">Do not log in to the home page</a>
                            </div>
                        </form>
                    </div>
                </div>
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


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 18:21:15 GMT -->
</html>