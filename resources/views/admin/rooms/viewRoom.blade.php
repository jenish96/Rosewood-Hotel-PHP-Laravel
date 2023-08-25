@extends('admin.master.masterpage')

@section('title')
Rosewood - View Rooms
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Rooms</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewRoom">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Rooms</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Rooms</header>
                    <div class="">
                    </div>
                    <div>
                    </div>
                   <a href="/admin/addRoom"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add Rooms</button></a>
                </div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Room</th>
                                    <th>Hotel</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roomData as $row)
                                    
                                <tr>
                                    <td>{{ $loop ->index + 1}}</td>
                                    <td>{{ $row->room_name}}</td>
                                    <td>{{ $row->hotel_name}}</td>
                                    <td>{{ $row->room_price}}</td>
                                    <td>{{ $row->status}}</td>
                                    <td>
                                        <button type="button" class="btn btn-round btn-success">Edit</button>
                                        <button type="button" class="btn btn-round btn-danger">Delete</button>
                                        <a href="/admin/viewmoreRoom/{{$row->room_id}}" type="button" class="btn btn-round btn-primary">View</a>
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


