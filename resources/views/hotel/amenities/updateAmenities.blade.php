@extends('hotel.hotelMaster.hotelMasterpage')

@section('title')
{{Session::get('hotel_name')}} - Update Amenities
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
                    txtAmenities: 
                    {
                        required: true
                    },
                    txtremark: 
                    {
                        required: true
                    }
                    // txtimg1: 
                    // {
                    //     required: true,
                    //     accept: "image/jpg,image/jpeg,image/png,image/gif"
                    // },
                    // txtimg2: 
                    // {
                    //     required: true,
                    //     accept: "image/jpg,image/jpeg,image/png,image/gif"
                    // },
                    // txtimg3: 
                    // {
                    //     required: true,
                    //     accept: "image/jpg,image/jpeg,image/png,image/gif"
                    // }
                },
                messages: {
                    txtAmenities: 
                    {
                        required: "Please Select Amenities"
                    },
                    txtremark: 
                    {
                        required: "Please Enter Remark"
                    }
                    // txtimg1: 
                    // {
                    //     required: "Please Select Image",
                    //     accept: "Please Select Image"
                    // },
                    // txtimg2: 
                    // {
                    //     required: "Please Select Image",
                    //     accept: "Please Select Image"
                    // },
                    // txtimg3: 
                    // {
                    //     required: "Please Select Image",
                    //     accept: "Please Select Image"
                    // }
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
                    <div class="page-title">Amenities</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/hotel/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/hotel/viewAmenities">Amenities</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Update Amenities</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Update Amenities</header>

                        <a href="/hotel/viewAmenities"> <button type="button"
                                class="btn btn-round btn-primary float-right m-2">View Amenities</button></a>

                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-body " id="bar-parent">
                        <form action="/hotel/updateAmenities" method="POST" id="form1" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                
                                <input type="hidden" class="form-control" id="ha_id" value="{{ $singleData->hotel_amenities_id }}" name="ha_id">
                                <input type="hidden" class="form-control" id="i1" value="{{ $singleData->image1 }}" name="i1">
                                <input type="hidden" class="form-control" id="i2" value="{{ $singleData->image2 }}" name="i2">
                                <input type="hidden" class="form-control" id="i3" value="{{ $singleData->image3 }}" name="i3">
                            </div>
                            <div class="form-group">
                                <label>Amenities Name</label>
                                <select class="form-control" name="txtAmenities">
                                    <option value="">Select Amenities</option>
                                    @foreach ($amenitiesData as $row)
                                    <option @if ($singleData->amenities_id == $row->amenities_id) selected 
                                        @endif value="{{ $row->amenities_id }}">{{ $row->am_name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">Remark</label>
                                <input type="text" class="form-control" value="{{$singleData->remark}}" id="txtremark" placeholder=""
                                    name="txtremark">
                            </div>
                            <div class="form-group">
                                <label for="state">Image</label>
                                <input type="file" class="form-control" id="txtimg1" placeholder="" name="txtimg1">
                                <img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $singleData->image1}}"
                                        height="100" width="100" />
                            </div>
                            <div class="form-group">
                                <label for="state">Image</label>
                                <input type="file" class="form-control" id="txtimg2" placeholder="" name="txtimg2">
                                <img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $singleData->image2}}"
                                        height="100" width="100" />
                            </div>
                            <div class="form-group">
                                <label for="state">Image</label>
                                <input type="file" class="form-control" id="txtimg3" placeholder="" name="txtimg3">
                                <img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $singleData->image3}}"
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
