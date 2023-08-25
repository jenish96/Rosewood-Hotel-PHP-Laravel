@extends('admin.master.masterpage')

@section('title')
Rosewood- Update Offer
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
                    <div class="page-title">Offer</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="/admin/viewOffer">Offer</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Update Offer</li>
                </ol>
            </div>
        </div>
        <div class="card-body " id="bar-parent">
        <div class="row">
            <div class="col-md-2 col-sm-2">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Update Offer</header>
                        
                        <a href="/admin/viewOffer"> <button type="button"
                            class="btn btn-round btn-primary float-right m-2">View Offers</button></a>
                            
                        </div>
                        
                        <div class="card-body " id="bar-parent">
                            <form action="/admin/updateOffer" method="POST" id="form1" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="offerid" value="{{ $singleData->offer_id}}"
                                name="offerid">
                                <div class="form-group">
                                    <label for="state">Title</label>
                                    <input type="text" class="form-control" id="txttitle" value="{{$singleData->title}}" placeholder="" name="txttitle">
                                </div>
                                <div class="form-group">
                                    <label for="state">Description</label>
                                    <textarea type="textarea" class="form-control" id="txtdiscription"  placeholder="" name="txtdiscription">{{$singleData->discription}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtstatus" id="txtstatus" value="{{$singleData->is_active}}" value="yes" checked="">
                                        <label for="optionsRadios1">
                                            Active
                                        </label>
                                    </div>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtstatus" id="txtstatus" value="{{$singleData->is_active}}" value="no">
                                        <label for="optionsRadios2">
                                            Deactive
                                        </label>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <label for="state">Coupen</label>
                                    <input type="text" class="form-control" id="txtcoupen" value="{{$singleData->coupon_code}}" placeholder="" name="txtcoupen">
                                </div>
                                <div class="form-group">
                                    <label for="state">Discount</label>
                                    <input type="text" class="form-control" id="txtdiscount" value="{{$singleData->discount}}" placeholder="" name="txtdiscount">
                                </div>
                                <div class="form-group">
                                    <label for="Expire">Expire</label>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtExpire" id="txtExpire" value="{{$singleData->is_expire}}" value="yes" checked="">
                                        <label for="optionsRadios1">
                                        Expire
                                        </label>
                                    </div>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtExpire" id="txtExpire" value="{{$singleData->is_expire}}" value="no">
                                        <label for="optionsRadios2">
                                         NoTExpire
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state">Minimum Amount</label>
                                    <input type="text" class="form-control" id="txtminamount" value="{{$singleData->min_amount}}" placeholder="" name="txtminamount">
                                </div>
                                
                            <button type="submit" class="btn btn-primary">Update</button>
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
                        txtcoupen: 
                        {
                            required: true
                        },
                        txtdiscount: 
                        {
                            required: true
                        },
                        txtExpire:
                        {
                            required: true
                        },
                        txtminamount:
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
                        txtcoupen: 
                        {
                            required: "Please Enter Coupen"
                        },
                        txtdiscount: 
                        {
                            required: "Please Enter Discount"
                        },
                        txtExpire:
                        {
                            required: "Please Select Option"
                        },
                        txtminamount:
                        {
                            required: "Please Enter Minimum Amount "
                        }
                    }
                });
            });
        </script>
    @endsection