@extends('admin.master.masterpage')

@section('title')
Rosewood- Update News
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
                    <div class="page-title">News</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="/admin/viewNews">News</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Update News</li>
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
                        <header>Update News</header>
                        
                        <a href="/admin/viewNews"> <button type="button"
                            class="btn btn-round btn-primary float-right m-2">View News</button></a>
                            
                        </div>
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        <div class="card-body " id="bar-parent">
                            <form action="/admin/updateNews" method="POST" id="form1" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="newsid" value="{{ $singleData->news_id }}"
                                    name="newsid">
                                <input type="hidden" class="form-control" id="image"
                                    value="{{ $singleData->news_img }}" name="image">
                                    
                                    <label for="state">Title</label>
                                    <input type="text" class="form-control" value="{{$singleData->title}}" id="txttitle" placeholder="" name="txttitle">
                                </div>
                                <div class="form-group">
                                    <label for="state">Description</label>
                                    <textarea type="textarea" class="form-control"  id="txtdiscription" placeholder="" name="txtdiscription">{{$singleData->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtstatus" value="{{$singleData->is_active}}" id="txtstatus" value="yes" checked="">
                                        <label for="optionsRadios1">
                                            Active
                                        </label>
                                    </div>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtstatus" value="{{$singleData->is_active}}" id="txtstatus" value="no">
                                        <label for="optionsRadios2">
                                            Deactive
                                        </label>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <label for="state">News Date</label>
                                    <input type="date" class="form-control" value="{{$singleData->news_date}}" id="txtdate" placeholder="" name="txtdate">
                                </div>
                                <div class="form-group">
                                    <label for="state">Image</label>
                                    <input type="file" class="form-control" id="txtimg" placeholder="" name="txtimg">
                                    <img src="{{ URL::to('/') }}/uploads/hotel/{{ $singleData->certification }}"
                                    height="100" width="100" />
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
                        txttitle: 
                        {
                            required: true
                        },
                        txtdiscription: 
                        {
                            required: true
                        },
                        txtstatus: 
                        {
                            required: true
                        },
                        txtdate: 
                        {
                            required: true
                        }
                    },
                    messages: {
                        txttitle:
                        {
                            required: "Please Enter Title"
                        },
                        txtdiscription: 
                        {
                            required: "Please Enter Discription"
                        },
                        txtstatus: 
                        {
                            required: "Please Select Status"
                        },
                        txtdate: 
                        {
                            required: "Please Select Date"
                        }
                    }
                });
            });
        </script>
    @endsection