@extends('user.master.masterpage')

@section('title')
    Rosewood - Error!
@endsection

@section('css')
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
@endsection

@section('main')
    
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
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        
       

        <!-- start error-404-section -->
        <section class="error-404-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="content clearfix">
                            <div class="error">
                                <img src="{{ URL::to('/') }}/user/images/e1.webp" height="221" width="241" alt>
                            </div>
                            <div class="error-message">
                                <h3>Please Login First!</h3>
                                <p>We’re sorry but we can’t seem to find the page you requested.<br> This might be because
                                    you have not Login the web .</p>
                                    <a href="/user/login" class="theme-btn">Login/Register</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end error-404-section -->
       
      

        
    </div>
    <!-- end of page-wrapper -->
    @endsection

    @section('js')
        
    
    <!-- All JavaScript files
        ================================================== -->
    <script src="{{ URL::to('/') }}/user/js/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/user/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="{{ URL::to('/') }}/user/js/modernizr.custom.js"></script>
    <script src="{{ URL::to('/') }}/user/js/jquery.dlmenu.js"></script>
    <script src="{{ URL::to('/') }}/user/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="{{ URL::to('/') }}/user/js/script.js"></script>


@endsection

