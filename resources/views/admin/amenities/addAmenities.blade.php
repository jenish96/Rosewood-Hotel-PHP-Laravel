@extends('admin.master.masterpage')

@section('title')
Rosewood- Add Amenities
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
	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jquery/jquery.min.js"></script>
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

    <script src="{{URL::to('/')}}/assets/js/jquery.validate.js"></script>
    <script src="{{URL::to('/')}}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function(){
            $("#form1").validate({
                rules:{
                    txtamenities:
                    {
                        required:true
                    },
                    iconimg:
                    {
                        required:true,
                        accept: "image/jpg,image/jpeg,image/png,image/gif"
                    }
                },
                messages:{
                    txtamenities:
                    {
                        required:"Please Enter Amenities Name"
                    },
                    iconimg:
                    {
                        required:"Please select Icon Image",
                        accept: "only image format allowed"
                    }
                }
            })
        })
    </script>
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Amenities</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewAmenities">Amenities</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Add Amenities</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-3">
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="card card-box">
                <div class="card-head">
                    <header>Add Amenities</header>

                    <a href="/admin/viewAmenities"> <button type="button" class="btn btn-round btn-primary float-right m-2">View Amenities</button></a>

                </div>
                <div class="card-body " id="bar-parent">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if(session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>
                    @endif
                    <form action="/admin/insertAmenities" method="POST" id="form1" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="hoteltype">Amenities Name</label>
                            <input type="text" class="form-control" id="txtamenities"
                                placeholder="" name="txtamenities">
                        </div>
                        <div class="form-group">
                            <label for="image">Amenities Icon</label>
                            <input type="file" class="form-control" id="iconimg"
                                placeholder="" name="iconimg">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection