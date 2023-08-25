@extends('user.master.masterpage')

@section('title')
    Rosewood - Booking Member
@endsection

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('main')
    <div class="page-wrapper">
        
        <!-- wpo-checkout-area start-->
        <div class="wpo-checkout-area section-padding">
            <div class="container">
                {{-- <form> --}}
                    @if(Session::get('user_id'))
                    <div class="checkout-wrap">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 col-12">                              
                                <div class="caupon-wrap s2">
                                    <div class="biling-item">
                                        <div class="coupon coupon-3">
                                            <label id="toggle2">Booking Member</label>
                                        </div>
                                        <div class="billing-adress" id="open2">
                                            <div class="contact-form form-style">
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <form action="/user/addMemberDetails" id="form1" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        
                                                        <input type="hidden" placeholder="" value="{{$bookingData->booking_id}}" id="bid" name="bid">
                                                        

                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="txtname">Name</label>
                                                            <input type="text" placeholder="" id="txtname" name="txtname">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="txtContact">Contact No</label>
                                                            <input type="text"  placeholder="" id="txtContact" name="txtContact">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="fname2">BirthDate</label>
                                                            <input type="date"  id="txtbirth" name="txtbirth">
                                                        </div>    
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label for="fname2">Certification</label>
                                                             Only Adharcard OR Pancard Valid*
                                                            <input type="file"  id="crtImage" name="crtImage">
                                                        </div>                                                      
                                                        <div class="submit-btn-area">
                                                            <ul>
                                                                <li><button class="theme-btn" type="submit">Save &
                                                                        continue</button></li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="biling-item-2">                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>                             
                            </div>                        
                        </div>
                    </div>
                    @else
                    <script type="text/javascript">
                        window.location = "{{ url('/user/error') }}";
                    </script>
                    @endif
                {{-- </form> --}}
            </div>
        </div>
        <!-- wpo-checkout-area end-->
    </div>
@endsection

@section('js')
<script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
<script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
<script>


$(document).ready(function() {
    $("#form1").validate({
        rules: {
            checkIn: 
            {
                required: true
            },
            checkOut: 
            {
                required: true
            },
            txtguest: 
            {
                required: true
            },
            txtcontact: 
            {
                required: true
            },
            txtemail: 
            {
                required: true,
                email:true
            }
        },
        messages: {
            checkIn: 
            {
                required: "Please select Date !"
            },
            checkOut: 
            {
                required: "Please select Date !"
            },
            txtguest: 
            {
                required: "Please enter Guest !"
            },
            txtcontact: 
            {
                required: "Please Enter Contact No !"
            },
            txtemail: 
            {
                required: "Please Enter Email !",
                email :"Please Enter Email"
            }
           
        }
    });
    
});
</script>
@endsection
