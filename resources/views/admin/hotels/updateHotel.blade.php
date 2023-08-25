@extends('admin.master.masterpage')

@section('title')
    Rosewood- Update Hotel
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
                    txthotelname: {
                        required: true
                    },
                    txtownername: {
                        required: true
                    },
                    txtcontactno: {
                        required: true,
                        digits: true
                    },
                    txtemail: {
                        required: true,
                        email: true
                    },
                    txturl: {
                        required: true,
                        url: true
                    },
                    txtaddress: {
                        required: true
                    },
                    txtlandmark: {
                        required: true
                    },
                    txtpincode: {
                        required: true,
                        digits: true
                    },
                    txtcity: {
                        required: true
                    },
                    txthoteltype: {
                        required: true
                    },
                    txtplace: {
                        required: true
                    },
                    txtpassword: {
                        required: true
                    },
                    txtlattitude: {
                        required: true
                    },
                    txtlongittude: {
                        required: true
                    },
                },
                messages: {
                    txthotelname: {
                        required: "Enter Hotel Name"
                    },
                    txtownername: {
                        required: "Enter Owner Name"
                    },
                    txtcontactno: {
                        required: "Enter Contact No",
                        digits: "Enter Contact No"
                    },
                    txtemail: {
                        required: "Enter Email",
                        email: "Enter Email in format"
                    },
                    txturl: {
                        required: "Please Enter URL",
                        url: "Enter url"
                    },
                    txtaddress: {
                        required: "Please Enter Address"
                    },
                    txtlandmark: {
                        required: "Please Enter Landmark"
                    },
                    txtpincode: {
                        required: "Please enter pincode",
                        digits: "Please Enter digits"
                    },
                    txtcity: {
                        required: "Please Select city"
                    },
                    txthoteltype: {
                        required: "Please select HotelType"
                    },
                    txtplace: {
                        required: "Please select Place"
                    },
                    txtpassword: {
                        required: "Please Enter Password"
                    },
                    txtlattitude: {
                        required: "Please Enter Lattitude"
                    },
                    txtlongittude: {
                        required: "Please Enter Longittude"
                    },
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
                    <div class="page-title">Update Hotel</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/admin/viewHotel">Hotels</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Update Hotel</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 col-sm-1">
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Update Hotel</header>

                        <a href="/admin/viewHotel"> <button type="button"
                                class="btn btn-round btn-primary float-right m-2">View Hotels</button></a>

                    </div>
                    <div class="card-body " id="bar-parent">
                        <div class="card-body " id="bar-parent">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form action="/admin/updateHotel" method="POST" id="form1" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="hotel_id" value="{{ $singleData->hotel_id }}"
                                    name="hotel_id">
                                <input type="hidden" class="form-control" id="certi_image"
                                    value="{{ $singleData->certification }}" name="certi_image">
                                <div class="form-group">
                                    <label for="hoteltype">Hotel Name</label>
                                    <input type="text" class="form-control" value="{{ $singleData->hotel_name }}"
                                        id="txthotelname" placeholder="Enter Hotel Type" name="txthotelname">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Owner Name</label>
                                    <input type="text" class="form-control" value="{{ $singleData->owner_name }}"
                                        id="txtownername" placeholder="Enter Owner Name" name="txtownername">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Contact No</label>
                                    <input type="text" class="form-control" value="{{ $singleData->contact_no }}"
                                        id="txtcontactno" placeholder="Enter Contact No" name="txtcontactno">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Email</label>
                                    <input type="email" class="form-control" value="{{ $singleData->email }}" id="txtemail"
                                        placeholder="Enter Email" name="txtemail">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Website url</label>
                                    <input type="text" class="form-control" value="{{ $singleData->website_url }}"
                                        id="txturl" placeholder="Enter Website url" name="txturl">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Address</label>
                                    <textarea type="text" class="form-control" 
                                        id="txtaddress" placeholder="Enter Address" name="txtaddress">{{$singleData->address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Landmark</label>
                                    <input type="text" class="form-control" value="{{ $singleData->landmark }}"
                                        id="txtlandmark" placeholder="Enter Landmark" name="txtlandmark">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Pincode</label>
                                    <input type="text" class="form-control" value="{{ $singleData->pincode }}"
                                        id="txtpincode" placeholder="Enter Pincode" name="txtpincode">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="form-control" name="txtcity">
                                        @foreach ($cityData as $row)
                                            <option @if ($singleData->city_id == $row->city_id) selected @endif value="{{ $row->city_id }}">
                                                {{ $row->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Hotel Type</label>
                                    <select class="form-control" name="txthoteltype">
                                        <option value="">Select Hotel Type</option>
                                        @foreach ($hotel_type as $row)
                                            <option @if ($singleData->hotel_type_id == $row->hotel_type_id) selected 
                                                @endif value="{{ $row->hotel_type_id }}">{{ $row->hotel_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Place</label>
                                    <select class="form-control" name="txtplace">
                                        <option value="">Select Place ...</option>
                                        @foreach ($placeData as $row)
                                        <option @if ($singleData->place_id == $row->place_id) selected 
                                            @endif value="{{ $row->place_id }}">{{ $row->place_name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">UserName</label>
                                    <input type="text" class="form-control" value="{{ $singleData->username }}"
                                        id="txtusername" placeholder="Enter UserName" name="txtusername">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Password</label>
                                    <input type="password" class="form-control" value="{{ $singleData->password }}"
                                        id="txtpassword" placeholder="Enter Password" name="txtpassword">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Star</label>
                                    <input type="text" class="form-control" value="{{ $singleData->star }}" id="txtstar"
                                        placeholder="Enter Star" name="txtstar">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtblock" value="{{ $singleData->is_block }}"
                                            id="txtblock" value="Block" checked="">
                                        <label for="optionsRadios1">
                                            Block
                                        </label>
                                    </div>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtblock" value="{{ $singleData->is_block }}"
                                            id="txtblock" value="Unblock">
                                        <label for="optionsRadios2">
                                            Unblock
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Lattitude</label>
                                    <input type="text" class="form-control" value="{{ $singleData->lattitude }}"
                                        id="txtlattitude" placeholder="Enter Lattitude" name="txtlattitude">
                                </div>
                                <div class="form-group">
                                    <label for="hoteltype">Longittude</label>
                                    <input type="text" class="form-control" value="{{ $singleData->longittude }}"
                                        id="txtlongittude" placeholder="Enter Longittude" name="txtlongittude">
                                </div>
                                <div class="form-group">
                                    <label for="image">Certification</label>
                                    <input type="file" class="form-control" id="imgcertification" placeholder=""
                                        name="imgcertification">
                                    <img src="{{ URL::to('/') }}/uploads/hotel/{{ $singleData->certification }}"
                                        height="100" width="100" />
                                </div>
                                <div class="form-group">
                                    <label for="status">Approve</label>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtapprove" value="{{ $singleData->is_approve }}"
                                            id="txtapprove" value="yes" checked="">
                                        <label for="optionsRadios1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="radio p-0">
                                        <input type="radio" name="txtapprove" value="{{ $singleData->is_approve }}"
                                            id="txtapprove" value="no">
                                        <label for="optionsRadios2">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    @endsection
