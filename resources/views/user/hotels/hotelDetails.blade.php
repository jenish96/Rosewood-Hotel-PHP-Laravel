@extends('user.master.masterpage')

@section('title')
    Rosewood - Hotel Details
@endsection

@section('css')
@endsection

@section('main')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $hotelData->hotel_name }}</h2>
                        <ul>
                            <li><a href="/user/viewHotel">Hotels</a></li>
                            <li><span>{{ $hotelData->hotel_name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- wpo-hotel-details-section-start -->
    <div class="wpo-hotel-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wpo-hotel-details-wrap">
                        <div class="wpo-hotel-details-area">
                            <form class="clearfix">
                                <div class="details-sub">
                                    <span>Hotel</span>
                                    <h2>{{ $hotelData->hotel_name }}</h2>
                                </div>
                                <div class="details-sub">
                                    <span>Type</span>
                                    <h2>{{ $hotelData->hotel_type }}</h2>
                                </div>
                                <div class="details-sub">
                                    <span>Star</span>
                                    <h2>{{ $hotelData->star }} &nbsp;STAR</h2>
                                </div>
                                <div class="details-sub">
                                    <span>City</span>
                                    <h2>{{ $hotelData->city_name }}</h2>
                                </div>
                                {{-- <div class="details-sub">
                                    <h5>Price <span>$250</span> / Night</h5>
                                    <button class="theme-btn" type="submit">Check Availability</button>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-hotel-details-section-end -->
    <!-- wpo-room-area-start -->
    <div class="wpo-room-area-s2 section-padding pt-0">
        <div class="container-fluid">
            <div class="room-wrap room-active owl-carousel">
                @foreach ($mediadata as $row)
                    <div class="room-item">
                        <div class="room-img">
                            <img src="{{ URL::to('/') }}/uploads/media/{{ $row->photo_url }}" width="500" height="371"
                                alt="">
                        </div>
                        {{-- <div class="room-content">
                        <h2><a href="room-single.html">Deluxe Contrast Room</a></h2>
                        <ul>
                            <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                            <li><i class="fi flaticon-bed"></i>2 Bed</li>
                            <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                        </ul>
                        <h3>$200 <span>/ Night</span></h3>
                    </div> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- .room-area-start -->



    <!--Start Room-details area-->
    <div class="Room-details-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">

                    {{-- discription --}}
                    <div class="room-description">
                        <div class="room-title">
                            <h2>Description</h2>
                        </div>
                        <div style="font-size: 18px;">
                            <b><span>Address :</span></b> {{ $hotelData->address }} ,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ $hotelData->landmark }}, &nbsp;{{ $hotelData->city_name }}-{{ $hotelData->pincode }}.

                        </div><br>
                        <div style="font-size: 18px;">
                            <b><span>Website URL :</span></b><a
                                href="{{ $hotelData->website_url }}">{{ $hotelData->website_url }}</a>
                        </div><br>
                        <div style="font-size: 18px;">
                            <b><span>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;{{ $hotelData->email }}
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="room-details-service">
                        <div class="room-title">
                            <h2>Rooms</h2>
                        </div>
                        <div class="row">
                            <div class="room-details-item">
                                <div class="row">
                                    @foreach ($roomData as $row)
                                        <div class="col-md-5 col-sm-5">
                                            <div class="room-d-text">
                                                <div class="room-title">
                                                    <h2><a
                                                            href="/user/roomDetails/{{ $row->room_id }}">{{ $row->room_name }}</a>
                                                    </h2>
                                                </div>
                                                <ul>
                                                    <li><a><b>Room
                                                                No</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $row->room_no }}</a>
                                                    </li>
                                                    <li><a><b>Price</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                                                            ₹{{ $row->room_price }}</a></li>
                                                    <li><a><b>Room
                                                                Type</b>&nbsp;&nbsp;&nbsp;:&nbsp;{{ $row->room_type }}</a>
                                                    </li>
                                                    <li><a><b>Beds</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $row->beds }}</a>
                                                    </li>
                                                    <li><a><b>Capacity</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $row->capacity }}&nbsp;Person</a>
                                                    </li>
                                                    <br>
                                                    {{-- <li> --}}
                                                    <a href="/user/bookingForm/{{ $row->room_id }}" type="button"
                                                        class="theme-btn">Book</a>
                                                    {{-- </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-7">
                                            <div class="room-d-img">
                                                <img src="{{ URL::to('/') }}/uploads/media/{{ $row->photo_url }}"
                                                    width="421" height="430" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map-area">
                        <div id="map" style="width: 100%; height: 400px;"></div>
                    </div>
                </div>


            
            <div class="col-lg-4 col-12">
                <div class="blog-sidebar wpo-single-sidebar room-sidebar">
                    <div class="widget recent-post-widget">
                        <h3>Near Place</h3>
                        @foreach ($placeData as $row)
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ URL::to('/') }}/uploads/place/{{ $row->image1 }}" width="90"
                                            height="80" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a
                                                href="/user/placeDetails/{{ $row->place_id }}">{{ $row->place_name }}</a>
                                        </h4>
                                        <span class="date">{{ Str::limit($row->place_discription, 35) }}</span>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
                <div class="wpo-newsletter-widget widget">
                    <h2>Newsletter</h2>
                    <p>Join 20,000 Sabscribers!</p>
                    {{-- <form class="form" action="/user/addSubcribe" method="post"> --}}
                    <form class="form">
                        @csrf
                        <input type="text" name="email" id="email" placeholder="Email Address">
                        <button id="sub" type="submit">Subscribe</button>
                    </form>
                    <span>By Subscribe up you agree to our <a>Rosewood Hotel</a></span>
                </div>
                {{-- <div class="widget wpo-instagram-widget">
                            <div class="widget-title">
                                <h3>Discover Our Rooms</h3>
                            </div>
                            <ul class="d-flex">
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/1.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/2.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/3.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/4.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/5.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/6.jpg"
                                            alt=""></a></li>
                            </ul>
                        </div> --}}
                <div class="wpo-contact-widget widget">
                    <h2>How We Can <br> Help You!</h2>
                    <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis. </p>
                    <a href="/user/ContactUS">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--End Room-details area-->

    <!-- wpo-service-area-start -->
    <div class="wpo-service-area section-padding section-bg">
        <div class="wpo-service-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-8 col-12">
                        <div class="wpo-service-content">
                            <h2>We are Providing You Our Best Facilities </h2>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. </p>
                            {{-- <a class="theme-btn" href="service.html">Discover More</a> --}}
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="wpo-service-items">
                            @foreach ($hotelAmenitiesData as $row)
                                <div class="wpo-service-item">
                                    {{-- <i class="fi flaticon-food-tray"></i> --}}
                                    <img src="{{ URL::to('/') }}/uploads/amenities/{{ $row->am_icon_pic }}"
                                        width="130px" height="80px" style="border-radius: 3px;" alt="">
                                    <a>{{ $row->am_name }}</a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .service-area-start -->
    <br>

    {{-- map --}}
    {{-- <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card-box ">
            
            <div class="card-head">
                <header>Map</header>
                <div id="map" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
    </div>
</div> --}}
    {{-- end map --}}

    <!-- start wpo-newslatter-section -->
    {{-- <section class="wpo-newslatter-section section-bg section-padding">
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
        </div> <!-- end container --> --}}
    {{-- <div class="n-shape">
            <img src="{{URL::to('/')}}/user/images/nshape1.png" alt="">
        </div>
        <div class="n-shape2">
            <img src="{{URL::to('/')}}/user/images/nshape2.png" alt="">
        </div> --}}
    </section>
    <!-- end wpo-newslatter-section -->
@endsection

@section('js')
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCW3HUu7JenB-D0ghr1p-8wn7FTeq1rmj4" type="text/javascript">
    </script>
    <script type="text/javascript">
        var locations = [

            ['{{ $row->hotel_name }}', {{ $hotelData->lattitude }}, {{ $hotelData->longittude }}],
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: new google.maps.LatLng({{ $hotelData->lattitude }}, {{ $hotelData->longittude }}),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });


        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    </script>

    <script>
        //     var url =window.location();
        //     var id =url.substring(url.lastIndexOf('/') + 1);
        //     $('#sub').click(function(){
        //         window.location = "$url";
        // })
    </script>
@endsection
