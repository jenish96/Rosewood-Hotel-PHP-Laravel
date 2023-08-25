@extends('admin.master.masterpage')

@section('title')
    Rosewood - View Hotel
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Hotel</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Hotel</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Hotel</li>
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
                                <header>Hotel Detail</header>
                                <a href="/admin/viewHotel"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        <tr>
                                            <th>Hotel Name</th>
                                            <td>{{ $hotelData->hotel_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Owner Name</th>
                                            <td>{{ $hotelData->owner_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Contact No</th>
                                            <td>{{ $hotelData->contact_no}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $hotelData->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Website URl</th>
                                            <td>{{ $hotelData->website_url}}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $hotelData->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Landmark</th>
                                            <td>{{ $hotelData->landmark}}</td>
                                        </tr>
                                        <tr>
                                            <th>Pincode</th>
                                            <td>{{ $hotelData->pincode}}</td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>{{ $hotelData->city_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Hotel Type</th>
                                            <td>{{ $hotelData->hotel_type}}</td>
                                        </tr>
                                        <tr>
                                            <th>Place</th>
                                            <td>{{ $hotelData->place_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>UserName</th>
                                            <td>{{ $hotelData->username}}</td>
                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td>{{ $hotelData->password}}</td>
                                        </tr>
                                        <tr>
                                            <th>Star</th>
                                            <td>{{ $hotelData->star}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $hotelData->is_block}}</td>
                                        </tr>
                                        <tr>
                                            <th>Lattitude</th>
                                            <td>{{ $hotelData->lattitude}}</td>
                                        </tr>
                                        <tr>
                                            <th>Longittude</th>
                                            <td>{{ $hotelData->longittude}}</td>
                                        </tr>
                                        <tr>
                                            <th>certification</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/hotel/{{ $hotelData->certification }}"
                                                height="100" width="100" /></td>
                                        </tr>
                                        <tr>
                                            <th>Approve</th>
                                            <td>{{ $hotelData->is_approve}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
