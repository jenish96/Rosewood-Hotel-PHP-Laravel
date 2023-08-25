@extends('admin.master.masterpage')

@section('title')
Rosewood - View Places
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Places</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewPlace">Places</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Places</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Places</header>
                    <div class="">
                    </div>
                   <a href="/admin/addPlace"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add Place</button></a>
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
                                    <th>Place Name</th>
                                    <th>Description</th>
                                    <th>Image1</th>
                                    <th>Image2</th>
                                    <th>Video URL</th>
                                    <th>City</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($placeData as $row)
                                <tr>
                                    <td>{{ $loop-> index + 1}}</td>
                                    <td>{{ $row ->place_name}}</td>
                                    <td>{{ Illuminate\Support\Str::limit($row ->place_discription, 20) }}</td>
                                    <td><img src="{{ URL::to('/') }}/uploads/place/{{ $row ->image1}}"
                                        height="70" width="80" /></td>
                                        <td><img src="{{ URL::to('/') }}/uploads/place/{{ $row ->image2}}"
                                            height="70" width="80" /></td>
                                    <td>{{ $row ->video_url}}</td>
                                    <td>{{ $row ->city_name}}</td>
                                    <td>
                                        <a href="/admin/editPlace/{{$row->place_id}}" type="button" class="btn btn-round btn-success">Edit</a>
                                        <button type="button" class="btn btn-round btn-danger btn-delete"
                                        data-id="{{ $row->place_id}}" data-image1="{{ $row->image1}}"
                                        data-image2="{{ $row->image2}}"
                                        data-video="{{ $row->video_url}}"
                                        data-toggle="modal" data-target="#exampleModal">Delete</button>
                                        {{-- <button type="button" class="btn btn-round btn-primary">View</button> --}}
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
            <form action="/admin/deletePlace" method="POST">
                @csrf
          <input type="hidden" name="deleteid" id="deleteid"/>
          <input type="hidden" name="deleteimage1" id="deleteimage1"/>
          <input type="hidden" name="deleteimage2" id="deleteimage2"/>
          <input type="hidden" name="deletevideo" id="deletevideo"/>
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
            var image1 = $(this).attr("data-image1");
            var image2 = $(this).attr("data-image2");
            var video = $(this).attr("data-video");
            $("#deleteid").val(id);
            $("#deleteimage1").val(image1);
            $("#deleteimage2").val(image2);
            $("#deletevideo").val(video);
        });
    });
    
    </script>
@endsection


