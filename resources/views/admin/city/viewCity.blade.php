@extends('admin.master.masterpage')

@section('title')
    Rosewood - View City
@endsection

@section('css')
    <link href="{{ URL::to('/') }}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">City</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/admin/viewCity">City</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View City</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-aqua">
                    <div class="card-head">

                        <header>View City</header>
                        <div class="">
                        </div>
                        <div>
                        </div>
                        <a href="/admin/addCity"> <button type="button"
                                class="btn btn-round btn-primary float-right m-2">Add City</button></a>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if (session()->has('danger'))
                        <div class="alert alert-danger">
                            {{ session()->get('danger') }}
                        </div>
                    @endif
                    <div class="card-body ">
                        <div class="table-scrollable">
                            <table id="example1" class="display full-width">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cityData as $row)

                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $row->city_name }}</td>
                                            <td>{{ $row->state_name }}</td>
                                            <td>
                                                <a href="/admin/editCity/{{ $row->city_id }}"
                                                    class="btn btn-round btn-success">Edit</a>
                                                <button type="button" class="btn btn-round btn-danger btn-delete"
                                                    data-id="{{ $row->city_id }}" data-toggle="modal"
                                                    data-target="#exampleModal">Delete</button>
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
                    <form action="/admin/deleteCity" method="POST">
                        @csrf
                        <input type="hidden" name="deleteid" id="deleteid" />
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
            $(".btn-delete").click(function() {
                var id = $(this).attr("data-id");
                $("#deleteid").val(id);
            });
        });
    </script>
@endsection
