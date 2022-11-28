<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default-light/user_login_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:38:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login | Admin </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admintemp/admins/surya/mart/assets/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('admintemp/admins/surya/mart/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admintemp/admins/surya/mart/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/admins/surya/mart/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admintemp/admins/surya/mart/assets/css/users/login-3.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->    
</head>
<body class="login">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <form class="form-login" method="post" action="/loginproses">
        @csrf
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="{{ asset('admintemp/admins/surya/mart/assets/img/logo-3.png') }}" class="theme-logo">
            </div>
            <div class="col-md-12">

                {{-- <div class="social text-center">
                    <h5 class="mb-4">Sign in with</h5>
                    <button type="button" class="btn btn-outline-primary rounded-circle mb-3 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i></button>
                    <button type="button" class="btn btn-outline-info rounded-circle mb-3 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i></button>
                    <button type="button" class="btn btn-outline-danger rounded-circle mb-3 mr-2"><i class="flaticon-google-plus-bold flaticon-circle-p"></i></button>
                </div>

                <div class="division mt-4 mb-5">
                    <div class="line line-left"></div>
                        <span>or</span>
                    <div class="line line-right"></div>
                </div> --}}

                <label for="inputEmail" class="">Login</label>                
                <input type="email" id="inputEmail" name="email" class="form-control mb-4" placeholder="Login" required >                    
                <label for="inputPassword" class="">Password</label>                    
                <input type="password" name="password" id="inputPassword" class="form-control mb-5" placeholder="Password" required>


                {{-- <div class="checkbox d-flex justify-content-center mb-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                </div> --}}
                <button type="submit" class="btn btn-gradient-dark btn-rounded btn-block">Sign in</button>
                {{-- <div class="forgot-pass text-center mt-3">
                    <a href="user_pass_recovery_3.html">Forgot Password ?</a>
                </div> --}}
                <div class="forgot-pass text-center mt-4">
                    <a href="/">Back</a>
                </div>

            </div>

            <div class="col-md-12">
                <div class="login-text text-center">
                    <p class="mt-3 text-black">New Here? <a href="user_register_3.html" class="">Register </a> as new user !</p>
                </div>
            </div>
        </div>
    </form>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admintemp/admins/surya/mart/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admintemp/admins/surya/mart/assets/js/loader.js') }}"></script>
    <script src="{{ asset('admintemp/admins/surya/mart/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admintemp/admins/surya/mart/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/preview-equation/default-light/user_login_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Oct 2022 08:38:47 GMT -->
</html>