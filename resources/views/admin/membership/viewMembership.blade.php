@extends('admin.master.masterpage')

@section('title')
Rosewood - View Membership
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Membership</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewMembership">Membership</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Membership</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Membership</header>
                    <div class="">
                    </div>
                   {{-- <a href="/admin/addMembership"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add Membership</button></a> --}}
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>UserName</th>
                                    <th>Plan</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Payment</th>
                                    <th>Transaction No</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($membershipData as $row)
                                <tr>
                                    <td>{{ $loop-> index + 1}}</td>
                                    <td>{{ $row ->user_id }}</td>
                                    <td>{{ $row ->name}}</td>
                                    <td>{{ $row ->amount}}</td>
                                    <td>{{ $row ->start_date}}</td>
                                    <td>{{ $row ->end_date}}</td>
                                    <td>{{ $row ->is_pay}}</td>
                                    <td>{{ $row ->tran_no}}</td>
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


