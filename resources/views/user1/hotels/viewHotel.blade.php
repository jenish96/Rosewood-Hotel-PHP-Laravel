@extends('user.master.masterpage')

@section('title')
Rosewood - Hotels
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
                        <h2>Hotels</h2>
                        <ul>
                            <li><a href="/user/home">Home</a></li>
                            <li><span>Hotel</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- wpo-room-area-start -->
    <div class="wpo-room-area section-bg section-padding">
        <div class="container">
            <div class="room-wrap">
                <div class="row">
                    @foreach ($hotelData as $row)
                        
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="room-item">
                            <div class="room-img">
                                <img src="{{URL::to('/')}}/uploads/hotel/{{$row->certification}}"  hight="600" width="450" alt="">
                            </div>
                            <div class="room-content">
                                <h2><a href="/user/hotelDetails/{{$row->hotel_id}}">{{$row->hotel_name}}</a></h2>
                                <ul>
                                    <li><i class="fi flaticon-expand-arrows"></i>{{$row->hotel_type}}</li>
                                    <li><i class="fi flaticon-bed"></i>{{$row->city_name}}</li>
                                    <li><i class="fi flaticon-bathtub"></i>{{$row->star}}STAR</li>
                                </ul>
                                <h3>${{$row->pincode}}<span></span></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <!-- .room-area-start -->
    <!-- start wpo-newslatter-section -->
    <section class="wpo-newslatter-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="wpo-section-title-s2">
                        <h2>Subscribe & Get Special Discount!</h2>
                        <p>Don’t Wanna Miss Somethings? Subscribe Right Now And Get The Special 
                            Discount And Monthly Newsletter.</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-newsletter">
                    <div class="newsletter-form">
                        <form>
                        <input type="email" class="form-control"
                            placeholder="Enter Your Email Address..." required>
                            <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
        <div class="n-shape">
            <img src="{{URL::to('/')}}/user/images/nshape1.png" alt="">
        </div>
        <div class="n-shape2">
            <img src="{{URL::to('/')}}/user/images/nshape2.png" alt="">
        </div>
    </section>
    <!-- end wpo-newslatter-section -->
@endsection

@section('js')
    
@endsection