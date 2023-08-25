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
                    <div class="slide-inner slide-bg-image" data-background="{{ URL::to('/') }}/user/images/ho1.jpg">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="container-fluid">
                            <div class="slide-content">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Find Your Perfect Place To Stay</h2>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="/user/viewHotel" class="theme-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ URL::to('/') }}/user/images/ho2.jpg">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="container-fluid">
                            <div class="slide-content">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Find Your Perfect Place To Stay</h2>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="/user/viewHotel" class="theme-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ URL::to('/') }}/user/images/ho3.jpg">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="container-fluid">
                            <div class="slide-content">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Find Your Perfect Place To Stay</h2>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="/user/viewHotel" class="theme-btn">Book Now</a>
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
                            <form action="/user/room" method="get" class="clearfix">
                                <div class="select-sub">
                                    <!-- Datepicker as text field -->
                                    <div class="input-group date">
                                        <input autocomplete="off" type="text" type="date" id="datepicker" name="checkIn"
                                            placeholder="Check in">
                                        <i class="fi flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="select-sub">
                                    <!-- Datepicker as text field -->
                                    <div class="input-group date">
                                        <input autocomplete="off" type="text" type="date" id="datepicker2" name="checkOut"
                                            placeholder="Check Out">
                                        <i class="fi flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="select-sub">
                                    <!-- Datepicker as text field -->
                                    <div class="form-group">
                                        {{-- <label>City</label> --}}
                                        <select class="form-control" name="txtcity">
                                            <option value="">Select City ...</option>
                                            @foreach ($cityData as $row)
                                                <option value="{{ $row->city_id }}">{{ $row->city_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="select-sub">
                                    <div class="form-group tourist-group">
                                        <div class="tourist-group-wrap">
                                            <div class="tourist-inner">
                                                <i class="fi flaticon-search"></i>
                                                <ul>
                                                    {{-- <div class="tourist-dropdown "> --}}

                                {{-- <select class="form-control" name="txtcity">
                                                            <option value="">Select City ...</option>
                                                            @foreach ($cityData as $row)
                                                            <option value="{{ $row->city_id }}">{{ $row->city_name }}</option>
                                                            @endforeach
                                                        </select> --}}
                                {{-- </div> --}}
                                {{-- </ul> --}}
                                {{-- <i class="ti-angle-down"></i>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> --}}
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
            <div class="wpo-section-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-md-8">
                        <div class="wpo-section-title-left">
                            <h2>Our Most Populer Hotels</h2>
                            <p>There are many populer hotels. it following will be helpful to you. </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4">
                        <div class="btns">
                            <a href="/user/viewHotel" tabindex="0">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="room-wrap">

                <div class="row">
                    @foreach ($hotelData as $row)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="room-item">
                                <div class="room-img">
                                    <img src="{{ URL::to('/') }}/uploads/media/{{$row->photo_url}}" width="358px"
                                        height="400px" alt="">
                                </div>
                                <div class="room-content">
                                    <h2><a href="/user/hotelDetails/{{ $row->hotel_id}}">{{ $row->hotel_name}}</a></h2>
                                    <ul>
                                        <li><i class="fi flaticon-expand-arrows"></i>{{ $row->city_name }}</li>
                                        <li><i class="fi flaticon-bed"></i>{{ $row->hotel_type }}</li>
                                        {{-- <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li> --}}
                                    </ul>
                                    {{-- <h3>₹{{$row->room_price}} <span>/ Night</span></h3> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                        @foreach ($offerData as $row)
                            <div class="wpo-about-content">
                                <div class="about-title">
                                    <span>Exclusive Offer</span>
                                    <br>
                                    <h2>{{ $row->title }}</h2>
                                </div>
                                <div class="wpo-about-content-inner">
                                    <div class="about-info-wrap">
                                        <div class="about-info-left">
                                            <p>Code</p>
                                            <span>{{ $row->coupon_code }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            {{-- <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                        </ul> --}}
                                        </div>
                                        <div class="about-info-right">
                                            <p>On</p>
                                            <h3>{{ $row->discount }}Rs. Discount</h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="/user/viewHotel" class="theme-btn">Book Now</a>
                            </div>
                        @endforeach
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
                                <h3><span class="odometer" data-count="{{ $total_room }}">00</span>+</h3>
                                <p>Room & Suites</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="{{ $total_hotel }}">00</span></h3>
                                <p>Hotels</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="{{ $total_booking }}">00</span>+</h3>
                                <p>Booking</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="{{ $total_place }}">00</span></h3>
                                <p>Place</p>
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
                            <h2>Our Most Populer Place</h2>
                            <p>There are a lot of wonderful places you will visit. </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4">
                        <div class="btns">
                            <a href="/user/viewPlace" tabindex="0">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="destination-wrap">
                <div class="row">
                    @foreach ($placeData as $row)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="destination-item">
                                <div class="destination-img">
                                    <img src="{{ URL::to('/') }}/uploads/place/{{ $row->image1 }}" width="358px"
                                        height="272px" alt="">
                                </div>
                                <div class="destination-content">
                                    <h2><a href="#">{{ $row->place_name }}</a></h2>
                                    <div class="destination-bottom">
                                        <p>{{ $row->city_name }}</p>
                                        <div class="destination-bottom-right">
                                            <ul>
                                                {{ $row->state_name }}
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            @foreach ($amenitiesData as $row)
                                <div class="wpo-service-item">
                                    <div class="wpo-service-img">
                                        <img src="{{ URL::to('/') }}/uploads/amenities/{{ $row->am_icon_pic }}"
                                            width="337px" height="316px" alt="">
                                    </div>
                                    <div class="wpo-service-text" style="padding: 68px 14px;">
                                        {{-- <i class="fi flaticon-food-tray"></i> --}}
                                        <a><h4>{{ $row->am_name }}</h4></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br><br><br>
    <!-- wpo-testimonial-area start -->
    <div class="wpo-testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="wpo-section-title-s2">
                        <h2>Our Populer Articles</h2>
                        <p>We have some interesting articles about place post by users. </p>
                    </div>
                </div>
            </div>
            <div class="wpo-testimonial-wrap">
                <div class="testimonial-slider owl-carousel">
                    @foreach ($articlesData as $row)
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-img">
                                <img src="{{ URL::to('/') }}/uploads/articles/{{ $row->image1 }}" width="335px"
                                    height="335px" alt="">
                            </div>
                            <div class="wpo-testimonial-content">
                                <p>{{ Str::limit($row->description, 200) }}<br>
                                    <a href="{{ $row->ref_link }}" class="read-more">Read More...</a>
                                </p>
                                <h2>{{ $row->title }}</h2>
                                <span>Auther:&nbsp;{{ $row->auther }}</span>
                            </div>
                        </div>
                    @endforeach
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
                        <p>Here some latest news will be see.Its News about all our hotel related.</p>
                    </div>
                </div>
            </div>
            <div class="wpo-blog-items">
                <div class="row">
                    @foreach ($newsData as $row)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="{{ URL::to('/') }}/uploads/news/{{ $row->news_img }}" width="358px"
                                        height="421px" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <div class="wpo-blog-content-top">
                                        <div class="b-top">
                                            <h2><a href="/user/news">{{ $row->title }}</a></h2>
                                            <div class="b-top-inner">
                                                <p>{{ Str::limit($row->description, 100) }}
                                                    {{-- <p>{{$row->description}} --}}
                                                </p>
                                            </div>
                                        </div>
                                        <a class="b-btn" href="/user/news">Read More..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
                    <form action="/user/addSubcribe" method="POST">
                        @csrf
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Enter Your Email Address..." required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
        <div class="n-shape">
            <img src="{{ URL::to('/') }}/user/images/nshape1.png" alt="">
        </div>
        <div class="n-shape2">
            <img src="{{ URL::to('/') }}/user/images/nshape2.png" alt="">
        </div>
    </section>
    <!-- end wpo-newslatter-section -->
@endsection

@section('js')
@endsection
