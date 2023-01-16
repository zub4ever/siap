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
        <div class="page-container" id="teste">

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
                    {{-- @include('mensagem.flash-message') --}}
                    @yield('main-content')
                    <!--Contenido-->
                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                        <!-- Main content -->
                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"></h3>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!--Conteudo-->
                                                    @yield('conteudo')
                                                    <!--Fim Conteudo-->
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </section>
                    </div><!-- /.col -->
             

                
            
            <!--Fin-Contenido-->



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
@include('mensagem.alert-message')
</body>
</html>
