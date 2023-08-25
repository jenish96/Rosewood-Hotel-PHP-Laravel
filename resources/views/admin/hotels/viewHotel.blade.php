@extends('admin.master.masterpage')

@section('title')
Rosewood - View Hotel
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Hotel</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewHotel">Hotel</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Hotel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Hotel</header>
                    <div class="">
                    </div>
                    <div>
                    </div>
                   <a href="/admin/addHotel"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add Hotel</button></a>
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
                                    <th>Hotel Name</th>
                                    <th>Contact No</th>
                                    <th>City</th>
                                    <th>Hotel Type</th>
                                    <th>Place</th>
                                    <th>Approve</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($hotelData as $row)
                                
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $row->hotel_name}}</td> 
                                    <td>{{ $row->contact_no}}</td>  
                                    <td>{{ $row->city_name}}</td>   
                                    <td>{{ $row->hotel_type}}</td> 
                                    <td>
                                        @if($row->is_approve == "yes")
                                        <a href="/admin/hotelIsApprove/{{ $row->hotel_id }}/no" type="button" class="btn btn-round btn-success">Yes</a>
                                        @else
                                        <a href="/admin/hotelIsApprove/{{ $row->hotel_id }}/yes" type="button" class="btn btn-round btn-danger">No</a>
                                        @endif

                                    </td> 
                                    <td>
                                        @if($row->is_block == "yes")
                                        <a href="/admin/hotelIsBlock/{{ $row->hotel_id }}/no" type="button" class="btn btn-round btn-success">Yes</a>
                                        @else
                                        <a href="/admin/hotelIsBlock/{{ $row->hotel_id }}/yes" type="button" class="btn btn-round btn-danger">No</a>
                                        @endif

                                    </td> 
                                    <td>
                                        <a href="/admin/editHotel/{{ $row->hotel_id }}" type="button" class="btn btn-round btn-success">Edit</a>
                                        <button type="button" class="btn btn-round btn-danger btn-delete"
                                        data-id="{{ $row->hotel_id}}" data-image="{{ $row->certification}}"
                                        data-toggle="modal" data-target="#exampleModal">Delete</button>
                                        <a href="/admin/viewmoreHotel/{{ $row->hotel_id }}" type="button" class="btn btn-round btn-primary">View</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete record?
        </div>
        <div class="modal-footer">
            <form action="/admin/deleteHotel" method="POST">
                @csrf
          <input type="hidden" name="deleteid" id="deleteid"/>
          <input type="hidden" name="deleteimage" id="deleteimage"/>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary">Yes</button>
            </form>
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
<script>
$(document).ready(function(){
    $(".btn-delete").click(function(){
        var id = $(this).attr("data-id");
        var image = $(this).attr("data-image");
        $("#deleteid").val(id);
        $("#deleteimage").val(image);
    });
});
</script>
@endsection
















