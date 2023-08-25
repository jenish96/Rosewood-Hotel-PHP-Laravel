@extends('admin.master.masterpage')

@section('title')
    Rosewood - View Room
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Room</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Room</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Room</li>
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
                                <header>Room Detail</header>
                                <a href="/admin/viewRoom"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">
                                        <tr>
                                            <th>Room No</th>
                                            <td>{{ $roomData->room_no }}</td>
                                        </tr>
                                        <tr>
                                    <th>Hotel</th>
                                    <td>{{ $roomData->hotel_name }}</td>
                                </tr>
                                <tr>
                                    <th>Room</th>
                                    <td>{{ $roomData->room_name }}</td>
                                </tr>
                                <tr>
                                    <th>Discription</th>
                                    <td>{{ $roomData->discription }}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $roomData->room_price }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $roomData->status }}</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>{{ $roomData->room_type }}</td>
                                </tr>
                                <tr>
                                    <th>Capacity</th>
                                    <td>{{ $roomData->capacity }}</td>
                                </tr>
                                <tr>
                                    <th>Breakfast</th>
                                    <td>{{ $roomData->is_breakfast }}</td>
                                </tr>
                                <tr>
                                    <th>Dinner</th>
                                    <td>{{ $roomData->is_dinner }}</td>
                                </tr>
                                <tr>
                                    <th>Breakfast Price</th>
                                    <td>{{ $roomData->breakfast_price }}</td>
                                </tr>
                                <tr>
                                    <th>Dinner Price</th>
                                    <td>{{ $roomData->dinner_price }}</td>
                                </tr>
                                <tr>
                                    <th>Beds</th>
                                    <td>{{ $roomData->beds }}</td>
                                </tr>
                                <tr>
                                    <th>Person Price</th>
                                    <td>{{ $roomData->person_price }}</td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection