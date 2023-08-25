@extends('user.master.masterpage')

@section('title')
    Rosewood - Membership
@endsection

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('main')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Membership</h2>
                        <ul>
                            <li><a href="/user/home">Home</a></li>
                            <li><span>Membership</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start wpo-contact-pg-section -->
    <section class="wpo-contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1">

                    <div class="wpo-contact-title">
                        <h2>Buy Membership</h2>

                    </div>
                    <div class="wpo-contact-form-area">
                        <form method="post" class="contact-validation-active" action="/user/insertMembership" id="form1">
                            @csrf
                            <input type="hidden" class="form-control" name="user_id" id="user_id"
                                value="{{ Session::get('user_id') }}">
                            <div class="fullwidth">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*">
                            </div>

                            <input type="hidden" class="form-control" value="<?php echo rand(111111, 999999); ?>" name="txtTransNo" id="txtTransNo">
                            

                                <input type="hidden" class="form-control" value="yes" name="pay" id="pay">
                                <div class="fullwidth">
                                    <select class="form-control" name="mshipName" id="mshipName" onchange="calculatedates(this.value)">
                                        <option value="">Select Month ...</option>
                                        
                                        <option value="30">1 Month</option>
                                        <option value="60">2 Month</option>
                                        <option value="90">3 Month</option>
                                        
                                    </select>
                                </div>
                                <div class="fullwidth">
                                    <input type="text" class="form-control" name="txtAmount" id="txtAmount"
                                        placeholder="Membership Amount*">
                                </div>
                                <div class="fullwidth">
                                    <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="start_date"
                                        id="start_date" placeholder="Select Date*">
                                </div>
                                <div class="fullwidth">
                                    <input type="date" class="form-control" name="end_date" id="end_date"
                                        placeholder="Select Date*">
                                </div>

                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Buy</button>
                                </div>
                                
                        </form>
                    </div>
                    <br><br><br><br><br><br><br>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <input type="hidden" id="cdate" value="<?php echo date('Y-m-d'); ?>" />
    <!-- end wpo-contact-pg-section -->
@endsection

@section('js')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#form1").submit(function(e) {
                e.preventDefault();
                var totalAmount = $("#txtAmount").val();
                var options = {
                    "key": "rzp_test_cW2QFCn0lgDqFF",
                    "amount": (totalAmount * 100), // 2000 paise = INR 20
                    "name": "Tutsmake",
                    "description": "Payment",
                    "handler": function(response) {
                        window.location.href = "/user/insertMembership?user_id=" + $("#user_id").val() +"&mshipName=" + $("#mshipName").val() + "&mshipName=" + $("#mshipName")
                            .val() + "&txtAmount=" + $("#txtAmount").val() + "&start_date=" + $(
                                "#start_date").val() + "&end_date=" + $("#end_date").val() +
                            "&pay=" + $("#pay").val() + "&txtTransNo=" + $("#txtTransNo").val();
                    },
                    "prefill": {
                        "contact": '9988665544',
                        "email": 'tutsmake@gmail.com',
                    },
                    "theme": {
                        "color": "#528FF0"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();

            });


        });
        Date.prototype.addDays = function(days) {
            var date = new Date(this.valueOf());
            date.setDate(date.getDate() + days);
            return date;
        }

        function calculatedates(days) {
            if (days == 30) {
                $("#txtAmount").val("1500");
            } else if (days == 60) {
                $("#txtAmount").val("2000");
            } else {
                $("#txtAmount").val("2500");
            }
            var date = new Date();
            var edate = date.addDays(parseInt(days));
            var fdate = edate.toISOString().split('T')[0];
            $("#end_date").val(fdate);
        }
    </script>
@endsection
