@extends('user.master.masterpage')

@section('title')
    Rosewood - Feedback
@endsection

@section('css')
@endsection

@section('main')
    <!-- start of breadcumb-section -->
    @if (Session::get('user_id'))
        {

        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Feedback</h2>
                            <ul>
                                <li><a href="/user/home">Home</a></li>
                                <li><span>Feedback</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <!-- start wpo-contact-pg-section -->
        <section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="wpo-contact-title">
                            <h2>Feedback</h2>

                        </div>
                        <div class="wpo-contact-form-area">
                            <form method="post" class="contact-validation-active" action="/user/insertfeedback" id="form1">
                                @csrf

                                <div class="fullwidth">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="fullwidth">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                </div>
                                <div class="fullwidth">
                                    <textarea type="text" class="form-control" name="feedback" id="feedback" placeholder="Your Feedback"></textarea>

                                </div>



                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Submit</button>
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
        }
    @else{
        <script type="text/javascript">
            window.location = "{{ url('/user/error') }}";
        </script>
    @endif
    <!-- end wpo-contact-pg-section -->
@endsection

@section('js')
    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function() {
            $("#form1").validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    feedback: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Please Enter Name"

                    },
                    email: {
                        required: "Please Enter Your EMail",
                        email: "Please Enter EMail"
                    },
                    feedback: {
                        required: "Please Enter Your feedback"
                    }
                }
            })
        })
    </script>
@endsection
