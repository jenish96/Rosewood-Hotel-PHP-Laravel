@extends('hotel.hotelMaster.hotelMasterpage')

@section('title')
{{Session::get('hotel_name')}} - Add Media
@endsection

@section('css')
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
@endsection


@section('js')
    <!-- start js include path -->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_1___
    <script src="assets/plugins/popper/popper.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="assets/js/pages/ui/animations.js"></script>
    <!-- end js include path -->


    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function() {
            $("#form1").validate({
                rules: {
                    txthotel: 
                    {
                        required: true
                    },
                    txtcategory: 
                    {
                        required: true
                    },
                    txtphoto: 
                    {
                        required: true,
                        accept: "image/jpg,image/jpeg,image/png,image/gif"
                    },
                    txtvideo: 
                    {
                        required: true
                    }
                },
                messages: {
                    txthotel:
                    {
                        required: "Please Select Hotel"
                    },
                    txtcategory: 
                    {
                        required: "Please Enter Category"
                    },
                    txtphoto: 
                    {
                        required: "Please Select Image",
                        accept: "Please Select Image Format"
                    },
                    txtvideo: 
                    {
                        required: "Please Enter video URL"
                    }
                }
            });
        });
    </script>
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Media</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/hotel/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/hotel/viewMedia">Media</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Media</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Media</header>

                        <a href="/hotel/viewMedia"> <button type="button"
                                class="btn btn-round btn-primary float-right m-2">View Media</button></a>

                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-body " id="bar-parent">
                        <form action="/hotel/insertMedia" method="POST" id="form1" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                
                                <input type="hidden"  class="form-control" value="{{Session::get("hotel_id")}}" id="txthotel" placeholder="" name="txthotel">
                            </div>
                            <div class="form-group">
                                <label for="state">Category</label>
                                <input type="text" class="form-control" id="txtcategory" placeholder=""
                                    name="txtcategory">
                            </div>
                            <div class="form-group">
                                <label for="state">Photo URL</label>
                                <input type="file" class="form-control" id="txtphoto" placeholder="" name="txtphoto">
                            </div>
                            <div class="form-group">
                                <label for="state">Video URL</label>
                                <input type="text" class="form-control" id="txtvideo" placeholder="" name="txtvideo">
                            </div>
                            <div class="form-group">
                                <label>Room</label>
                                <select class="form-control" name="txtroom">
                                    <option value="">Select Room</option>
                                    @foreach ($roomdata as $row)
                                        <option value="{{ $row->room_id }}">{{ $row->room_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
