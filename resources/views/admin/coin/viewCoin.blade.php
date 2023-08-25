@extends('admin.master.masterpage')

@section('title')
Rosewood - Coins
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Coins</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewCoin">Coins</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Coins</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Coins</header>
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
                                    <th>User</th>
                                    <th>Coin</th>
                                    <th>Booking ID</th>
                                    <th>Type</th>
                                    <th>Remark</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($coinData as $row)
                                
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $row->user_id }}</td>
                                    <td>{{ $row->coins}}</td>  
                                    <td>{{ $row->booking_id}}</td>  
                                    <td>{{ $row->type}}</td> 
                                    <td>{{ $row->remark}}</td> 
                                    <td>{{ $row->coin_date}}</td>
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
















