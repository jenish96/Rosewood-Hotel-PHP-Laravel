@extends('hotel.hotelMaster.hotelMasterPage')

@section('title')
{{Session::get('hotel_name')}} - Account
@endsection

@section('css')
    <!-- icons -->
    <link href="{{ URL::to('/') }}/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::to('/') }}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="{{ URL::to('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/material_style.css">
    <!-- animation -->
    <link href="{{ URL::to('/') }}/assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::to('/') }}/assets/img/favicon.ico" />
@endsection

@section('main')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">User Profile</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="/hotel/hotelDashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Account</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Account</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2"></div>
                <div class="col-md-10 col-sm-10">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card card-topline-aqua">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="profile-userpic">
                                        <img src="{{ URL::to('/') }}/assets/img/dp.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                @foreach ($hotelData as $row)
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">{{$row->hotel_name}}</div>
                                    <div class="profile-usertitle-job"> {{$row->owner_name}} </div>
                                </div>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Owner Name</b> <a class="pull-right">{{$row->owner_name}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Contact No</b> <a class="pull-right">{{$row->contact_no}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="pull-right">{{$row->email}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>City</b> <a class="pull-right">{{$row->city_name}}</a>
                                    </li>
                                </ul>
                                @endforeach
                                <!-- END SIDEBAR USER TITLE -->
                                <div class="profile-userbuttons">
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary" data-upgraded=",MaterialButton,MaterialRipple">Edit<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink" data-upgraded=",MaterialButton,MaterialRipple">Message<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- end page content -->
            <!-- end page container -->
        @endsection

        @section('js')
            <!-- start js include path -->
            <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_1___
            <script src="{{ URL::to('/') }}/assets/plugins/popper/popper.min.js"></script>
            <script src="{{ URL::to('/') }}/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
            <script src="{{ URL::to('/') }}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- bootstrap -->
            <script src="{{ URL::to('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <!-- Common js-->
            <script src="{{ URL::to('/') }}/assets/js/app.js"></script>
            <script src="{{ URL::to('/') }}/assets/js/layout.js"></script>
            <script src="{{ URL::to('/') }}/assets/js/theme-color.js"></script>
            <!-- Material -->
            <script src="{{ URL::to('/') }}/assets/plugins/material/material.min.js"></script>
            <!-- animation -->
            <script src="{{ URL::to('/') }}/assets/js/pages/ui/animations.js"></script>
            <!-- end js include path -->
        @endsection
