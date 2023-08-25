@extends('user.master.masterpage')

@section('title')
    Rosewood - Room Booking
@endsection

@section('css')
    <link href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('main')
    <div class="page-wrapper">

        <!-- wpo-checkout-area start-->
        <div class="wpo-checkout-area section-padding">
            <div class="container">
                {{-- <form> --}}
                @if (Session::get('user_id'))
                    <div class="checkout-wrap">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 col-12">
                                <div class="caupon-wrap s1">
                                    <div class="coupon coupon-active">
                                        <label id="toggle1">Have a coupon ? Click here to enter your code.</label>
                                    </div>
                                    <div class="create-account">
                                        <span>If you have coupon code,please apply it</span>
                                        <p id="couponerror"></p>
                                        <div class="input-wrap">
                                            <input type="text" id="coupon" name="coupon">
                                            <button type="button" id="btnapply">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caupon-wrap s2">
                                    <div class="biling-item">
                                        <div class="coupon coupon-3">
                                            <label id="toggle2">Booking Room</label>
                                        </div>
                                        <div class="billing-adress" id="open2">
                                            <div class="contact-form form-style">
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <form action="/user/bookingDetails" id="form1" method="POST">
                                                        @csrf
                                                        <input type="hidden" placeholder="" value="{{ $roomData->room_id }}"
                                                            id="roomid" name="roomid">

                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="fname1">Hotel</label>
                                                            <input type="text" placeholder=""
                                                                value="{{ $roomData->hotel_name }}" id="txthotel"
                                                                name="txthotel">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="fname1">Room</label>
                                                            <input type="text" placeholder=""
                                                                value="{{ $roomData->room_name }}" id="room" name="room">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="newcheckIn">Date</label>
                                                        <input type="text" name="newcheckIn" id="newcheckIn"
                                                            value="01/01/2018 - 01/15/2018" />
                                                        </div>


                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="fname1">Check In</label>
                                                            <input type="text" min="<?php echo date('Y-m-d'); ?>"
                                                                onchange="setdate(this.value);" placeholder="" id="checkIn"
                                                                name="checkIn" disabled="">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="fname2">Check out</label>
                                                            <input type="text" placeholder=""
                                                                onchange="countdate(this.value);" id="checkOut"
                                                                name="checkOut" disabled="">
                                                        </div>

                                                        {{-- <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="extraprice">Total Day Amount</label> --}}
                                                        <input readonly type="hidden" placeholder="" id="totalday"
                                                            name="totalday">
                                                        {{-- </div> --}}

                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="Country">Total Room</label>
                                                            <select name="totalroom" id="totalroom"
                                                                onchange="changeprice(this.value);" class="form-control">
                                                                <option value="1" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="City">Guest</label>
                                                            <input type="text" placeholder=""
                                                                onkeyup="calculatetotal(this.value);" id="txtguest"
                                                                name="txtguest">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="Post2">Room Amount</label>
                                                            <input type="text" placeholder="" id="roomPrice"
                                                                name="roomPrice" value="{{ $roomData->room_price }}">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="email4">Extra Amount</label>
                                                            <input type="text" value="0" readonly placeholder=""
                                                                id="extraAmount" name="extraAmount">
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="email4">Total Amount</label>
                                                            <input readonly type="text" value="{{ $roomData->room_price }}"
                                                                placeholder="" id="totalAmount" name="totalAmount">

                                                        </div>
                                                        {{-- <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="extraprice">Extra Person Price</label> --}}
                                                        <input readonly type="hidden" value="{{ $roomData->person_price }}"
                                                            placeholder="" id="extraprice" name="extraprice">
                                                        {{-- </div> --}}
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="txtcontact">Contact No</label>
                                                            <input type="text" placeholder=""
                                                                value="{{ Session::get('contactNo') }}" id="txtcontact"
                                                                name="txtcontact">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="txtemail">Email</label>
                                                            <input type="text" placeholder=""
                                                                value="{{ Session::get('email') }}" id="txtemail"
                                                                name="txtemail">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="txtspecialReq">Special Request</label>
                                                            <input type="text" placeholder="" id="txtspecialReq"
                                                                name="txtspecialReq">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="txtotherReq">Other Request</label>
                                                            <input type="text" placeholder="" id="txtotherReq"
                                                                name="txtotherReq">
                                                        </div>


                                                        <input type="hidden" placeholder="" value="yes" id="txtisPay"
                                                            name="txtisPay">
                                                        <input type="hidden" placeholder="" value="online" id="txtpaymode"
                                                            name="txtpaymode">

                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="txtdiscount">Discount</label>
                                                            <input type="text" value="0" placeholder="" id="txtdiscount"
                                                                name="txtdiscount">
                                                            <input type="hidden" value="0" placeholder="" id="txtofferid"
                                                                name="txtofferid">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <input type="checkbox" id="txtwallet" name="txtwallet">
                                                            <label for="email2">Wallet Balance :

                                                                {{ $balance }}
                                                            </label>
                                                            <input type="text" id="walletamt" name="walletamt"
                                                                value="{{ $balance }}" />
                                                        </div>
                                                        <div class="submit-btn-area">
                                                            <ul>
                                                                <li><button class="theme-btn" type="submit">Save &
                                                                        continue</button></li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="biling-item-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <script type="text/javascript">
                        window.location = "{{ url('/user/error') }}";
                    </script>
                @endif
                {{-- </form> --}}
            </div>
        </div>
        <!-- wpo-checkout-area end-->
    </div>
@endsection

@section('js')
    <script src="{{ URL::to('/') }}/assets/js/jquery-ui.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $(document).ready(function() {
            var unavailableDates = [
                <?php
                foreach($disabledates as $row)
                {
                    $begin = new DateTime($row->check_in);
                    $end = new DateTime($row->check_out);

                    $interval = DateInterval::createFromDateString('1 day');
                    $period = new DatePeriod($begin, $interval, $end);

                    foreach ($period as $dt) { ?> "<?php echo $dt->format('m/d/Y'); ?>",
                <?php  }
                }
                ?>
            ];
            $('input[name="newcheckIn"]').daterangepicker({
                minDate: new Date(),

                opens: 'left',
                isInvalidDate: function(arg) {
                    console.log(arg);

                    // Prepare the date comparision
                    var thisMonth = arg._d.getMonth() + 1; // Months are 0 based
                    if (thisMonth < 10) {
                        thisMonth = "0" + thisMonth; // Leading 0
                    }
                    var thisDate = arg._d.getDate();
                    if (thisDate < 10) {
                        thisDate = "0" + thisDate; // Leading 0
                    }
                    var thisYear = arg._d.getYear() + 1900; // Years are 1900 based

                    var thisCompare = thisMonth + "/" + thisDate + "/" + thisYear;
                    console.log(thisCompare);

                    if ($.inArray(thisCompare, unavailableDates) != -1) {
                        console.log("      ^--------- DATE FOUND HERE");
                        return true;
                    }
                },
            }, function(start, end, label) {

                var startDate;
                var endDate;
                var tempDate;

                startDate = start;
                endDate = end;

                for (i = 0; i < unavailableDates.length; i++) {
                    var temp = unavailableDates[i].split("/");

                    tempDate = new Date(temp[2], temp[0] - 1, temp[1]);

                    if (startDate < tempDate && endDate > tempDate) {
                        alert("Invalid Date Range");
                        return false;
                    }
                }
                $("#checkIn").val(start.format('YYYY-MM-DD'));
                $("#checkOut").val(end.format('YYYY-MM-DD'));
                var date1 = new Date(start.format('YYYY-MM-DD'));
                var date2 = new Date(end.format('YYYY-MM-DD'));
                var Difference_In_Time = date2.getTime() - date1.getTime();
                var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
                $("#totalday").val(Difference_In_Days + 1);
                // console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });


            // $("#checkIn").datepicker();
            // $("#checkIn").datepicker();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $("#btnapply").click(function() {
                $.ajax({
                    type: 'POST',
                    url: '/checkcoupon',
                    dataType: "json",
                    data: 'coupon=' + $("#coupon").val(),
                    success: function(data) {
                        alert(data);
                        if (data["status"] == "notmatch") {
                            alert("Sorry, Offer not available!");
                        } else if (data["status"] == "expire") {
                            alert("Sorry Offer Expired");
                        } else {
                            var discount = data["discount"];
                            var offerid = data["offerid"];
                            $("#txtdiscount").val(discount);
                            $("#txtofferid").val(offerid);
                            alert("Congratulation! Offer Applied!");
                        }
                    }
                });
            });

            $("#form1").submit(function(e) {
                if ($(this).valid()) {
                    e.preventDefault();

                    var isChecked = $('#txtwallet')[0].checked;
                    if (isChecked) {
                        var totalAmount = parseInt($("#totalAmount").val()) * parseInt($("#totalday")
                        .val()) + parseInt($("#extraAmount").val()) - parseInt($("#walletamt").val()) -
                            parseInt($("#txtdiscount").val());

                    } else {
                        var totalAmount = parseInt($("#totalAmount").val()) * parseInt($("#totalday")
                        .val()) + parseInt($("#extraAmount").val()) - parseInt($("#txtdiscount").val());

                    }

                    var options = {
                        "key": "rzp_test_cW2QFCn0lgDqFF",
                        "amount": (totalAmount * 100), // 2000 paise = INR 20
                        "name": "Tutsmake",
                        "description": "Payment",
                        "handler": function(response) {
                            window.location.href = "/user/bookingDetails?checkIn=" + $("#checkIn")
                                .val() + "&checkOut=" + $("#checkOut").val() + "&totalroom=" + $(
                                    "#totalroom").val() + "&txtguest=" + $("#txtguest").val() +
                                "&roomPrice=" + $("#roomPrice").val() + "&txtcontact=" + $(
                                    "#txtcontact").val() + "&txtemail=" + $("#txtemail").val() +
                                "&txtspecialReq=" + $("#txtspecialReq").val() + "&txtotherReq=" + $(
                                    "#txtotherReq").val() + "&txttranNo=" + $("#txttranNo").val() +
                                "&totalAmount=" + totalAmount + "&extraAmount=" + $("#extraAmount")
                                .val() + "&txtdiscount=" + $("#txtdiscount").val() +
                                "&=txtofferid" + $("#txtofferid").val() + "&walletamt=" + $(
                                    "#walletamt").val() + "&txtisPay=" + $("#txtisPay").val() +
                                "&txtpaymode=" + $("#txtpaymode").val() + "&roomid=" + $("#roomid")
                                .val();
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
                }
            });


        });

        function changeprice(total) {

            var t = total * $("#roomPrice").val();
            $("#totalAmount").val(t);
        }


        function setdate(d) {
            $("#checkOut").val("");
            $("#checkOut").attr("min", d);
        }

        function countdate(edate) {
            var date1 = new Date($("#checkIn").val());
            var date2 = new Date(edate);
            var Difference_In_Time = date2.getTime() - date1.getTime();
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
            $("#totalday").val(Difference_In_Days + 1);


        }

        function calculatetotal(person) {
            if (person != "") {
                var p = $("#extraprice").val() * person;
                $("#extraAmount").val(p);
            } else {
                $("#extraAmount").val("0");
            }
        }
    </script>

    //
    <script>
        // date




        // 


        $(document).ready(function() {
            $("#form1").validate({
                rules: {
                    checkIn: {
                        required: true
                    },
                    checkOut: {
                        required: true
                    },
                    txtguest: {
                        required: true
                    },
                    txtcontact: {
                        required: true
                    },
                    txtemail: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    checkIn: {
                        required: "Please select Date !"
                    },
                    checkOut: {
                        required: "Please select Date !"
                    },
                    txtguest: {
                        required: "Please enter Guest !"
                    },
                    txtcontact: {
                        required: "Please Enter Contact No !"
                    },
                    txtemail: {
                        required: "Please Enter Email !",
                        email: "Please Enter Email"
                    }

                }
            });

        });
    </script>
@endsection
