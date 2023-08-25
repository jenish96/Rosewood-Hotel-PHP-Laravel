@extends('hotel.hotelMaster.hotelMasterpage')

@section('title')
{{Session::get('hotel_name')}} - Add Room
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
                    txtname: 
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
                    txtroomType: 
                    {
                        required: true
                    },
                    txtcapacity: 
                    {
                        required: true,
                        digite: true
                    },
                    txtbreakfast: 
                    {
                        required: true
                    },
                    txtdinner: 
                    {
                        required: true
                    },
                    txtbreakfastPrice: 
                    {
                        required: true,
                        digite: true
                    },
                    txtdinnerPrice: 
                    {
                        required: true,
                        digite: true
                    },
                    txtbed: 
                    {
                        required: true
                    },
                    txtroomNo: 
                    {
                        required: true,
                        digite: true
                    },
                    txtperson: 
                    {
                        required: true
                    }
                },
                messages: {
                    txthotel: 
                    {
                        required: "Please Select Hotel"
                    },
                    txtname: 
                    {
                        required: "Please Enter Room Name"
                    },
                    txtdiscription: 
                    {
                        required: "Please Enter Room Discription"
                    },
                    txtstatus: 
                    {
                        required: "Please select Status"
                    },
                    txtroomType: 
                    {
                        required: "Please Enter RoomType"
                    },
                    txtcapacity: 
                    {
                        required: "Please Enter Capacity Of Person",
                        digite: "Please Enter In Digit"
                    },
                    txtbreakfast: 
                    {
                        required: "Please Select Yes or No"
                    },
                    txtdinner: 
                    {
                        required: "Please Select Yes or No"
                    },
                    txtbreakfastPrice: 
                    {
                        required: "Please Enter Price",
                        digite: "Please Enter In Digit"
                    },
                    txtdinnerPrice: 
                    {
                        required: "Please Enter Price",
                        digite: "Please Enter In Digit"
                    },
                    txtbed: 
                    {
                        required: "Please Enter No of Beds"
                    },
                    txtroomNo: 
                    {
                        required: "Please Enter RoomNo",
                        digite: "Please Enter In Digit"
                    },
                    txtperson: 
                    {
                        required: "Please Enter Person Price"
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
                    <div class="page-title">Room</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/admin/viewRoom">Room</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Room</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Room</header>

                        <a href="/hotel/viewRoom"> <button type="button"
                                class="btn btn-round btn-primary float-right m-2">View Room</button></a>

                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-body " id="bar-parent">
                        <form action="/hotel/insertRoom" method="POST" id="form1">
                            @csrf
                            
                            <div class="form-group">
                                <label for="state">Hotel Name</label>
                                <input type="hidden"  class="form-control" readonly=""  value="{{Session::get("hotel_id")}}" id="txthotel" placeholder="" name="txthotel">
                            </div>
                            <div class="form-group">
                                <label for="state">Room Name</label>
                                <input type="text" class="form-control" id="txtname" placeholder="" name="txtname">
                            </div>
                            <div class="form-group">
                                <label for="state">Discription</label>
                                <textarea type="text" class="form-control" id="txtdiscription" placeholder=""
                                    name="txtdiscription"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="state">Room Price</label>
                                <input type="text" class="form-control" id="txtprice" placeholder="" name="txtprice">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <div class="radio p-0">
                                    <input type="radio" name="txtstatus" id="txtstatus" value="yes" checked="">
                                    <label for="optionsRadios1">
                                        Booked
                                    </label>
                                </div>
                                <div class="radio p-0">
                                    <input type="radio" name="txtstatus" id="txtstatus" value="no">
                                    <label for="optionsRadios2">
                                        NotBooked
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state">Room type</label>
                                <input type="text" class="form-control" id="txtroomType" placeholder=""
                                    name="txtroomType">
                            </div>
                            <div class="form-group">
                                <label for="state">Capacity</label>
                                <input type="text" class="form-control" id="txtcapacity" placeholder=""
                                    name="txtcapacity">
                            </div>
                            <div class="form-group">
                                <label for="status">Breakfast</label>
                                <div class="radio p-0">
                                    <input type="radio" name="txtbreakfast" id="txtbreakfast" value="yes" checked="">
                                    <label for="optionsRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="radio p-0">
                                    <input type="radio" name="txtbreakfast" id="txtbreakfast" value="no">
                                    <label for="optionsRadios2">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Dinner</label>
                                <div class="radio p-0">
                                    <input type="radio" name="txtdinner" id="txtdinner" value="yes" checked="">
                                    <label for="optionsRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="radio p-0">
                                    <input type="radio" name="txtdinner" id="txtdinner" value="no">
                                    <label for="optionsRadios2">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state">Breakfast Price</label>
                                <input type="text" class="form-control" id="txtbreakfastPrice" placeholder=""
                                    name="txtbreakfastPrice">
                            </div>
                            <div class="form-group">
                                <label for="state">Dinner Price</label>
                                <input type="text" class="form-control" id="txtdinnerPrice" placeholder=""
                                    name="txtdinnerPrice">
                            </div>
                            <div class="form-group">
                                <label for="state">Beds</label>
                                <input type="text" class="form-control" id="txtbed" placeholder="" name="txtbed">
                            </div>
                            <div class="form-group">
                                <label for="state">Room No</label>
                                <input type="text" class="form-control" id="txtroomNo" placeholder="" name="txtroomNo">
                            </div>
                            <div class="form-group">
                                <label for="state">ExtraPerson Price</label>
                                <input type="text" class="form-control" id="txtperson" placeholder="" name="txtperson">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
