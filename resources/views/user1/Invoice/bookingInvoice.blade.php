@extends('user.master.masterpage')






@section('css')
    <!-- icons -->
    <link href="{{ URL::to('/') }}/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::to('/') }}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="{{ URL::to('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/material_style.css">
    <!-- animation -->
    <link href="{{ URL::to('/') }}/assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::to('/') }}/assets/img/favicon.ico" />
@endsection


{{-- <body    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark"> --}}
@section('main')
    {{-- <div class="page-wrapper"> --}}



    <!-- start page container -->
    {{-- <div class="page-container"> --}}
        <!-- start page content -->
        {{-- <div class="page-content-wrapper"> --}}
			<div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-md-8">
                    <div class="wpo-section-title-s2">
                        <h2>Booking Invoice</h2>
                    </div>

                </div>
            </div>
            <div class="page-content">
                <div class="row">
					<div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="white-box">
                            <h3><b>INVOICE</b> <span class="pull-right">#{{$bookingData->transaction_no}}</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            {{-- <img src="assets/img/invoice_logo.png" alt="logo" class="logo-default" /> --}}
                                            <p class="text-muted m-l-5">
                                                <b>Rosewood Hotel</b>, <br>
                                                Jahangirpura, <br> Surat - 395006
                                            </p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <p class="addr-font-h3">To,</p>
                                            <p class="font-bold addr-font-h4">{{$bookingData->username}}</p>
                                            <p class="text-muted m-l-30">
                                                Phone No:&nbsp;&nbsp;&nbsp;{{$bookingData->contact_no}} <br> {{$bookingData->email}} 
                                            </p><br>
                                            <p class="m-t-30">
                                                <b>Invoice Date :</b> <i class="fa fa-calendar"></i> 
												<?php echo date("jS F Y") ?>
                                            </p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Check In</th>
                                                    <th class="text-center">Check Out</th>
                                                    <th class="text-center">Room Price</th>
                                                    <th class="text-center">No Of Room</th>
                                                    <th class="text-center">Extra Amount</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center"><?php echo date('d-M-Y', strtotime($bookingData->check_in)); ?></td>
                                                    <td class="text-center"><?php echo date('d-M-Y', strtotime($bookingData->check_out)); ?></td>
                                                    <td class="text-center">{{$bookingData->room_amount}}</td>
                                                    <td class="text-center">{{$bookingData->total_room}}</td>
                                                    <td class="text-center">{{$bookingData->extra_amount}}</td>
                                                    <td class="text-right">{{$bookingData->room_amount}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: $179</p>
                                        <p>Discount : $10 </p>
                                        <p>Tax (10%) : $14 </p>
                                        <hr>
                                        <h3><b>Total :</b> $213</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button class="btn btn-danger" id="dwld" type="submit"> Proceed to payment </button>
                                        <button onclick="javascript:window.print();" class="btn btn-default btn-outline"
                                            type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        <!-- end page content -->

    {{-- </div> --}}
    <!-- end page container -->

    {{-- </div> --}}
@endsection

@section('js')
    <!-- start js include path -->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/plugins/popper/popper.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="{{ URL::to('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Common js-->
    <script src="{{ URL::to('/') }}/assets/js/app.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/layout.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="{{ URL::to('/') }}/assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="{{ URL::to('/') }}/assets/js/pages/ui/animations.js"></script>
    <!-- end js include path -->

	<script>
		$("#dwld").click(function() {
    // hope the server sets Content-Disposition: attachment!
    window.location = 'file.doc';
});
	</script>
@endsection
{{-- </body> --}}
