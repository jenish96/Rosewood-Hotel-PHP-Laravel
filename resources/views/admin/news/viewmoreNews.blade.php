@extends('admin.master.masterpage')

@section('title')
Admin - View News
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View News</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">News</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View News</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row ">
                    {{-- <div class="col-sm-1">
                </div> --}}
                    <div class="col-sm-12">
                        <div class="card card-topline-green">
                            <div class="card-head">
                                <header>News Detail</header>
                                <a href="/admin/viewNews"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        <tr>
                                            <th>Image</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/news/{{ $newsData->news_img}}"
                                                height="200" width="60%"  class="iradius" /></td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $newsData->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ $newsData->description}}</td>
                                        </tr>
                                    
                                        <tr>
                                            <th>Approve</th>
                                            <td>
                                                @if($newsData->is_active == "yes")
                                                <a  type="button" class="label label label-success">Active</a>
                                                @else
                                                <a  type="button" class="label label label-danger">Deactive</a>
                                                @endif
                                            </td>
                                        </tr>
                            
                                        <tr>
                                            <th>Date</th>
                                            <td><?php echo date('d-M-Y',strtotime($newsData->news_date)); ?></td>
                                        </tr>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
