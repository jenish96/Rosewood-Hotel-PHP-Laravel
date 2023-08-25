@extends('admin.master.masterpage')

@section('title')
    Rosewood - My Account
@endsection

@section('css')
    <style>
        body {
            background-color: #ffffff
        }

        .padding {
            padding: 3rem !important
        }

        .user-card-full {
            overflow: hidden
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(219, 237, 245, 0.08);
            box-shadow: 0 1px 20px 0 rgba(206, 214, 218, 0.08);
            border: none;
            margin-bottom: 30px
        }

        .m-r-0 {
            margin-right: 0px
        }

        .m-l-0 {
            margin-left: 0px
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#131049), to(#42394d));
            background: linear-gradient(to right, #15054e, #2e1305)
        }

        .user-profile {
            padding: 30px 0
        }

        .card-block {
            padding: 1.25rem
        }

        .m-b-25 {
            margin-bottom: 25px
        }

        .img-radius {
            border-radius: 5px
        }

        h6 {
            font-size: 20px
        }

        .card .card-block p {
            line-height: 25px
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px
            }
        }

        .card-block {
            padding: 1.25rem
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .card .card-block p {
            line-height: 25px
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .text-muted {
            color: #0c0e0f !important
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .f-w-600 {
            font-weight: 600
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .user-card-full .social-link li {
            display: inline-block
        }

        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out
        }

    </style>
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">My Profile</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                
                <li class="active">My Profile</li>
            </ol>
        </div>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
        {{-- <div class="page-content page-container" style="background-color: #edf1f5;" id="page-content"> --}}
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-1"></div>
                <div class="col-xl-10 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l- m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img
                                            src="https://img.icons8.com/bubbles/100/000000/user.png" height="120px"
                                            class="img-radius" alt="User-Profile-Image"> </div>
                                    <h6 class="f-w-600">{{ $adminData->name }}</h6>

                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-20 p-b-5 b-b-default f-w-600">UserName</p>
                                            <h6 class="text-muted f-w-400">{{ $adminData->username }}</h6>
                                        </div>

                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-10 b-b-default f-w-600">Contact No</p>
                                            <h6 class="text-muted f-w-400">{{ $adminData->contact_no }}</h6>
                                        </div>

                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-10 b-b-default f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400">{{ $adminData->email }}</h6>
                                        </div>

                                    </div>
                                    <br>
                                    <a href="/admin/editProfile"> <button type="button"
                                            class="btn btn-round btn-primary m-2">Edit</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection

@section('js')
@endsection
