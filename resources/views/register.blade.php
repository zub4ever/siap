<!doctype html>
<html lang="zxx">
<head>
    <!--=========================*
                Met Data
    *===========================-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Devmix Bootstrap 4 Admin Template">

    <!--=========================*
              Page Title
    *===========================-->
    <title>Register | Devmix Bootstrap 4 Admin Template</title>

    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!--=========================*
            Bootstrap Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--=========================*
              Custom CSS
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!--=========================*
               Owl CSS
    *===========================-->
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">

    <!--=========================*
            Font Awesome
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!--=========================*
             Themify Icons
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">

    <!--=========================*
               Ionicons
    *===========================-->
    <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet"/>

    <!--=========================*
              EtLine Icons
    *===========================-->
    <link href="{{asset('assets/css/et-line.css')}}" rel="stylesheet"/>

    <!--=========================*
              Feather Icons
    *===========================-->
    <link href="{{asset('assets/css/feather.css')}}" rel="stylesheet"/>

    <!--=========================*
              Modernizer
    *===========================-->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>

    <!--=========================*
               Metis Menu
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">

    <!--=========================*
               Slick Menu
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">

    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Montserrat USE: font-family: 'Montserrat', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="register-bg">
                <div class="login-overlay"></div>
                <div class="login-left">
                    <img src="{{asset('assets/images/logo-login.svg')}}" alt="Logo">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus elit.</p>
                    <a href="javascript:void(0);" class="btn btn-primary">Learn More</a>
                </div><!--login-left-->
            </div><!--login-bg-->

            <div class="login-form">
                <form>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" id="exampleInputName1">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1">
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" id="exampleInputPassword2">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" class="btn btn-primary" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#"><span class="login_txt">Sign up with</span>  <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#"><span class="login_txt">Sign up with</span>  <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="{{ URL::to('login') }}">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div><!--login-form-->

        </div><!--row-->
    </div><!--container-fluid-->
</div><!--wrapper-->


<!--=========================*
            Scripts
*===========================-->

<!-- Jquery Js -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- bootstrap 4 js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel Js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Metis Menu Js -->
<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
<!-- SlimScroll Js -->
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
<!-- Slick Nav -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
