@extends('admin.master.masterpage')

@section('title')
Rosewood - View User
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">User</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewUser">User</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View User</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View User</header>
                    <div class="">
                    </div>
                   <a href="/admin/addUser"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add User</button></a>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>UserName</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Verified</th>
                                    <th>Register Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userData as $row)
                                <tr>
                                    <td>{{ $loop-> index + 1}}</td>
                                    <td>{{ $row ->username }}</td>
                                    <td>{{ $row ->contact_no}}</td>
                                    <td>{{ $row ->email}}</td>
                                    <td>{{$row ->password}}</td>
                                    <td>
                                        @if($row->is_verify == "yes")
                                        <a href="/admin/userIsVerified/{{ $row->user_id }}/no" type="button" class="btn btn-round btn-success">Verified</a>
                                        @else
                                        <a href="/admin/userIsVerified/{{ $row->user_id }}/yes" type="button" class="btn btn-round btn-danger">Unverified</a>
                                        @endif</td>
                                    <td>{{ $row ->regi_date}}</td>
                                    <td>
                                        <button type="button" class="btn btn-round btn-success">Edit</button>
                                        <button type="button" class="btn btn-round btn-danger">Delete</button>

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


