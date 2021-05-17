<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>

        @include('layouts.head')

        @yield('css')

    </head>

    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--=========================*
             Page Container
    *===========================-->
    <div class="page-container">

        <!--=========================*
                 Side Bar Menu
        *===========================-->
        @include('layouts.sidebar')
        <!--=========================*
               End Side Bar Menu
        *===========================-->

        <!--==================================*
                   Main Content Section
        *====================================-->
        <div class="main-content">

            <!--==================================*
                       Header Section
            *====================================-->
            @include('layouts.header')
            <!--==================================*
                       End Header Section
            *====================================-->

            <!--==================================*
                       Main Section
            *====================================-->
            <div class="main-content-inner">
                @yield('main-content')
            </div>
            <!--==================================*
                       End Main Section
            *====================================-->
        </div>
        <!--=================================*
               End Main Content Section
        *===================================-->

        <!--=================================*
                      Footer Section
        *===================================-->
        @include('layouts.footer')
        <!--=================================*
                    End Footer Section
        *===================================-->

    </div>
    <!--=========================*
            End Page Container
    *===========================-->

    <!--=========================*
          Offset Sidebar Menu
    *===========================-->
    @include('layouts.offset-menu')
    <!--================================*
             End Offset Sidebar Menu
    *==================================-->




    <!--=========================*
                Scripts
    *===========================-->

    @include('layouts.scripts')

    @yield('js')

    </body>
</html>
