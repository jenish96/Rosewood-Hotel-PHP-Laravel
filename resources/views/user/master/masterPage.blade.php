<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/parador/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jan 2022 09:40:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ URL::to('/') }}/user/images/favicon.png">
    <title> @yield('title')</title>
    <link href="{{ URL::to('/') }}/user/css/themify-icons.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/flaticon.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/animate.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/owl.theme.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/slick.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/slick-theme.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/swiper.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/style.css" rel="stylesheet">
    @yield('css')
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    {{-- <img src="{{URL::to('/')}}/user/images/logo.png" alt=""> --}}
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="wpo-site-header wpo-header-style-3">
                {{-- <div class="topbar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-lg-7 col-md-8 col-sm-12 col-12">
                                <div class="contact-intro">
                                    <ul>
                                        <li><i class="fi flaticon-email"></i> hotelrosewood3@gmail.com</li>
                                        <li><i class="fi flaticon-phone-call"></i> +91 8987769523</li>
                                        <li><i class="fi ti-location-pin"></i> Surat – 2022 Firs Avenue</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-5 col-md-4 col-sm-12 col-12">
                                <div class="contact-info">
                                    <ul>
                                        <li class="language">
                                            <select name="language" id="language">
                                                <option value="">English</option>
                                                <option value="">Arabic</option>
                                                <option value="">France</option>
                                            </select>
                                        </li>
                                        <li><a href="#"><i class="fi flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#"><i class="fi flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="fi flaticon-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fi flaticon-instagram"></i></a></li>
                                        <li><a href="#"><i class="fi flaticon-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fi flaticon-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end topbar --> --}}
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="/user/home">
                                        <span style="font-size:28px;"><strong><img src="{{ URL::to('/') }}/user/images/favicon.png" >&nbsp;<span style="font-size: 40px; margin-top: 3px;">Rose</span><span style="color: red;font-size: 40px; margin-top: 3px;">wood</span></strong></span>
                                        {{-- <img src="{{ URL::to('/') }}/user/images/favicon.png" alt=""><b><span style="font-size:31px;">Rose</span><span style="color:rgb(250, 10, 10) ;font-size:31px;">wood</span></b> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a href="/user/home">Home</a>

                                        </li>
                                        <li><a class="active" href="/user/about">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="/user/viewHotel">Hotels</a>
                                            
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/user/viewPlace">Place</a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="destination.html">Destinition</a></li>
                                                <li><a href="destination-single.html">Destinition single</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/user/articles">Articles</a>
                                            
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/user/offer">Offer</a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="service-s2.html">Service Style2</a></li>
                                                <li><a href="service-single.html">Service Single</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="search.html">Search Result</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/user/news">News</a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/user/map">Map</a>
                                        </li>
                                        <li><a href="/user/ContactUS">Contact Us</a></li>
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-1 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i
                                                    class="fi flaticon-search"></i></button>
                                            <div class="header-search-form">
                                                <form method="post" action="/user/viewHotelSearch">
                                                    @csrf
                                                    <div>
                                                        <input type="text" name="hotelname" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i
                                                                class="fi flaticon-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart">
                                     
                                        <button class="cart-toggle-btn"> <i class="fi flaticon-user"></i></button>
                                      
                                        <div class="mini-cart-content">
                                            @if(Session::get("isUserLogin"))
                                            {{-- <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <h2>name</h2>
                                                </div>
                                                <div class="col-lg-6 col-md-6"> --}}
                                                    <button class="mini-cart-close"><i
                                                            class="ti-close"></i></button>
                                                {{-- </div> --}}
                                                <div class="mini-cart-items">
                                                    <div class="mini-cart-item clearfix">
                                                        <div class="mini-cart-item-image">
                                                            <a href="shop.html"><img src="{{ URL::to('/') }}/uploads/admin/admin.jpg" alt=""></a>
                                                        </div>
                                                        <div class="mini-cart-item-des">
                                                            <a>{{Session::get('username')}}</a>
                                                            {{-- <span class="mini-cart-item-price">$20.15 x 1</span> --}}
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mini-cart-item clearfix">
                                                        {{-- <div class="mini-cart-item-image"> --}}
                                                        <div class="mini-cart-item-des">
                                                            <a href="/user/myAccount">My Account</a>
                                                        </div>
                                                        {{-- </div> --}}

                                                    </div>
                                                    <div class="mini-cart-item clearfix">

                                                        <div class="mini-cart-item-des">
                                                            <a href="/user/viewBooking">My Booking</a>
                                                        </div>
                                                    </div>
                                                    {{-- @if(Session::get('user_id'))
                                                    <div class="mini-cart-item clearfix">
                                                        <div class="mini-cart-item-des">
                                                            <a href="/user/myArticle">My Article</a>
                                                        </div>
                                                    </div>
                                                    @endif --}}
                                                    <div class="mini-cart-item clearfix">
                                                        <div class="mini-cart-item-des">
                                                            <a href="/user/myCoins">Coins</a>
                                                        </div>
                                                    </div>
                                                    <div class="mini-cart-item clearfix">

                                                        <div class="mini-cart-item-des">
                                                            <a href="/user/myWallet">Wallet</a>
                                                        </div>
                                                    </div>
                                                    <div class="mini-cart-item clearfix">

                                                        <div class="mini-cart-item-des">
                                                            <a href="/user/myMembership">Membership</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mini-cart-action clearfix">

                                                    <div class="mini-btn">

                                                        <a href="/userlogout" class="view-cart-btn">Log Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="mini-cart-content">
                                                <div class="mini-cart-items">
                                            <div class="mini-cart-item clearfix">

                                                <div class="mini-btn">

                                                    <a href="/user/login" class="view-cart-btn">Login / Register</a>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            @endif
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->
        <!-- start of breadcumb-section -->
        {{-- <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>About Us</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>About</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        @yield('main')
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="{{ URL::to('/') }}/user/images/favicon.png" alt="blog"><span><h3>Rosewood</h3>
                                        
                                    </span>
                                </div>
                                <p>Management consulting includes a broad range of activities, and the many firms and
                                    their members often define these practices.</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget s1">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <ul>
                                    <li><a>Delicious Food</a></li>
                                    <li><a>Parking Area</a></li>
                                    <li><a>Free Wifi</a></li>
                                    <li><a>Swimming Pool</a></li>
                                    <li><a>Spa Salon</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Important Link</h3>
                                </div>
                                <ul>
                                    <li><a href="/user/viewHotel">Hotels</a></li>
                                    <li><a href="/user/viewPlace">Populer Places</a></li>
                                    <li><a href="/user/offer">Offers</a></li>
                                    <li><a href="/user/articles">Our Articles</a></li>
                                    {{-- <li><a href="/user/offer">Offers</a></li> --}}
                                    <li><a href="/user/feedback">Feedback</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi flaticon-placeholder"></i>Surat ,India</li>
                                        <li><i class="fi flaticon-phone-call"></i>+91 800 4563 789</li>
                                        <li><i class="fi flaticon-send"></i>hotelrosewood3@gmail.com</li>
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> Copyright &copy; 2022 Hotels by <a
                                    href="/user/home">Rosewood</a>.
                                All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ URL::to('/') }}/user/js/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/user/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="{{ URL::to('/') }}/user/js/modernizr.custom.js"></script>
    <script src="{{ URL::to('/') }}/user/js/jquery.dlmenu.js"></script>
    <script src="{{ URL::to('/') }}/user/js/jquery-plugin-collection.js"></script>
    @yield('js')
    <!-- Custom script for this template -->
    <script src="{{ URL::to('/') }}/user/js/script.js"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/parador/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jan 2022 09:40:54 GMT -->

</html>
