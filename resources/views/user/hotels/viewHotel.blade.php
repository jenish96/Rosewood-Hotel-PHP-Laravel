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
    {{-- <div class="wpo-room-area section-bg section-padding">
        <div class="container">
            <div class="room-wrap">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="room-item">
                            <div class="room-img">
                                <img src="{{ URL::to('/') }}/uploads/hotel/{{ $row->certification }}" hight="333"
                                    width="547" alt="">
                            </div>
                            <div class="room-content">
                                <h2><a href="/user/hotelDetails/{{ $row->hotel_id }}">{{ $row->hotel_name }}</a></h2>
                                {{-- <ul>
                                    <li><i class="fi flaticon-arrows"></i>{{$row->hotel_type}}</li>
                                    <li><i class="fi flaticon-location"></i>{{$row->pincode}}</li>
                                    <li><i class="fi flaticon-star"></i>{{$row->star}}STAR</li>
                                </ul>
                                <h6>At {{ $row->city_name }}<span></span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="wpo-destination-area pt-120">
        <div class="container">
            <div class="destination-wrap">
                <div class="row">
                    @foreach ($hotelData as $row)
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="destination-item">
                                <div class="destination-img">
                                    <img src="{{ URL::to('/') }}/uploads/media/{{ $row->photo_url}}" width="548" height="365" alt="">
                                </div>
                                <div class="destination-content">
                                    {{-- <span class="sub">Vietnam Sea Beach</span> --}}
                                    <h2><a href="/user/hotelDetails/{{ $row->hotel_id }}">{{ $row->hotel_name }}</a></h2>
                                    <div class="destination-bottom">
                                        <p>{{ $row->city_name }}</p>
                                        <div class="destination-bottom-right">
                                            <ul>
                                               
                                                <?php for($i=1;$i<=$row->star;$i++) { ?>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <?php } ?>
                                                <?php for($i=$row->star;$i<5;$i++) { ?>
                                                    <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                                    <?php } ?>
                                                
                                            </ul>
                                            <small>{{$row->star}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('js')
@endsection
