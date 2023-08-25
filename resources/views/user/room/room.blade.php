@extends('user.master.masterpage')

@section('title')
Rosewood - Rooms
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
                        <h2>Room</h2>
                        <ul>
                            <li><a href="/user/home">Home</a></li>
                            <li><span>Room</span></li>
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
                    @foreach ($roomData as $row)
                        
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="room-item">
                            <div class="room-img">
                                <img src="{{URL::to('/')}}/uploads/media/{{$row->photo_url}}" width="358" height="468"  alt="">
                            </div>
                            <div class="room-content">
                                <h2><a href="/user/roomDetails/{{$row->room_id}}">{{$row->room_name}}</a></h2>
                                <ul>
                                    <li><i class="fi flaticon-expand-arrows"></i>{{$row->hotel_name}}</li>
                                    <li><i class="fi flaticon-bed"></i>{{$row->beds}} Beds</li>
                                    <li><i class="fi flaticon-key"></i>{{$row->room_name}}</li>
                                </ul>
                                <h3>Rs.{{$row->room_price}}<span>/ Night</span></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="room-item">
                            <div class="room-img">
                                <img src="{{URL::to('/')}}/user/images/room/2.jpg" alt="">
                            </div>
                            <div class="room-content">
                                <h2><a href="room-single.html">Luxery Twin Room</a></h2>
                                <ul>
                                    <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                                    <li><i class="fi flaticon-bed"></i>2 Bed</li>
                                    <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                                </ul>
                                <h3>$250 <span>/ Night</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="room-item">
                            <div class="room-img">
                                <img src="{{URL::to('/')}}/user/images/room/3.jpg" alt="">
                            </div>
                            <div class="room-content">
                                <h2><a href="room-single.html">Single Contrast Room</a></h2>
                                <ul>
                                    <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                                    <li><i class="fi flaticon-bed"></i>2 Bed</li>
                                    <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                                </ul>
                                <h3>$280 <span>/ Night</span></h3>
                            </div>
                        </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    
    <!-- .room-area-start -->
    <!-- start wpo-newslatter-section -->
    {{-- <section class="wpo-newslatter-section section-padding">
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
                        <form action="/user/addSubcribe" method="POST">
                            @csrf
                        <input type="email" class="form-control" name="email" id="email"
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
    </section> --}}
    <!-- end wpo-newslatter-section -->
@endsection

@section('js')
    
@endsection