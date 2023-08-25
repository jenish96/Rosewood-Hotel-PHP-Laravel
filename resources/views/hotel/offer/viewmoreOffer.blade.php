@extends('admin.master.masterpage')

@section('title')
{{Session::get('name')}} - View Offer
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Offer</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Offer</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Offer</li>
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
                                <header>Offer Detail</header>
                                <a href="/hotel/viewOffer"> <button type="button"
                                        class="btn btn-round btn-primary float-right m-2">Back</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-scrollable">
                                    <table class="table" border="1">

                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $offerData->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Discription</th>
                                            <td>{{ $offerData->discription}}</td>
                                        </tr>
                                        <tr>
                                            <th>Start Date</th>
                                            <td>{{ $offerData->start_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>End Date</th>
                                            <td>{{ $offerData->end_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>Is Active</th>
                                            <td>
                                                @if($offerData->is_active == "yes")
                                                <a href="#/no" type="button" class="label label-sm label-success">Active</a>
                                                @else
                                                <a href="#/yes" type="button" class="label label-sm label-danger">Deactive</a>
                                                @endif</td></td></td>
                                        </tr>
                                        <tr>
                                            <th>Coupon</th>
                                            <td>{{ $offerData->coupon_code}}</td>
                                        </tr>
                                        <tr>
                                            <th>Discount</th>
                                            <td>{{ $offerData->discount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Expire</th>
                                            <td>
                                                @if($offerData->is_expire == "yes")
                                                <a href="#/no" type="button" class="label label-sm label-success">Expire</a>
                                                @else
                                                <a href="#/yes" type="button" class="label label-sm label-danger">Unexpire</a>
                                                @endif</td></td>
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

