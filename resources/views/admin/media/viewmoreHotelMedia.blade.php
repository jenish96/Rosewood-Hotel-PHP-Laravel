@extends('admin.master.masterpage')

@section('title')
{{Session::get('name')}} - View Media
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Media</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    {{-- <li><a class="parent-item" href="#">Media</a>&nbsp;<i class="fa fa-angle-right"></i> --}}
                    </li>
                    <li class="active">View Hotel Media</li>
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
                                <header>Hotel Detail</header>
                               
                                <a href="/admin/viewMedia"> <button type="button"
                                    class="btn btn-round btn-primary float-right m-2">Back</button></a>
                                    
                               
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        <tr>
                                            <th>Hotel Name</th>
                                            <td>{{ $mediaData->hotel_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{ $mediaData->category}}</td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/media/{{ $mediaData->photo_url }}"
                                                height="150" width="250" class="iradius"/></td>
                                        </tr>
                                        <tr>
                                            <th>Video URL</th>
                                            <td>{{ $mediaData->video_url}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Room Name</th>
                                            <td>{{ $mediaData->room_name }}</td>
                                        </tr> --}}
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