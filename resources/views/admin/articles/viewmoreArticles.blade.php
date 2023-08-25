@extends('admin.master.masterpage')

@section('title')
    Rosewood - View Articles
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Articles</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Articles</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Articles</li>
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
                                <header>Articles Detail</header>
                                <a href="/admin/viewArticles"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $articlesData->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ $articlesData->description}}</td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/articles/{{ $articlesData->image1}}"
                                                height="100" width="100" /></td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/articles/{{ $articlesData->image2}}"
                                                height="100" width="100" /></td>
                                        </tr>
                                        <tr>
                                            <th>Video URl</th>
                                            <td>{{ $articlesData->video_url}}</td>
                                        </tr>
                                        <tr>
                                            <th>User</th>
                                            <td>{{ $articlesData->username}}</td>
                                        </tr>
                                        <tr>
                                            <th>Approve</th>
                                            <td>{{ $articlesData->is_approve}}</td>
                                        </tr>
                                        <tr>
                                            <th>Refrence Link</th>
                                            <td>{{ $articlesData->ref_link}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td>{{ $articlesData->article_date}}</td>
                                        </tr>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
