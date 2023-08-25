@extends('admin.master.masterpage')

@section('title')
Rosewood- Update City
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
                txtCity: {
                    required: true
                },
                txtstate: {
                    required: true
                }
            },
            messages: {
                txtCity: {
                    required: "Please enter city"
                },
                txtstate: {
                    required: "Please select state"
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
                    <div class="page-title">City</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/admin/viewCity">City</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Update City</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Update City</header>

                        <a href="/admin/viewCity"> <button type="button"
                                class="btn btn-round btn-primary float-right m-2">View City</button></a>

                    </div>
                    <div class="card-body " id="bar-parent">
                        <form action="/admin/updateCity" method="POST" id="form1">
                            @csrf
                            <input type="hidden" class="form-control" id="cid" value="{{$singleData->city_id}}" name="cid">
                            {{-- <input type="hidden" class="form-control" id="sid" value="{{$stateData->state_id}}" name="sid"> --}}
                            <div class="form-group">
                                <label>Select State</label>
                                <select class="form-control" name="txtstate">
                                    <option value="">Select State ...</option>
                                    @foreach ($stateData as $row)
                                        <option 
                                        @if($singleData->state_id == $row->state_id) selected @endif
                                        value="{{ $row->state_id}}">{{ $row->state_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">City</label>
                                <input type="text" class="form-control" value="{{$singleData->city_name}}" id="txtCity" placeholder="" name="txtCity">
                            </div>
                           

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
