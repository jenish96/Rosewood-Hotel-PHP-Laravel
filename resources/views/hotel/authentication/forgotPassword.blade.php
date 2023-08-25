<!DOCTYPE html>
<html>


<!-- Mirrored from radixtouch.com/templates/admin/spice/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Dec 2021 08:11:40 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Login</title>
    <!-- icons -->
    <link href="{{ URL::to('/')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::to('/')}}/assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="{{ URL::to('/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{ URL::to('/')}}/assets/css/pages/extra_pages.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::to('/')}}/assets/img/favicon.ico" />
</head>


<body>
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
             
                @if(session()->has('message'))
                <div class="alert alert-message">
                    {{ session()->get('message') }}
                </div>
                @endif
                @if(session()->has('danger'))
                <div class="alert alert-danger">
                    {{ session()->get('danger') }}
                </div>
                @endif
                
                <form class="login100-form validate-form" action="/hotel/checkEmail" id="form1" method="post">
                    @csrf
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-flower"></i>
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Forget Password
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Enter Email">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                   
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Submit
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- start js include path -->
    <script src="{{ URL::to('/')}}/assets/plugins/jquery/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="{{ URL::to('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ URL::to('/')}}/assets/js/pages/extra_pages/login.js"></script>
    <!-- end js include path -->
    {{-- <script>
        $(document).ready(function() {
        $("#form1").validate({
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "Please Enter UserName"
                },
                password: {
                    required: "Please Enter Password"
                }
            }
        })
        })
    </script> --}}
</body>


<!-- Mirrored from radixtouch.com/templates/admin/spice/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Dec 2021 08:11:41 GMT -->

</html>