@extends('user.master.masterpage')

@section('title')
Rosewood - Place
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
                    <h2>Place</h2>
                    <ul>
                        <li><a href="/user/home">Home</a></li>
                        <li><span>Place</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->
            <!-- wpo-destination-area-start -->
            <div class="wpo-destination-area pt-120">
                <div class="container">
                    <div class="destination-wrap">
                        <div class="row">
                            @foreach($placeData as $row)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="destination-item">
                                    <div class="destination-img">
                                        <img src="{{URL::to('/')}}/uploads/place/{{$row->image1}}" width="358px" height="272px" alt="">
                                    </div>
                                    <div class="destination-content">
                                        {{-- <span class="sub">{{$row->place_name}}</span> --}}
                                        <h2><a href="/user/placeDetails/{{$row->place_id}}">{{$row->place_name}}</a></h2>
                                        <div class="destination-bottom">
                                            <p>{{$row->city_name}}</p>
                                            {{-- <div class="destination-bottom-right">
                                                <ul>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                                </ul>
                                                <small>4.5</small>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- .Destination-area-start -->
            <!-- start wpo-newslatter-section -->
            {{-- <section class="wpo-newslatter-section section-bg section-padding">
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
                    <img src="assets/images/nshape1.png" alt="">
                </div>
                <div class="n-shape2">
                    <img src="assets/images/nshape2.png" alt="">
                </div>
            </section> --}}
            <!-- end wpo-newslatter-section -->
@endsection

@section('js')

@endsection