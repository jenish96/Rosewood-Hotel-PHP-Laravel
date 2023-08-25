@extends('user.master.masterpage')

@section('title')
Rosewood - Amenities
@endsection

@section('css')
  
@endsection

@section('main')
<div class="preloader">
    <div class="vertical-centered-box">
        <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
            <img src="assets/images/preloader.png" alt="">
        </div>
    </div>
</div>
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>{{$amenitiesData->am_name}}</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>{{$amenitiesData->am_name}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="service-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-12">
                <div class="service-single-content">
                    <div class="service-single-img">
                        <img src="{{URL::to('/')}}/uploads/hotelAmenities/{{$amenitiesData->image1}}" width="738" height="431" alt>
                    </div>
                    <h2>{{$amenitiesData->am_name}}</h2>
                    <p>{{$amenitiesData->remark}}</p>

                    {{-- <div class="why-choose-section"> --}}
                        {{-- <h3>Why Choose This Service</h3>
                        <div class="feature-grids clearfix">
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-food-tray"></i>
                                </div>
                                <div class="hover-icon">
                                    <i class="fi flaticon-food-tray"></i>
                                </div>
                                <h3>Delicious Food</h3>
                                <p>Excepteur sint occaecat proident, sunt in culpa mollit est aborum.</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-swimmer"></i>
                                </div>
                                <div class="hover-icon">
                                    <i class="fi flaticon-swimmer"></i>
                                </div>
                                <h3>Swimming Pool</h3>
                                <p>Excepteur sint occaecat proident, sunt in culpa mollit est aborum.</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-parking"></i>
                                </div>
                                <div class="hover-icon">
                                    <i class="fi flaticon-parking"></i>
                                </div>
                                <h3>Parking Area</h3>
                                <p>Excepteur sint occaecat proident, sunt in culpa mollit est aborum.</p>
                            </div>
                        </div> --}}

                        <div class="tab-area">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane in active" id="Breakfast">
                                    {{-- <p>Ut enim ad minim veniam, quis nostrud exercitation ullamc ex ea commodo consequat. Duis aute irure dolor in repreh esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut nim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p> --}}
                                    <div class="img-area">
                                        <img src="{{URL::to('/')}}/uploads/hotelAmenities/{{$amenitiesData->image2}}" width="354" height="265" alt>
                                        <img src="{{URL::to('/')}}/uploads/hotelAmenities/{{$amenitiesData->image3}}" width="354" height="265" alt>
                                    </div>
                                    {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                                    <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour,sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p> --}}
                                </div>
                                
                            </div>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col col-lg-4 col-12">
                <div class="wpo-single-sidebar">
                    <div class="wpo-service-widget widget">
                        <h2>All Service</h2>
                        <ul>
                            @foreach($AllamenitiesData as $row)
                            <li><a href="#">{{$row->am_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="wpo-newsletter-widget widget">
                        <h2>Newsletter</h2>
                        <p>Join 20,000 Sabscribers!</p>
                        <form class="form" action="/user/addSubcribe" method="POST">
                            <input type="text" name="email" placeholder="Email Address">
                            <button type="submit">Sign Up</button>
                        </form>
                        <span>By signing up you agree to our <a href="#">Privecy Policy</a></span>
                    </div> --}}
                    {{-- <div class="wpo-instagram-widget widget">
                        <h2>Instagram Shot</h2>

                        <ul>
                            <li><img src="assets/images/instragram/1.jpg" alt=""></li>
                            <li><img src="assets/images/instragram/2.jpg" alt=""></li>
                            <li><img src="assets/images/instragram/3.jpg" alt=""></li>
                            <li><img src="assets/images/instragram/4.jpg" alt=""></li>
                            <li><img src="assets/images/instragram/5.jpg" alt=""></li>
                            <li><img src="assets/images/instragram/6.jpg" alt=""></li>
                        </ul>
                    </div> --}}

                    <div class="wpo-contact-widget widget">
                        <h2>How We Can <br> Help You!</h2>
                        <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. </p>
                        <a href="/user/contact">Contact Us</a>
                    </div>
                </div>                  
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
@endsection

@section('js')

@endsection