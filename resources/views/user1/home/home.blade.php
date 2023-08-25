@extends('user.master.masterpage')

@section('title')
Rosewood - Home
@endsection

@section('css')
    
@endsection

@section('main')
    <!-- start of hero -->
    <section class="wpo-hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{URL::to('/')}}/user/images/slider/slide-1.jpg">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="container-fluid">
                            <div class="slide-content">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Find Your Perfect Place To Stay</h2>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="room.html" class="theme-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{URL::to('/')}}/user/images/slider/slide-2.jpg">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="container-fluid">
                            <div class="slide-content">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Find Your Perfect Place To Stay</h2>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="room.html" class="theme-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{URL::to('/')}}/user/images/slider/slide-3.jpg">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="container-fluid">
                            <div class="slide-content">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Find Your Perfect Place To Stay</h2>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="room.html" class="theme-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- end of wpo-hero-slide-section-->

    <!-- serch-area-start -->
    <div class="wpo-select-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wpo-select-wrap">
                        <div class="wpo-select-area">
                            <form action="https://wpocean.com/html/tf/parador/search.html" class="clearfix">
                                <div class="select-sub">
                                    <!-- Datepicker as text field -->
                                    <div class="input-group date">
                                        <input autocomplete="off" type="text" id="datepicker" placeholder="Check in">
                                        <i class="fi flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="select-sub">
                                    <!-- Datepicker as text field -->
                                    <div class="input-group date">
                                        <input autocomplete="off" type="text" id="datepicker2" placeholder="Check Out">
                                        <i class="fi flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="select-sub">
                                    <div class="form-group tourist-group">
                                        <div class="tourist-group-wrap">
                                            <div class="tourist-inner">
                                                <i class="fi flaticon-user"></i>
                                                <ul>
                                                    <li><input disabled type="text" id="adults" value="0">Adults
                                                    </li>
                                                    <li><input disabled type="text" id="children" value="0">
                                                        Children</li>
                                                    <li><input disabled type="text" id="rooms" value="0"> Room</li>
                                                </ul>
                                                <i class="ti-angle-down"></i>
                                            </div>
                                            <div class="tourist-dropdown ">
                                                <div class="tourist-item">
                                                    <span>Adults</span>
                                                    <div class="tourist-item-group">
                                                        <button type="button" id="adults_dec">-</button>
                                                        <input disabled id="adults_val" value="0" type="text">
                                                        <button type="button" id="adults_inc">+</button>
                                                    </div>
                                                </div>
                                                <div class="tourist-item">
                                                    <span>Children</span>
                                                    <div class="tourist-item-group">
                                                        <button type="button" id="children_dec">-</button>
                                                        <input disabled id="children_val" value="0" type="text">
                                                        <button type="button" id="children_inc">+</button>
                                                    </div>
                                                </div>
                                                <div class="tourist-item">
                                                    <span>Rooms</span>
                                                    <div class="tourist-item-group">
                                                        <button type="button" id="rooms_dec">-</button>
                                                        <input disabled id="rooms_val" value="0" type="text">
                                                        <button type="button" id="rooms_inc">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="select-sub">
                                    <button class="theme-btn" type="submit">Check Availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- serch-area-end -->
    <!-- wpo-room-area-start -->
    <div class="wpo-room-area section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-md-8">
                    <div class="wpo-section-title-s2">
                        <h2>Our Most Populer room</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a page.</p>
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
    </div>
    <!-- .room-area-start -->
    <!-- start of wpo-about-section -->
    <section class="wpo-about-section-s2 section-padding">
        <div class="container-fluid">
            <div class="wpo-about-section-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12 offset-xl-6 offset-lg-4 offset-md-2">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                <span>Exclusive Offer</span>
                                <h2>Enjoy Your Dream Vacation In switzerland</h2>
                            </div>
                            <div class="wpo-about-content-inner">
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
                                    <a href="room.html" class="theme-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-about-section -->
    <!-- start wpo-fun-fact-section -->
    <section class="wpo-fun-fact-section-s2 section-padding">
        <div class="container-fluid">
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
    </section>
    <!-- end wpo-fun-fact-section -->
    <!-- wpo-destination-area-start -->
    <div class="wpo-destination-area">
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
    </div>
    <!-- .Destination-area-start -->
    
    <!-- wpo-service-area-start -->
    <div class="wpo-service-area-s2">
        <div class="wpo-service-wrap">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-12">
                        <div class="wpo-service-items wpo-service-active owl-carousel">
                            <div class="wpo-service-item">
                                <div class="wpo-service-img">
                                    <img src="{{URL::to('/')}}/user/images/service/img-1.jpg" alt="">
                                </div> 
                                <div class="wpo-service-text">
                                    <i class="fi flaticon-food-tray"></i>
                                    <a href="service.html">Delicious Food</a>
                                </div>
                            </div>
                            <div class="wpo-service-item">
                                <div class="wpo-service-img">
                                    <img src="{{URL::to('/')}}/user/images/service/img-2.jpg" alt="">
                                </div> 
                                <div class="wpo-service-text">
                                    <i class="fi flaticon-parking"></i>
                                    <a href="service.html">Parking Area</a>
                                </div>
                            </div>
                            <div class="wpo-service-item">
                                <div class="wpo-service-img">
                                    <img src="{{URL::to('/')}}/user/images/service/img-3.jpg" alt="">
                                </div> 
                                <div class="wpo-service-text">
                                    <i class="fi flaticon-swimmer"></i>
                                    <a href="service.html">Swimming Pool</a>
                                </div>
                            </div>
                            <div class="wpo-service-item">
                                <div class="wpo-service-img">
                                    <img src="{{URL::to('/')}}/user/images/service/img-4.jpg" alt="">
                                </div> 
                                <div class="wpo-service-text">
                                    <i class="fi flaticon-mortar"></i>
                                    <a href="service.html">Spa Salon</a>
                                </div>
                            </div>
                            <div class="wpo-service-item">
                                <div class="wpo-service-img">
                                    <img src="{{URL::to('/')}}/user/images/service/img-5.jpg" alt="">
                                </div> 
                                <div class="wpo-service-text">
                                    <i class="fi flaticon-dumbell"></i>
                                    <a href="service.html">Exercise Space</a>
                                </div>
                            </div>
                            <div class="wpo-service-item">
                                <div class="wpo-service-img">
                                    <img src="{{URL::to('/')}}/user/images/service/img-6.jpg" alt="">
                                </div> 
                                <div class="wpo-service-text">
                                    <i class="fi flaticon-wifi"></i>
                                    <a href="service.html">Free Wifi</a>
                                </div>
                            </div>
                            <div class="wpo-service-item">
                                <div class="wpo-service-img">
                                    <img src="{{URL::to('/')}}/user/images/service/img-7.jpg" alt="">
                                </div> 
                                <div class="wpo-service-text">
                                    <i class="fi flaticon-cappuccino"></i>
                                    <a href="service.html">Breakfast</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .service-area-start -->

    <!-- start wpo-pricing-section -->
    <section class="wpo-pricing-section section-padding">
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
    </section>
    <!-- start wpo-pricing-section -->
    <!-- wpo-testimonial-area start -->
    <div class="wpo-testimonial-area">
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
    </div>
    <!-- wpo-testimonial-area end -->
    <!-- start wpo-blog-section -->
    <section class="wpo-blog-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="wpo-section-title-s2">
                        <h2>Latest News</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a page.</p>
                    </div>
                </div>
            </div>
            <div class="wpo-blog-items">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="{{URL::to('/')}}/user/images/blog/img-1.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <div class="wpo-blog-content-top">
                                    <div class="b-top">
                                        <div class="b-top-inner">
                                            <h2><a href="blog.html">Things You Must Need to See While You’re In
                                                    Dubai</a></h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sint
                                                magni harum nihil voluptates, recusandae.</p>
                                        </div>
                                    </div>
                                    <a class="b-btn" href="blog.html">Read More..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="{{URL::to('/')}}/user/images/blog/img-2.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <div class="wpo-blog-content-top">
                                    <div class="b-top">
                                        <div class="b-top-inner">
                                            <h2><a href="blog.html">Mistakes Every Couple Makes When They Travel
                                                    Together</a></h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sint
                                                magni harum nihil voluptates, recusandae.</p>
                                        </div>
                                    </div>
                                    <a class="b-btn" href="blog.html">Read More..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="{{URL::to('/')}}/user/images/blog/img-3.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <div class="wpo-blog-content-top">
                                    <div class="b-top">
                                        <div class="b-top-inner">
                                            <h2><a href="blog.html">Remember This 10 Things Before Booking
                                                    Hotel.</a></h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sint
                                                magni harum nihil voluptates, recusandae.</p>
                                        </div>
                                    </div>
                                    <a class="b-btn" href="blog.html">Read More..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-section -->
    <!-- start wpo-newslatter-section -->
    <section class="wpo-newslatter-section section-padding">
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
                        <input type="email" class="form-control" placeholder="Enter Your Email Address..." required>
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
    </section>
    <!-- end wpo-newslatter-section -->
@endsection

@section('js')
    
@endsection