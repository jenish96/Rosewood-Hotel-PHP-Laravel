@extends('admin.master.masterpage')


@section('title')
{{Session::get('name')}}- Update Media
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

    
    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function() {
            $("#form1").validate({
                rules: {
                   
                    txtcategory: 
                    {
                        required: true
                    },
                    txtvideo: 
                    {
                        required: true
                    }
                },
                messages: {
                   
                    txtcategory: 
                    {
                        required: "Please Enter Category"
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
                        href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/updateMedia">Media</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Update Media</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-2">
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="card card-box">
                <div class="card-head">
                    <header>Update Media</header>

                    
                    
                    <a href="/admin/viewMedia"> <button type="button" class="btn btn-round btn-primary float-right m-2">View Media</button></a>
                    

                </div>
                <div class="card-body " id="bar-parent">
                    <form action="/admin/updateMedia" method="POST" id="form1" enctype="multipart/form-data">
                        @csrf
                       <input type="hidden" class="form-control" id="m_id" value="{{ $singleData->media_id }}" name="m_id">
                       <input type="hidden" class="form-control" id="image" value="{{ $singleData->photo_url }}" name="image">
                        <div class="form-group">
                            <label>Hotel</label>
                            <select class="form-control" name="txthotel">
                                <option value="">Select Hotel</option>
                            @foreach ($hotelData as $row)
                            <option @if ($singleData->hotel_id == $row->hotel_id) selected 
                                @endif value="{{ $row->hotel_id }}">{{ $row->hotel_name }}</option>
                        @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">Category</label>
                            <input type="text" class="form-control" value="{{$singleData->category}}" id="txtcategory"
                                placeholder="" name="txtcategory">
                        </div>
                        <div class="form-group">
                            <label for="state">Photo URL</label>
                            <input type="file" class="form-control" id="txtphoto"
                                placeholder="" name="txtphoto">
                                <img src="{{ URL::to('/') }}/uploads/media/{{ $singleData->photo_url}}"
                                        height="100" width="100" />
                        </div>
                        <div class="form-group">
                            <label for="state">Video URL</label>
                            <input type="text" class="form-control" value="{{$singleData->video_url }}" id="txtvideo"
                                placeholder="" name="txtvideo">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection