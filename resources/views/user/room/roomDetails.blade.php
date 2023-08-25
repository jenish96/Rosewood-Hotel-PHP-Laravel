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
                        <h2>{{ $roomData->room_name }}</h2>
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
    <!-- wpo-hotel-details-section-start -->
    <div class="wpo-hotel-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wpo-hotel-details-wrap">
                        <div class="wpo-hotel-details-area">
                            <form class="clearfix">
                                <div class="details-sub">
                                    <span>Hotel</span>
                                    <h2>{{ $roomData->hotel_name }}</h2>
                                </div>
                                <div class="details-sub">
                                    <span>BEDS</span>
                                    <h2>{{ $roomData->beds }}</h2>
                                </div>
                                <div class="details-sub">
                                    <span>ROOM TYPE</span>
                                    <h2>{{ $roomData->room_type }}</h2>
                                </div>
                                <div class="details-sub">
                                    <span>OCCUPANCY</span>
                                    <h2>{{ $roomData->capacity }} person</h2>
                                </div>
                                <div class="details-sub">
                                    <h5>Price <span>{{ $roomData->room_price }}</span> Rs/ Night</h5>
                                    <a href="/user/bookingForm/{{ $roomData->room_id }}" type="button"
                                        class="theme-btn">Book</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-hotel-details-section-end -->
    <!-- wpo-room-area-start -->
    <div class="wpo-room-area-s2 section-padding pt-0">
        <div class="container-fluid">
            <div class="room-wrap room-active owl-carousel">
                @foreach ($mediaData as $row)
                    <div class="room-item">
                        <div class="room-img">
                            <img src="{{ URL::to('/') }}/uploads/media/{{ $row->photo_url }}" width="300" height="490"
                                alt="">
                        </div>
                        {{-- <div class="room-content">
                        <h2><a href="room-single.html">Deluxe Contrast Room</a></h2>
                        <ul>
                            <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                            <li><i class="fi flaticon-bed"></i>2 Bed</li>
                            <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                        </ul>
                        <h3>$200 <span>/ Night</span></h3>
                    </div> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- .room-area-start -->
    <!--Start Room-details area-->
    <div class="Room-details-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="room-description">
                        <div class="room-title">
                            <h2>Description</h2>
                        </div>
                        <p class="p-wrap">{{ $roomData->discription }}</p>
                    </div>
                    

                    <div class="room-review">
                        <div class="room-title">
                            <h2>Room Reviews</h2>
                        </div>
                        @foreach ($reviewData as $row)
                            <div class="review-item">
                                {{-- <div class="review-img">
                                <img src="{{URL::to('/')}}/user/images/room/r1.jpg" alt="">
                            </div> --}}
                                <div class="review-text">
                                    <div class="r-title">
                                        <h2>{{ $row->username }}</h2>
                                        <ul>
                                            <?php for($i=1;$i<=$row->rating;$i++) { ?>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <?php } ?>
                                               
                                        </ul>
                                    </div>
                                    <p>{{ $row->review }}.</p>
                                    <span class="comments-date"><?php echo date('M d,Y h:m A', strtotime($row->rating_datetime)); ?></span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif --}}
                    @if (Session::get('user_id'))
                        <div class="add-review">
                            <div class="room-title">
                                <h2>Add Review</h2>
                            </div>
                            <div class="wpo-blog-single-section review-form ">

                                @if (Session::get('user_id'))
                                    <div class="review-add">
                                        <div class="comment-respond">
                                            <form id="commentform" class="comment-form" action="/user/addreview"
                                                method="post">
                                                @csrf
                                                <div class="give-rat-sec">
                                                    <p>Your rating *</p>
                                                    <div class="give-rating">
                                                        <label>
                                                            <input type="radio" name="stars" value="1" />
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="2" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="3" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="4" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="5" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <input id="roomId" name="roomId" type="hidden"
                                                    value="{{ $roomData->room_id }}">
                                                <input id="hotelId" name="hotelId" type="hidden"
                                                    value="{{ $roomData->hotel_id }}">
                                                <div class="form-textarea">
                                                    <input id="txtname" name="txtname" placeholder="Your Name*" type="text">
                                                  
                                                </div>
                                                 
                                                <div class="form-textarea">
                                                    <textarea id="txtreview" name="txtreview" placeholder="Your Review"></textarea>
                                                </div>
                                                <div class="form-submit">
                                                    <input id="submit" value="Submit Now" type="submit">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @else
                        {{-- <h1>Login First</h1> --}}
                        {{-- <script type="text/javascript">
                            window.location = "{{ url('/user/error') }}";
                        </script> --}}
                    @endif

                </div>
                <div class="col-lg-4 col-12">
                    <div class="blog-sidebar room-sidebar">
                        {{-- <div class="widget check-widget">
                            <h3>Check Availability</h3>
                            <form>
                                <!-- Datepicker as text field -->
                                <div class="input-group date">
                                    <input autocomplete="off" type="text" id="datepicker" placeholder="Check in">
                                    <i class="fi flaticon-calendar"></i>
                                </div>

                                <!-- Datepicker as text field -->
                                <div class="input-group date">
                                    <input autocomplete="off" type="text" id="datepicker2" placeholder="Check Out">
                                    <i class="fi flaticon-calendar"></i>
                                </div>

                                <div class="input-group date">
                                    <select name="Adults" id="Adults">
                                        <option value="">Adults</option>
                                        <option value="">2</option>
                                        <option value="">5</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="input-group date">
                                    <select name="Children" id="Children">
                                        <option value="">Children</option>
                                        <option value="">2</option>
                                        <option value="">5</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="input-group date">
                                    <button class="theme-btn" type="submit">Check Availability</button>
                                </div>
                            </form>
                        </div> --}}
                        <div class="widget recent-post-widget">
                            <h3>Discover Our Rooms</h3>
                            <div class="posts">
                                @foreach ($allroomData as $row)
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ URL::to('/') }}/uploads/media/{{ $row->photo_url }}"
                                                width="90" height="80" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a
                                                    href="/user/roomDetails/{{ $row->room_id }}">{{ $row->room_name }}</a>
                                            </h4>
                                            <span class="date">₹{{ $row->room_price }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="wpo-contact-widget widget">
                            <h2>How We Can <br> Help You!</h2>
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="/user/ContactUS">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function() {
            $("#commentform").validate({
                rules: {
                    txtname: {
                        required: true
                    },
                    txtreview: {
                        required: true
                    }
                },
                messages: {
                    txtname: {
                        required: "Please Enter Name"

                    },
                    txtreview: {
                        required: "Please Enter Review"
                    }
                }
            })
        })
    </script>
@endsection
