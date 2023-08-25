@extends('admin.master.masterpage')

@section('title')
Rosewood - View Articles
@endsection

@section('css')
<link href="{{ URL::to('/')}}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Articles</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="/admin/viewArticles">Articles</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Articles</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    
                    <header>View Articles</header>
                    <div class="">
                    </div>
                    <div>
                    </div>
                   
                </div>
                <div class="row">
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Auther</th>
                                    <th>User</th>
                                    <th>Approve</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($articlesData as $row)
                                
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{Str::limit($row->description, 20)}}</td> 
                                    <td>{{ $row->auther}}</td>  
                                    <td>{{ $row->username}}</td>   
                                    <td>
                                        @if($row->is_approve == "yes")
                                        <a href="/admin/articlesIsApprove/{{ $row->articles_id  }}/no" type="button" class="btn btn-round btn-success">Approve</a>
                                        @else
                                        <a href="/admin/articlesIsApprove/{{ $row->articles_id  }}/yes" type="button" class="btn btn-round btn-danger">NotApprove</a>
                                        @endif

                                    </td> 
                                    <td>
                                        {{-- <a href="/admin/editHotel/{{ $row->hotel_id }}" type="button" class="btn btn-round btn-success">Edit</a> --}}
                                        {{-- <button type="button" class="btn btn-round btn-danger btn-delete"
                                        data-id="{{ $row->articles_id}}" 
                                        data-toggle="modal" data-target="#exampleModal">Delete</button> --}}
                                        <a href="/admin/viewmoreArticles/{{ $row->articles_id}}" type="button" class="btn btn-round btn-primary">View</a>
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
















