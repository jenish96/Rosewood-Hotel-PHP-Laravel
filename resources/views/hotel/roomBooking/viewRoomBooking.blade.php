@extends('hotel.hotelMaster.hotelMasterpage')

@section('title')
{{Session::get('hotel_name')}} - Room Booking
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Room Booking</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/hotel/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/hotel/viewRoomBooking">Room Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Room Booking</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Room-Booking</header>
                    <div class="">
                    </div>
                    <div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Booking Id</th>
                                    <th>Room Id</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($roombookingData as $row)
                                
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $row->booking_id }}</td>
                                    <td>{{ $row->room_id}}</td>  
                                    
                                    <td>
                                        <button type="button" class="btn btn-round btn-success">Edit</button>
                                        <button type="button" class="btn btn-round btn-danger">Delete</button>
                                        <button type="button" class="btn btn-round btn-primary">View</button>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- data tables -->
<script src="{{ URL::to('/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
<script src="{{ URL::to('/')}}/assets/js/pages/table/table_data.js"></script>
@endsection
















