@extends('user.master.masterpage')

@section('title')
Rosewood - Contact Us
@endsection

@section('css')

@endsection

@section('main')
 <!-- start of breadcumb-section -->
 <div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="/user/home">Home</a></li>
                        <li><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->
<br>
@if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="office-info">
                    <div class="row">
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Address</h2>
                                    <p>Rosewood Hotel,<br> Surat - 395006</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Email Us</h2>
                                    <p>rosewoodhotel3@gmail.com</p>
                                    <br><br>
                                </div>
                            </div>
                        </div> 
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Call Now</h2>
                                    <p>+91 987 123 4567</p>
                                    <br><br>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="wpo-contact-title">
                    <h2>Have Any Question?</h2>
                    <p>Its Following form submit .<br>Then we will contact you later.</p>
                </div>
                <div class="wpo-contact-form-area">
                    <form method="post" class="contact-validation-active" action="/user/addContactUS" id="form1">
                        @csrf
                        
                        <div class="fullwidth">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        </div>

                        <div class="fullwidth">
                        <input type="email" class="form-control" name="email" placeholder="Your Email"  id="email" >                    
                        </div>

                        <div class="fullwidth">
                            <textarea type="text" class="form-control" name="message" id="message" placeholder="Your Message"></textarea>
                        </div>
                        
                       
                        <div class="submit-area">
                            <button type="submit" class="theme-btn">Get In Touch</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>

                        
                        
                    </form>
                </div>
                <br><br><br><br><br><br><br>
            </div>                
        </div>
    </div> <!-- end container -->
</section>
@endsection

@section('js')

<script>
    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
<script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    $(document).ready(function() {
        $("#form1").validate({
            rules: {
                name: {
                    required: true
                },
                email:{
                    required:true,
                    email:true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Please Enter Name"
                    
                },
                email:{
                    required:"Please Enter Your Email",
                    email:"Please Enter Email"
                },
                message: {
                    required: "Please Enter Your Message"
                }
            }
        })
    })
</script>


@endsection