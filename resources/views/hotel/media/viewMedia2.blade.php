@extends('hotel.hotelMaster.hotelMasterpage')

@section('title')
{{Session::get('hotel_name')}} - View Media
@endsection

@section('css')
    <link href="{{ URL::to('/') }}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
@endsection

@section('main')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Media</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    {{-- <li><a class="parent-item" href="/admin/viewMedia">Media</a>&nbsp;<i class="fa fa-angle-right"></i> --}}
                    </li>
                    <li class="active">View Hotel Media</li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box card card-topline-aqua">
                    <div class="card-head">
                        <header>Media</header>
                        <a href="/admin/addMedia"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add Media</button></a>
                    </div>
                    <div class="card-body ">
                        <div class="mdl-tabs mdl-js-tabs">
                            <div class="mdl-tabs__tab-bar tab-left-side">
                                <a href="#tab4-panel" class="mdl-tabs__tab tabs_three is-active">Hotel Media</a>
                                <a href="#tab5-panel" class="mdl-tabs__tab tabs_three">Room Media</a>
                                {{-- <a href="#tab6-panel" class="mdl-tabs__tab tabs_three">Other</a> --}}
                            </div>
                            <div class="mdl-tabs__panel is-active p-t-10" id="tab4-panel">
                                <div class="table-responsive table-scrollable">
                                    <table id="example1" class="display full-width table">
                                        <tbody>
                                            <tr>
                                                <th>No</th>
                                                <th>Hotel</th>
                                                {{-- <th>Category</th> --}}
                                                <th>Image</th>
                                                {{-- <th>Room</th> --}}
                                                <th>Actions</th>
                                            </tr>
                                            {{-- @foreach ($hotelMedia as $row)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $row->hotel_name }}</td>
                                                    {{-- <td>{{ $row->category}}</td> --}}
                                                    {{-- <td><img src="{{ URL::to('/') }}/uploads/media/{{ $row->photo_url }}"
                                                            height="70" width="100" class="iradius" /></td> --}}
                                                    {{-- <td>{{ $row->room_name}}</td> --}}
                                                    {{-- <td>
                                                        <a href="/admin/viewmoreHotelMedia/{{ $row->media_id }}"
                                                            class="btn btn-success btn-sm">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        &nbsp;
                                                        <a href="/admin/editMedia/{{ $row->media_id }}"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        &nbsp;
                                                        <button class="btn btn-danger btn-sm btn-delete"
                                                            data-id="{{ $row->media_id }}"
                                                            data-image="{{ $row->photo_url }}"
                                                            category="{{ $row->category }}" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            <i class="fa fa-trash-o "></i>
                                                        </button>


                                                    </td>

                                                </tr>
                                            @endforeach --}}

                                        </tbody>
                                    </table>
                                </div>
                                    {{-- <div class="text-center">
                                        <div class="full-width text-center p-t-10">
                                            <a href="#" class="btn purple btn-outline btn-circle margin-0">Load
                                                More</a>
                                        </div>
                                    </div> --}}
                            </div>
                            <div class="mdl-tabs__panel p-t-20" id="tab5-panel">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>No</th>
                                                {{-- <th>Hotel</th> --}}
                                                <th>Room</th>
                                                {{-- <th>Category</th> --}}
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                            @foreach ($roomMedia as $row)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    {{-- <td>{{ $row->hotel_name}}</td> --}}
                                                    <td>{{ $row->room_name }}</td>
                                                    {{-- <td>{{ $row->category}}</td> --}}
                                                    <td><img src="{{ URL::to('/') }}/uploads/media/{{ $row->photo_url }}"
                                                            height="70" width="100" class="iradius" /></td>
                                                    <td>
                                                        <a href="/admin/viewmoreRoomMedia/{{ $row->media_id }}"
                                                            class="btn btn-success btn-sm">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        &nbsp;
                                                        <a href="/admin/editMedia/{{ $row->media_id }}"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        &nbsp;
                                                        <button class="btn btn-danger btn-sm btn-delete"
                                                            data-id="{{ $row->media_id }}"
                                                            data-image="{{ $row->photo_url }}" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            <i class="fa fa-trash-o "></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="text-center">
                                    <div class="full-width text-center p-t-10">
                                        <a href="#" class="btn purple btn-outline btn-circle margin-0">Load
                                            More</a>
                                    </div>
                                </div> --}}
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
                    <form action="/admin/deleteMidea" method="POST">
                        @csrf
                        <input type="hidden" name="deleteid" id="deleteid" />
                        <input type="hidden" name="deleteimage" id="deleteimage" />
                        
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
    <script src="{{ URL::to('/') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/pages/table/table_data.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".btn-danger", function() {
                var id = $(this).attr("data-id");
                var image = $(this).attr("data-image");
                
                $("#deleteid").val(id);
                $("#deleteimage").val(image);
            });
        });
    </script>
@endsection
