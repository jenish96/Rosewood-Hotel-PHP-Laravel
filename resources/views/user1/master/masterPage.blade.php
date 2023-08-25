<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/parador/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jan 2022 09:40:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/user/images/favicon.png">
    <title> @yield('title')</title>
    <link href="{{URL::to('/')}}/user/css/themify-icons.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/flaticon.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/animate.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/owl.carousel.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/owl.theme.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/slick.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/slick-theme.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/swiper.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/owl.transitions.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/user/css/style.css" rel="stylesheet">
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
                    <img src="{{URL::to('/')}}/user/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="wpo-site-header wpo-header-style-3">
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
                                    <a class="navbar-brand" href="index.html">
                                        <img src="{{URL::to('/')}}/user/images/logo2.png"
                                                alt="">
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
                                            {{-- <ul class="sub-menu">
                                                <li><a href="/user/viewHotel">Hotel's Details</a></li>
                                                <li><a href="/user/roomDetails">Room single</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Place</a>
                                            <ul class="sub-menu">
                                                <li><a href="destination.html">Destinition</a></li>
                                                <li><a href="destination-single.html">Destinition single</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Articles</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.html">Blog details right sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog details left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.html">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Offer</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="service-s2.html">Service Style2</a></li>
                                                <li><a href="service-single.html">Service Single</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="search.html">Search Result</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">News</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
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
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i
                                                                class="fi flaticon-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart">
                                        <button class="cart-toggle-btn"> <i class="fi flaticon-shopping-cart"></i> <span
                                                class="cart-count">2</span></button>
                                        <div class="mini-cart-content">
                                            <button class="mini-cart-close"><i class="ti-close"></i></button>
                                            <div class="mini-cart-items">
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img
                                                                src="{{URL::to('/')}}/user/images/shop/mini-cart/img-1.jpg" alt></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">My Account</a>
                                                        <span class="mini-cart-item-price">$20.15 x 1</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img
                                                                src="{{URL::to('/')}}/user/images/shop/mini-cart/img-2.jpg" alt></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Senec metus convallis</a>
                                                        <span class="mini-cart-item-price">$13.25 x 2</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-action clearfix">
                                                <span class="mini-checkout-price">Subtotal: <span>$215.14</span></span>
                                                <div class="mini-btn">
                                                    <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                    <a href="cart.html" class="view-cart-btn">View Cart</a>
                                                </div>
                                            </div>
                                        </div>
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
                                <li><a href="/">Home</a></li>
                                <li><span>About</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        @yield('main')
        <!-- end of wpo-breadcumb-section-->
        <!-- start of wpo-about-section -->
        {{-- <section class="wpo-about-section section-padding">
            <div class="container">
                <div class="wpo-about-section-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-img">
                                <img src="{{URL::to('/')}}/user/images/about.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-content">
                                <div class="about-title">
                                    <span>Exclusive Offer</span>
                                    <h2>Enjoy Your Dream Vacation In switzerland</h2>
                                </div>
                                <div class="wpo-about-content-inner">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure.</p>
                                    <div class="about-info-wrap">
                                        <div class="about-info-left">
                                            <p>2 Days / 3 Night</p>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                            </ul>
                                        </div>
                                        <div class="about-info-right">
                                            <p>Only</p>
                                            <h3>$2500</h3>
                                        </div>
                                    </div>
                                    <a href="room.html" class="theme-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end of wpo-about-section -->
        <!-- wpo-destination-area-start -->
        {{-- <div class="wpo-destination-area">
            <div class="container">
                <div class="wpo-section-title">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-md-8">
                            <div class="wpo-section-title-left">
                                <h2>Our Most Populer Destination</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-4">
                            <div class="btns">
                                <a href="destination.html" tabindex="0">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="destination-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="destination-item">
                                <div class="destination-img">
                                    <img src="{{URL::to('/')}}/user/images/destination/1.jpg" alt="">
                                </div>
                                <div class="destination-content">
                                    <span class="sub">Vietnam Sea Beach</span>
                                    <h2><a href="destination-single.html">Luxery Hotel and Resort</a></h2>
                                    <div class="destination-bottom">
                                        <p>$200 Per Night</p>
                                        <div class="destination-bottom-right">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                            </ul>
                                            <small>4.5</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="destination-item">
                                <div class="destination-img">
                                    <img src="{{URL::to('/')}}/user/images/destination/2.jpg" alt="">
                                </div>
                                <div class="destination-content">
                                    <span class="sub">Paris, France</span>
                                    <h2><a href="destination-single.html">The Paris Grand Palace</a></h2>
                                    <div class="destination-bottom">
                                        <p>$250 Per Night</p>
                                        <div class="destination-bottom-right">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                            </ul>
                                            <small>4.5</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="destination-item">
                                <div class="destination-img">
                                    <img src="{{URL::to('/')}}/user/images/destination/3.jpg" alt="">
                                </div>
                                <div class="destination-content">
                                    <span class="sub">Vaadhoo, Maldives</span>
                                    <h2><a href="destination-single.html">Sea Of Stars Resident</a></h2>
                                    <div class="destination-bottom">
                                        <p>$200 Per Night</p>
                                        <div class="destination-bottom-right">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                            </ul>
                                            <small>4.5</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- .Destination-area-start -->
        <!-- start wpo-fun-fact-section -->
        {{-- <section class="wpo-fun-fact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="302">00</span>+</h3>
                                    <p>Room & Suites</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="25">00</span></h3>
                                    <p>Restaurant</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="510">00</span>+</h3>
                                    <p>Exceptional Food</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="65">00</span></h3>
                                    <p>Destination</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section> --}}
        <!-- end wpo-fun-fact-section -->
        <!-- wpo-room-area-start -->
        {{-- <div class="wpo-room-area section-padding">
            <div class="container">
                <div class="wpo-section-title">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-md-8">
                            <div class="wpo-section-title-left">
                                <h2>Our Most Populer room</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-4">
                            <div class="btns">
                                <a href="room.html" tabindex="0">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="room-item">
                                <div class="room-img">
                                    <img src="{{URL::to('/')}}/user/images/room/1.jpg" alt="">
                                </div>
                                <div class="room-content">
                                    <h2><a href="room.html">Deluxe Contrast Room</a></h2>
                                    <ul>
                                        <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                                        <li><i class="fi flaticon-bed"></i>2 Bed</li>
                                        <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                                    </ul>
                                    <h3>$200 <span>/ Night</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="room-item">
                                <div class="room-img">
                                    <img src="{{URL::to('/')}}/user/images/room/2.jpg" alt="">
                                </div>
                                <div class="room-content">
                                    <h2><a href="room.html">Luxery Twin Room</a></h2>
                                    <ul>
                                        <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                                        <li><i class="fi flaticon-bed"></i>2 Bed</li>
                                        <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                                    </ul>
                                    <h3>$250 <span>/ Night</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="room-item">
                                <div class="room-img">
                                    <img src="{{URL::to('/')}}/user/images/room/3.jpg" alt="">
                                </div>
                                <div class="room-content">
                                    <h2><a href="room.html">Single Contrast Room</a></h2>
                                    <ul>
                                        <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                                        <li><i class="fi flaticon-bed"></i>2 Bed</li>
                                        <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                                    </ul>
                                    <h3>$280 <span>/ Night</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- .room-area-start -->
        <!-- wpo-service-area-start -->
        {{-- <div class="wpo-service-area section-padding section-bg">
            <div class="wpo-service-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-8 col-12">
                            <div class="wpo-service-content">
                                <h2>We are Providing You Our Best Facilities </h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                                <a class="theme-btn" href="service.html">Discover More</a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-12">
                            <div class="wpo-service-items">
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-food-tray"></i>
                                    <a href="service.html">Delicious Food</a>
                                </div>
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-parking"></i>
                                    <a href="service.html">Parking Area</a>
                                </div>
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-swimmer"></i>
                                    <a href="service.html">Swimming Pool</a>
                                </div>
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-mortar"></i>
                                    <a href="service.html">Spa Salon</a>
                                </div>
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-dumbell"></i>
                                    <a href="service.html">Exercise Space</a>
                                </div>
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-wifi"></i>
                                    <a href="service.html">Free Wifi</a>
                                </div>
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-cappuccino"></i>
                                    <a href="service.html">Breakfast</a>
                                </div>
                                <div class="wpo-service-item">
                                    <i class="fi flaticon-more"></i>
                                    <a href="service.html">Other Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- .service-area-start -->
        <!-- wpo-testimonial-area start -->
        {{-- <div class="wpo-testimonial-area pt-120">
            <div class="container">
                <div class="wpo-testimonial-wrap">
                    <div class="testimonial-slider owl-carousel">
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-img">
                                <img src="{{URL::to('/')}}/user/images/testimonial/img-1.jpg" alt="">
                            </div>
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adiping elit, do eiusmod tempor incididunt ut
                                    labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo maepac cenas.</p>
                                <h2>Elezabeth Marvel</h2>
                                <span>Photographer</span>
                            </div>
                        </div>
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-img">
                                <img src="{{URL::to('/')}}/user/images/testimonial/img-2.jpg" alt="">
                            </div>
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adiping elit, do eiusmod tempor incididunt ut
                                    labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo maepac cenas.</p>
                                <h2>Marry Jenefer</h2>
                                <span>CEO Of Golden Bravo</span>
                            </div>
                        </div>
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-img">
                                <img src="{{URL::to('/')}}/user/images/testimonial/img-3.jpg" alt="">
                            </div>
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adiping elit, do eiusmod tempor incididunt ut
                                    labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo maepac cenas.</p>
                                <h2>William Robert</h2>
                                <span>CEO Of Bexima</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- wpo-testimonial-area end -->
        <!-- start wpo-pricing-section -->
        {{-- <section class="wpo-pricing-section section-bg section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="wpo-section-title-s2">
                            <h2>Our Awesome Packages</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-pricing-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-img">
                                        <img src="{{URL::to('/')}}/user/images/pricing/1.jpg" alt="">
                                    </div>
                                    <div class="wpo-pricing-text">
                                        <h4>Classic Room</h4>
                                        <h2>$250<span>/Per Night</span></h2>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Altime Free Wifi</li>
                                            <li>2 People Breakfast</li>
                                            <li>1 Bed Room</li>
                                            <li> 2 People in Room</li>
                                        </ul>
                                        <a class="theme-btn" href="pricing.html">Book Rooms</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-img">
                                        <img src="{{URL::to('/')}}/user/images/pricing/2.jpg" alt="">
                                    </div>
                                    <div class="wpo-pricing-text">
                                        <h4>Modern Room</h4>
                                        <h2>$350<span>/Per Night</span></h2>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Altime Free Wifi</li>
                                            <li>2 People Breakfast</li>
                                            <li>1 Bed Room</li>
                                            <li> 2 People in Room</li>
                                        </ul>
                                        <a class="theme-btn" href="pricing.html">Book Rooms</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-img">
                                        <img src="{{URL::to('/')}}/user/images/pricing/3.jpg" alt="">
                                    </div>
                                    <div class="wpo-pricing-text">
                                        <h4>Luxery Room</h4>
                                        <h2>$400<span>/Per Night</span></h2>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Altime Free Wifi</li>
                                            <li>2 People Breakfast</li>
                                            <li>1 Bed Room</li>
                                            <li> 2 People in Room</li>
                                        </ul>
                                        <a class="theme-btn" href="pricing.html">Book Rooms</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- start wpo-pricing-section -->
        <!-- start wpo-newslatter-section -->
        {{-- <section class="wpo-newslatter-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="wpo-section-title-s2">
                            <h2>Subscribe & Get Special Discount!</h2>
                            <p>Don’t Wanna Miss Somethings? Subscribe Right Now And Get The Special 
                                Discount And Monthly Newsletter.</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-newsletter">
                    <div class="newsletter-form">
                        <form>
                            <input type="email" class="form-control"
                                placeholder="Enter Your Email Address..." required>
                                <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="n-shape">
                <img src="{{URL::to('/')}}/user/images/nshape1.png" alt="">
            </div>
            <div class="n-shape2">
                <img src="{{URL::to('/')}}/user/images/nshape2.png" alt="">
            </div>
        </section> --}}
        <!-- end wpo-newslatter-section -->
       <!-- start of wpo-site-footer-section -->
       <footer class="wpo-site-footer">
        <div class="wpo-upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="widget about-widget">
                            <div class="logo widget-title">
                                <img src="{{URL::to('/')}}/user/images/logo.png" alt="blog">
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
                                <li><a href="service-single.html">Delicious Food</a></li>
                                <li><a href="service-single.html">Parking Area</a></li>
                                <li><a href="service-single.html">Free Wifi</a></li>
                                <li><a href="service-single.html">Swimming Pool</a></li>
                                <li><a href="service-single.html">Spa Salon</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>Important Link</h3>
                            </div>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="destination.html">Populer Destinition</a></li>
                                <li><a href="room.html">Awesome Rooms</a></li>
                                <li><a href="service.html">Our Services</a></li>
                                <li><a href="pricing.html">Pricing Plan</a></li>
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
                                    <li><i class="fi flaticon-placeholder"></i>7 Green Lake Street Crawfordsville, IN
                                        47933</li>
                                    <li><i class="fi flaticon-phone-call"></i>+1 800 123 456 789</li>
                                    <li><i class="fi flaticon-send"></i>parador@gmail.com</li>
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
                        <p class="copyright"> Copyright &copy; 2021 Parador by <a href="index.html">wpOceans</a>.
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
    <script src="{{URL::to('/')}}/user/js/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/user/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="{{URL::to('/')}}/user/js/modernizr.custom.js"></script>
    <script src="{{URL::to('/')}}/user/js/jquery.dlmenu.js"></script>
    <script src="{{URL::to('/')}}/user/js/jquery-plugin-collection.js"></script>
    @yield('js')
    <!-- Custom script for this template -->
    <script src="{{URL::to('/')}}/user/js/script.js"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/parador/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jan 2022 09:40:54 GMT -->
</html>