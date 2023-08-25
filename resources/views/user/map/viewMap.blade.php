@extends('user.master.masterpage')

@section('title')
Rosewood - Map
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
                    <h2>Map</h2>
                    <ul>
                        <li><a href="/user/home">Home</a></li>
                        <li><span>Map</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
{{-- <div class="wpo-destination-area pt-120"> --}}
    {{-- <div class="container"> --}}
    <div id="map" style="width: 100%; height: 600px;"></div> 
{{-- </div> --}}
{{-- </div> --}}
<br>
@endsection

@section('js')
{{-- <script src="{{ URL::to('/') }}/assets/js/js.js"></script> --}}
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCW3HUu7JenB-D0ghr1p-8wn7FTeq1rmj4" 
          type="text/javascript"></script>
          <script type="text/javascript">
            var locations = [
                @foreach($hotelData as $row)
              ['{{$row->hotel_name}}',{{$row->lattitude}}, {{$row->longittude}}],
                @endforeach
            ];
            
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 12,
              center: new google.maps.LatLng(21.1702,72.8311),
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