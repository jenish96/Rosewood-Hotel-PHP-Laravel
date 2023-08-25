@extends('user.master.masterPage')

@section('title')
    Rosewood - Offer
@endsection

@section('css')

@endsection

@section('main')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Offer</h2>
                        <ul>
                            <li><a href="/user/home">Home</a></li>
                            <li><span>Offers</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
<br>
    <section class="service-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-12 col-12">
                    <div class="service-single-content">                       
                        <div class="why-choose-section">
                            <h2 style="color: red;">Exclusive Offer</h2>
                            <div class="feature-grids clearfix">
                                @foreach ($offerData as $row)
                                <div class="grid">
                                    <div class="icon">
                                        {{-- <i class="fi flaticon-food-tray"></i> --}}
                                        <h2>{{ $row->title }}</h2>
                                    </div>
                                   
                                  <p><b>Coupon Code&nbsp;:&nbsp;</b>{{$row->coupon_code}}</b></p>
                                  <p><b>Discount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</b>₹{{$row->discount}}</b></p>
                                  <p><b>Valid To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</b><?php echo date('d M Y', strtotime($row->end_date)); ?></b></p>
                                  <br>
                                  <p><b>Terms & Condition :</b></p>
                                    <p>{{$row->discription}}</p>
                                    
                                </div>
                                @endforeach
                                
                            </div>

                           
                        </div>
                    </div>
                </div>
               
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- start wpo-pricing-section -->
     <section class="wpo-pricing-section section-padding">
        <div class="container">
            <div class="wpo-pricing-wrap">
                <div class="row">
                    @foreach ($offerData as $row)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-img">
                                    <img src="assets/images/pricing/1.jpg" alt="">
                                </div> 
                                    <div class="wpo-pricing-text">
                                        <h2>{{ $row->title }}</h2>
                                         <h3>{{$row->discount}}%<span>Discount</span></h3> 
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Coupen Code :{{ $row->coupon_code }}</li>
                                            <li>Minimum Amount :{{ $row->min_amount }}</li>
                                            <li>1 Bed Room</li>
                                            <li> 2 People in Room</li>
                                        </ul>
                                        <a class="theme-btn" href="pricing.html">Book Rooms</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- start wpo-pricing-section -->
    <!-- start wpo-newslatter-section -->
    
    <!-- end wpo-newslatter-section -->
@endsection

@section('js')

@endsection
