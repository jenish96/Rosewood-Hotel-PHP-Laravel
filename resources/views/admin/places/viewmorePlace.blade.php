@extends('admin.master.masterpage')

@section('title')
    Admin - View Place
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Place</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Place</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Place</li>
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
                                <header>Place Detail</header>
                                <a href="/admin/viewPlace"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        <tr>
                                            <th>Place Name</th>
                                            <td>{{ $placeData->place_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Discription</th>
                                            <td>{{ $placeData->place_discription}}</td>
                                        </tr>
                                        <tr>
                                            <th>Image1</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/place/{{ $placeData->image1 }}"
                                                height="150" width="200" class="iradius"  />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Image2</th>
                                            <td><img src="{{ URL::to('/') }}/uploads/place/{{ $placeData->image2 }}"
                                                height="150" width="200" class="iradius"  /></td>
                                        </tr>
                                        <tr>
                                            <th>Video URL</th>
                                            <td>{{ $placeData->video_url }}</td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>{{ $placeData->city_name }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Minimum Amount</th>
                                            <td>{{ $placeData->min_amount }}</td>
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
