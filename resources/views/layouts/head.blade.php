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
    <title>@yield('page-title') | SISA </title>

    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!--=========================*
              All CSS
    *===========================-->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Montserrat USE: font-family: 'Montserrat', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
    <!-- SELECT-2 -->
    <link href="{{asset('assets/vendors/select2/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/vendors/select2/select2.min.js')}}"></script>
    <!--=========================*
          Select 2
    *===========================--> 
      <script>
      $(document).ready(function() {
             $('.myselect').select2();
      });
      </script>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
