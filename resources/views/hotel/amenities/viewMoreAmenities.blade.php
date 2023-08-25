@extends('hotel.hotelMaster.hotelMasterpage')

@section('title')
{{Session::get('hotel_name')}} - View Amenities
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Amenities</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Hotel</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Amenities</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row ">
                    {{-- <div class="col-sm-1">
                </div> --}}
                    <div class="col-sm-12">
                        <div class="card card-topline-green">
                            <div class="card-head">
                                <header>Hotel Amenities</header>
                                <a href="/hotel/viewAmenities"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        {{-- <tr>
                                            <th>Hotel Name</th>
                                            <td>{{ $hotelAmenitiesData->hotel_name}}</td>
                                        </tr> --}}
                                        <tr>
                                            <th>Amenities Name</th>
                                            <td>{{ $hotelAmenitiesData->am_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Remark</th>
                                            <td>{{ $hotelAmenitiesData->remark}}</td>
                                        </tr>
                                        <tr>
                                            <th>Image1</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $hotelAmenitiesData->image1 }}"
                                                height="70" width="100" class="iradius"/></td>
                                        </tr>
                                        <tr>
                                            <th>Image2</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $hotelAmenitiesData->image2 }}"
                                                height="70" width="100" class="iradius" /></td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
