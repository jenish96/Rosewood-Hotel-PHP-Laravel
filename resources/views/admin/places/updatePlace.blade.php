@extends('admin.master.masterpage')

@section('title')
Rosewood- Update Place
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


@section('main')
<div class="page-content">
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Place</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="/admin/viewPlace">Place</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Update Place</li>
                </ol>
            </div>
        </div>
        <div class="card-body " id="bar-parent">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        <div class="row">
            <div class="col-md-2 col-sm-2">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Update Place</header>
                        
                        <a href="/admin/viewPlace"> <button type="button"
                            class="btn btn-round btn-primary float-right m-2">View Place</button></a>
                            
                        </div>
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        <div class="card-body " id="bar-parent">
                            <form action="/admin/updatePlace" method="POST" id="form1" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="p_id" value="{{ $singleData->place_id }}"
                                    name="p_id">
                                <input type="hidden" class="form-control" id="img1" value="{{ $singleData->image1 }}" name="img1">
                                <input type="hidden" class="form-control" id="img2" value="{{ $singleData->image2 }}" name="img2">
                                <div class="form-group">
                                    <label for="state">Place Name</label>
                                    <input type="text" class="form-control" id="txtpname"value="{{ $singleData->place_name }}"
                                     placeholder="Enter Place Name" name="txtpname">
                                </div>
                                <div class="form-group">
                                    <label for="Desc">Place Description</label>
                                    <textarea type="textarea" class="form-control"
                                    id="txtdiscription" placeholder="" name="txtdiscription">{{ $singleData->place_discription }}</textarea>
                                </div>
                
                                <div class="form-group">
                                    <label for="state">Image1</label>
                                    <input type="file" class="form-control" 
                                    id="txtimg1" placeholder="" name="txtimg1">
                                    <img src="{{ URL::to('/') }}/uploads/place/{{ $singleData->image1  }}"
                                        height="100" width="100" />
                                </div>
                                <div class="form-group">
                                    <label for="state">Image2</label>
                                    <input type="file" class="form-control" 
                                    id="txtimg2" placeholder="" name="txtimg2">
                                    <img src="{{ URL::to('/') }}/uploads/place/{{ $singleData->image2  }}"
                                        height="100" width="100" />
                                </div>
                                <div class="form-group">
                                    <label for="state">Video URl</label>
                                    <input type="text" class="form-control" value="{{ $singleData->video_url }}"
                                    id="txturl" placeholder="" name="txturl">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="form-control" name="txtcity">
                                        <option value="">Select City ...</option>
                                        @foreach ($cityData as $row)
                                        <option @if ($singleData->city_id == $row->city_id) selected 
                                            @endif value="{{ $row->city_id }}">{{ $row->city_name }}</option>
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
                        txtpname: 
                        {
                            required: true
                        },
                        txtdiscription: 
                        {
                            required: true
                        },
                        txturl: 
                        {
                            required: true
                        },
                        txtcity: 
                        {
                            required: true
                        }
                    },
                    messages: {
                        txtpname:
                        {
                            required: "Please Enter PlaceName"
                        },
                        txtdiscription: 
                        {
                            required: "Please Enter Discription"
                        },
                        txturl: 
                        {
                            required: "Please Enter Video URL"
                        },
                        txtcity: 
                        {
                            required: "Please Select City"
                        }
                    }
                });
            });
        </script>
    @endsection