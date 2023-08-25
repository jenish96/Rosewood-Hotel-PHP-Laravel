@extends('admin.master.masterpage')

@section('title')
{{Session::get('name')}} - View Subscriber
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Subscriber</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                {{-- <li><a class="parent-item" href="/admin/viewContactUs">Contact Us</a>&nbsp;<i class="fa fa-angle-right"></i> --}}
                </li>
                <li class="active">View Subscriber</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Subscriber</header>
                    <div class="">
                    </div>
                    <div>
                    </div>
                    {{-- <a href="/admin/addOffer"> <button type="button" class="btn btn-round btn-primary float-right m-2">Add offer</button></a> --}}
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>No</th>                                    
                                    <th>Email</th>                                                
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($subscriberData as $row)
                                
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>                                    
                                    <td>{{ $row->email}}</td>                                     
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
















