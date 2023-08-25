@extends('user.master.masterpage')

@section('title')
    Rosewood - About Us
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
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="/user/home">Home</a></li>
                            <li><span>About</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- start of wpo-about-section -->
    <section class="wpo-about-section section-padding">
        <div class="container">
            <div class="wpo-about-section-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-img">
                            <img src="{{ URL::to('/') }}/user/images/ho3.jpg" width="548" height="450" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                {{-- <span>About Us</span> --}}
                                <h2>Our Mission</h2>
                            </div>
                            <div class="wpo-about-content-inner">
                                <p>Rosewood Hotel is a global platform that empowers entrepreneurs and small businesses with
                                    hotels and
                                    homes by providing full stack technology that increases earnings and eases operations.
                                    Bringing affordable and trusted accommodation that guests can book instantly.

                                </p>
                                <p>We strive to make the lives of our patrons easier by multiplying revenue channels and
                                    using our technological expertise to maximize demand.
                                </p>
{{-- <br> --}}
                                <ul>
                                    <li>&nbsp;For maximising revenue</li>
                                    <li>&nbsp;To build online presence across channels</li>
                                    <li>&nbsp;To reach more guests & optimise experience</li>
                                    <li>&nbsp;For hassle-free operations</li>
                                    <li>&nbsp;To build a brand loved by both travellers & city dwellers</li>
                                </ul>

                                {{-- <a href="room.html" class="theme-btn">Book Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-about-section -->
@endsection
