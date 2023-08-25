@extends('admin.master.masterpage')

@section('title')
Rosewood - View Hotel Amenities
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Hotel Amenities</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewHotelAmenities">Hotel Amenities</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Hotel Amenities</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Hotel Amenities</header>
                    <div class="">
                    </div>
                    <div>
                    </div>
                   {{-- <a href="/admin/addHotelAmenities"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add Hotel Amenities</button></a> --}}
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Hotel</th>
                                    <th>Amenities ID</th>
                                    <th>Remark</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hotelAmenitiesData as $row)
                                    
                                <tr>
                                    <td>{{ $loop ->index + 1}}</td>
                                    <td>{{ $row->hotel_id}}</td>
                                    <td>{{ $row->amenities_id}}</td>
                                    <td>{{ $row->remark}}</td>
                                    <td><img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $row->image1 }}"
                                        height="70" width="100" /></td>
                                <td><img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $row->image2 }}"
                                        height="70" width="100" /></td>
                                <td><img src="{{ URL::to('/') }}/uploads/hotelAmenities/{{ $row->image3 }}"
                                        height="70" width="100" /></td>
                                <td>
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


