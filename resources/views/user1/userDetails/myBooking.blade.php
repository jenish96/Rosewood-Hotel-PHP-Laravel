@extends('user.master.masterpage')

@section('title')
    Rosewood - My Booking
@endsection

@section('css')
@endsection

@section('main')
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="assets/images/preloader.png" alt="">
            </div>
        </div>
    </div>
    <div class="row" style="background-color: rgb(206, 29, 29); padding:20px;">
        <h2 style="text-align: center; color:white;">My Booking</h2>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="cart-area section-padding">
        <div class="container">
            <div class="form">
                <div class="cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <form action="https://wpocean.com/html/tf/parador/cart">
                                <table class="table-responsive cart-wrap" border="1">
                                    <thead>
                                        <tr><h2 style="background-color: rgb(182, 19, 19); padding:10px;color:white;">My Booking</h2>
                                        <tr>
                                            <th>No</th>
                                            <th class="images images-b">Room</th>
                                            <th class="product-2">Check-In</th>
                                            <th class="pr">Check-Out</th>
                                            <th class="ptice">Price</th>
                                            <th class="stock">Total Amount</th>
                                            <th>View</th>
                                            {{-- <th class="remove remove-b">Pay</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookingData as $row)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $row->room_name }}
                                                </td>
                                                <td>
                                                    <?php echo date('d-M-Y', strtotime($row->check_in)); ?>
                                                </td>
                                                <td>
                                                    <?php echo date('d-M-Y', strtotime($row->check_out)); ?>
                                                </td>
                                                <td class="ptice">{{ $row->room_amount }}</td>
                                                <td class="ptice">{{ $row->total_amount }}</td>
                                                <td>
                                                    {{-- <a href="/user/viewMorebooking/{{$row->booking_id}}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" class="w-btn-sm submit-btn-area" title="View Booking Details" href="#">View</a> --}}
                                                    <a href="/user/viewMorebooking/{{ $row->booking_id }}"
                                                        title="View Booking Details" class="theme-btn">View <i
                                                            class="fa fa-angle-double-right"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </form>
                            {{-- <div class="submit-btn-area">
                                <ul>
                                    <li><a class="theme-btn" href="shop.html">Continue Shopping <i
                                                class="fa fa-angle-double-right"></i></a></li>
                                    <li><button type="submit">Update Cart</button></li>
                                </ul>
                            </div>
                            <div class="cart-product-list">
                                <ul>
                                    <li>Total product<span>( 05 )</span></li>
                                    <li>Sub Price<span>$2250</span></li>
                                    <li>Vat<span>$50</span></li>
                                    <li>Eco Tax<span>$100</span></li>
                                    <li>Delivery Charge<span>$100</span></li>
                                    <li class="cart-b">Total Price<span>$2500</span></li>
                                </ul>
                            </div> --}}

                            {{-- <div class="submit-btn-area">
                                <ul>
                                    <li><a class="theme-btn" href="checkout.html">Proceed to Checkout <i
                                                class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
