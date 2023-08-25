@extends('user.master.masterpage')

@section('title')
    Rosewood - My Booking
@endsection

@section('css')

@endsection

@section('main')
<div class="row" style="background-color: rgb(206, 29, 29); padding:20px;">
    <h2 style="text-align: center; color:white;">Booking Details</h2>
</div>
    <div class="cart-area section-padding">
        <div class="container">
            <div class="form">
                <div class="cart-wrapper">
                    <div class="row">
                        <div class="col-12">
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
                           
                            <div class="cart-product-list">
                                {{-- <div class="col-lg-12 col-12">
                                    
                                     <div class="caupon-wrap s2">
                                        <div class="biling-item"> 
                                            <div class="coupon coupon-3">
                                                <label id="toggle2">Booking Member</label>
                                            </div> --}}
                                            <input type="hidden" name="amount" value="{{ $bookingData->total_amount }}">
                                            <ul>

                                                <li>User<span>{{ $bookingData->username }}</span></li>
                                                <li>Check In<span>{{ $bookingData->check_in }}</span></li>
                                                <li>Check Out<span>{{ $bookingData->check_out }}</span></li>
                                                <li>Room Price<span>{{ $bookingData->room_amount }}</span></li>
                                                <li>Total Room<span>{{ $bookingData->total_room }}</span></li>
                                                <li>Total Amount<span>{{ $bookingData->total_amount }}</span></li>
                                                <li>Extra Amount<span>{{ $bookingData->extra_amount }}</span></li>
                                                <li>Guest<span>{{ $bookingData->guest }}</span></li>
                                                <li>Contact No<span>{{ $bookingData->contact_no }}</span></li>
                                                <li>Email<span>{{ $bookingData->email_id }}</span></li>
                                                <li>Special Request<span>{{ $bookingData->special_request }}</span></li>
                                                <li>Other Request<span>{{ $bookingData->other_request }}</span></li>
                                                <li>Pay<span>{{ $bookingData->is_pay }}</span></li>
                                                <li>Payment Mode<span>{{ $bookingData->pay_mode }}</span></li>
                                                <li>Transaction No<span>{{ $bookingData->transaction_no }}</span></li>
                                                <li>Booking Date<span>{{ $bookingData->booking_date }}</span></li>
                                                <li>Discount<span>{{ $bookingData->discount }}</span></li>
                                                <li>Offer<span>{{ $bookingData->title }}</span></li>
                                                <li>Coins<span>{{ $bookingData->coins }}</span></li>
                                                {{-- <li><span>$100</span></li>
                                    <li class="cart-b">Total Price<span>$2500</span></li> --}}
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                   {{-- <a href="/user/viewInvoice/{{$bookingData->booking_id}}" type="button" class="theme-btn" type="submit"> View Invoice</a> --}}


                                   @if($bookingStatus->status == "yes")
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="/user/bookingCancel/{{$bookingData->booking_id}}/no" type="button" class="theme-btn"  type="submit"> Cancel Booking</a>
                                    <br><br>
                                    @endif
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-checkout-area section-padding">
                    <div class="container">
                        {{-- <form> --}}
                        <div class="checkout-wrap">
                            <div class="row">
                                <div class="col-lg-12 col-12">

                                    <div class="caupon-wrap s2">
                                        <div class="biling-item">
                                            <div class="coupon coupon-3">
                                                <label id="toggle2">Booking Member</label>
                                            </div>
                                            <div class="billing-adress" id="open2">
                                                <div class="cart-area section-padding">
                                                    <div class="container">
                                                        <div class="form">
                                                            <div class="cart-wrapper">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <form
                                                                            action="https://wpocean.com/html/tf/parador/cart">
                                                                            <table class="table-responsive cart-wrap">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="product-2">Name</th>
                                                                                        <th class="pr">Contact
                                                                                            No
                                                                                        </th>
                                                                                        <th class="ptice">BOD</th>
                                                                                        <th class="stock">
                                                                                            Certificate
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($bookingMember as $row)
                                                                                        <tr>
                                                                                            <td>
                                                                                                {{ $row->name }}
                                                                                            </td>
                                                                                            <td>
                                                                                                {{ $row->contact_no }}
                                                                                            </td>
                                                                                            <td class="ptice">
                                                                                                {{ $row->birth_date }}
                                                                                            </td>
                                                                                            <td class="ptice"><img
                                                                                                    src="{{ URL::to('/') }}/uploads/bookingMember/{{ $row->certificate }}"
                                                                                                    height="50" width="70"
                                                                                                    class="iradius" />
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- booking member --}}

                                
                            </div>
                            {{-- End of booking Member --}}

                            {{-- <div class="caupon-wrap s3">
                                <div class="payment-area">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="coupon coupon-3">
                                                <label id="toggle4">Payment Method</label>
                                            </div>
                                            <div class="payment-option" id="open4">
                                                <div class="payment-select">
                                                    <ul>
                                                        <li class="addToggle">
                                                            <input id="add" type="radio" name="payment"
                                                                checked="checked" value="30">
                                                            <label for="add">Payment By Card</label>
                                                        </li>&nbsp;&nbsp;
                                                        <li class="removeToggle">
                                                            <input id="remove" type="radio" name="payment" value="30">
                                                            <label for="remove">Cash On delivery</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="open5" class="payment-name active">
                                                    <ul>
                                                        <li class="visa"><input id="1" type="radio"
                                                                name="size" value="30">
                                                            <label for="1"><img
                                                                    src="{{ URL::to('/') }}/user/images/checkout/img-1.png"
                                                                    alt=""></label>
                                                        </li>
                                                        <li class="mas"><input id="2" type="radio"
                                                                name="size" value="30">
                                                            <label for="2"><img
                                                                    src="{{ URL::to('/') }}/user/images/checkout/img-2.png"
                                                                    alt=""></label>
                                                        </li>
                                                        <li class="ski"><input id="3" type="radio"
                                                                name="size" value="30">
                                                            <label for="3"><img
                                                                    src="{{ URL::to('/') }}/user/images/checkout/img-3.png"
                                                                    alt=""></label>
                                                        </li>
                                                        <li class="pay"><input id="4" type="radio"
                                                                name="size" value="30">
                                                            <label for="4"><img
                                                                    src="{{ URL::to('/') }}/user/images/checkout/img-4.png"
                                                                    alt=""></label>
                                                        </li>
                                                    </ul>
                                                    <div class="contact-form form-style">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                <label for="holder">Card holder Name</label>
                                                                <input type="text" placeholder="" id="holder"
                                                                    name="name">
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                <label for="card">Card Number</label>
                                                                <input type="text" placeholder="" id="card" name="card">
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                <label for="CVV">CVV</label>
                                                                <input type="text" placeholder="" id="CVV" name="CVV">
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                <label for="date">Expire Date</label>
                                                                <input type="text" placeholder="" id="date" name="date">
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-12">
                                                                <div class="submit-btn-area text-center">
                                                                    <button class="theme-btn" type="submit">Place
                                                                        Order</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    @endsection

    

