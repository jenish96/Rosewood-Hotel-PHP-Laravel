@extends('admin.master.masterpage')

@section('title')
    Rosewood - View Booking
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Booking</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Booking</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row ">
                    {{-- <div class="col-sm-1">
                </div> --}}
                    <div class="col-sm-12">
                        <div class="card card-topline-green">
                            <div class="card-head">
                                <header>Booking Detail</header>
                                <a href="/admin/viewBooking"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        <tr>
                                            <th>User Name</th>
                                            <td>{{ $bookingData->user_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Check In</th>
                                            <td>{{ $bookingData->check_in}}</td>
                                        </tr>
                                        <tr>
                                            <th>Check Out</th>
                                            <td>{{ $bookingData->check_out}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>{{ $bookingData->total_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Room Price</th>
                                            <td>{{ $bookingData->room_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Extra Amount</th>
                                            <td>{{ $bookingData->extra_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Room</th>
                                            <td>{{ $bookingData->total_room}}</td>
                                        </tr>
                                        <tr>
                                            <th>Guest</th>
                                            <td>{{ $bookingData->guest}}</td>
                                        </tr>
                                        <tr>
                                            <th>ContactNo</th>
                                            <td>{{ $bookingData->contact_no}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $bookingData->email_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Payment</th>
                                            <td>{{ $bookingData->is_pay}}</td>
                                        </tr>
                                        <tr>
                                            <th>Payment Mode</th>
                                            <td>{{ $bookingData->pay_mode}}</td>
                                        </tr>
                                        <tr>
                                            <th>Transaction No</th>
                                            <td>{{ $bookingData->transaction_no}}</td>
                                        </tr>
                                        <tr>
                                            <th>Booking Date</th>
                                            <td>{{ $bookingData->booking_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>Discount</th>
                                            <td>{{ $bookingData->discount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Offer</th>
                                            <td>{{ $bookingData->offer_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Coin</th>
                                            <td>{{ $bookingData->coins}}</td>
                                        </tr>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
