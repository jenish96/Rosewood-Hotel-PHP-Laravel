@extends('user.master.masterpage')

@section('title')
Rosewood - Place Details
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
                            <h2>{{$placeData->place_name}}</h2>
                            <ul>
                                <li><a href="/user/home">Home</a></li>
                                <li><a href="/user/viewPlace" <span>Places</span></li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->
        <!-- start of wpo-destination-single-section -->
        <section class="wpo-destination-single-section section-padding">
            <div class="container">
                <div class="row">
                    {{-- @foreach($placeData as $row) --}}
                    <div class="col-lg-8 col-md-12">
                        <div class="wpo-destination-single-wrap">
                            <div class="wpo-destination-single-content">
                                <img src="{{URL::to('/')}}/uploads/place/{{$placeData->image1}}" width="738" height="410" alt="">
                                <div class="wpo-destination-single-content-des">
                                    <h2>{{$placeData->place_name}}</h2>
                                    <p>{{$placeData->place_discription}}</p>
                                    <p><b style="font-size: 18px;">Video URL&nbsp;:</b><a href="{{$placeData->video_url}}">{{$placeData->video_url}}</a></p>
                                    {{-- <p>{{$placeData->place_discription}}</p> --}}
                                    <div class="wpo-destination-single-sub-img">
                                        <ul>
                                            <li><img src="{{URL::to('/')}}/uploads/place/{{$placeData->image1}}"  width="354" height="263" alt=""></li>
                                            <li><img src="{{URL::to('/')}}/uploads/place/{{$placeData->image2}}" width="354" height="263" alt=""></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-area">
                            <div class="room-title">
                                <h2>Map</h2>
                            </div>
                            <div class="map-area">
                                <div id="map" style="width: 100%; height: 400px;"></div> 
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                    <div class="col-lg-4 col-md-8">
                        <div class="wpo-single-sidebar room-sidebar">
                            <div class="wpo-service-widget widget">
                                <h2>All Destination</h2>
                                <ul>
                                    @foreach($allPlaceData as $row)
                                    <li><a href="/user/placeDetails/{{$row->place_id}}" href>{{$row->place_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="wpo-newsletter-widget widget">
                                <h2>Newsletter</h2>
                                <p>Join 20,000 Sabscribers!</p>
                                <form class="form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <span>By Subscribe up you agree to our <a >Rosewood Hotel</a></span>
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
        </section>
        
@endsection

@section('js')
{{-- <script src="{{ URL::to('/') }}/assets/js/js.js"></script> --}}
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCW3HUu7JenB-D0ghr1p-8wn7FTeq1rmj4" 
          type="text/javascript"></script>
          <script type="text/javascript">
            var locations = [
                
              ['{{$placeData->place_name}}',{{$placeData->lattitude}}, {{$placeData->longittude}}],
                
            ];
            
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 18,
              center: new google.maps.LatLng({{$placeData->lattitude}},{{$placeData->longittude}}),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
            
            for (i = 0; i < locations.length; i++) {  
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
              });
              
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
          </script>
@endsection