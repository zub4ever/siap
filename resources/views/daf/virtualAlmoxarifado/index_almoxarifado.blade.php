@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
    Página inicial
@endsection
{{-- This Page Css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/highcharts/css/highcharts.css') }}" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/am-charts/css/am-charts.css') }}" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/highcharts/css/highcharts.css') }}" type="text/css"
          media="all"/>
    <script src="https://code.highcharts.com/highcharts.js"></script>
@endsection
@section('main-content')
    <style type="text/css">

        .single_advisor_profile {
            position: relative;
            margin-bottom: 50px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            z-index: 1;
            border-radius: 15px;
            -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
        }

        .single_advisor_profile .advisor_thumb {
            position: relative;
            z-index: 1;
            border-radius: 15px 15px 0 0;
            margin: auto;
            padding-top: 30px;
            padding-right: 70px;
            padding-bottom: 30px;
            padding-left: -70px;
            background-color: #070116;
            overflow: hidden;
        }

        .single_advisor_profile .advisor_thumb::after {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            position: absolute;
            width: 150%;
            height: 80px;
            bottom: -45px;
            left: -25%;
            content: "";
            background-color: #ffffff;
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        @media only screen and (max-width: 575px) {
            .single_advisor_profile .advisor_thumb::after {
                height: 160px;
                bottom: -90px;
            }
        }

        .single_advisor_profile .advisor_thumb .social-info {
            position: absolute;
            z-index: 1;
            width: 100%;
            bottom: 0;
            right: 30px;
            text-align: right;
        }

        .single_advisor_profile .advisor_thumb .social-info a {
            font-size: 14px;
            color: #020710;
            padding: 0 5px;
        }

        .single_advisor_profile .advisor_thumb .social-info a:hover,
        .single_advisor_profile .advisor_thumb .social-info a:focus {
            color: #3f43fd;
        }

        .single_advisor_profile .advisor_thumb .social-info a:last-child {
            padding-right: 0;
        }

        .single_advisor_profile .single_advisor_details_info {
            position: relative;
            z-index: 1;
            padding: 30px;
            text-align: right;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            border-radius: 0 0 15px 15px;
            background-color: #ffffff;
        }

        .single_advisor_profile .single_advisor_details_info::after {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            position: absolute;
            z-index: 1;
            width: 50px;
            height: 3px;
            background-color: #21e3e7;
            content: "";
            top: 12px;
            right: 30px;
        }

        .single_advisor_profile .single_advisor_details_info h6 {
            margin-bottom: 0.25rem;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .single_advisor_profile .single_advisor_details_info h6 {
                font-size: 14px;
            }
        }

        .single_advisor_profile .single_advisor_details_info p {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            margin-bottom: 0;
            font-size: 14px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .single_advisor_profile .single_advisor_details_info p {
                font-size: 12px;
            }
        }

        .single_advisor_profile:hover .advisor_thumb::after,
        .single_advisor_profile:focus .advisor_thumb::after {
            background-color: #21e3e7;
        }

        .single_advisor_profile:hover .advisor_thumb .social-info a,
        .single_advisor_profile:focus .advisor_thumb .social-info a {
            color: #ffffff;
        }

        .single_advisor_profile:hover .advisor_thumb .social-info a:hover,
        .single_advisor_profile:hover .advisor_thumb .social-info a:focus,
        .single_advisor_profile:focus .advisor_thumb .social-info a:hover,
        .single_advisor_profile:focus .advisor_thumb .social-info a:focus {
            color: #ffffff;
        }

        .single_advisor_profile:hover .single_advisor_details_info,
        .single_advisor_profile:focus .single_advisor_details_info {
            background-color: #000000;
        }

        .single_advisor_profile:hover .single_advisor_details_info::after,
        .single_advisor_profile:focus .single_advisor_details_info::after {
            background-color: #ffffff;
        }

        .single_advisor_profile:hover .single_advisor_details_info h6,
        .single_advisor_profile:focus .single_advisor_details_info h6 {
            color: #ffffff;
        }

        .single_advisor_profile:hover .single_advisor_details_info p,
        .single_advisor_profile:focus .single_advisor_details_info p {
            color: #ffffff;
        }

        #clicavel {
            cursor: pointer;
        }

    </style>

    <body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">

                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3>Olá<span>, Bem-vindo ao Almoxarifado virtual</span></h3>

                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-sm-6 col-lg-3">
                <div id="clicavel" onclick="executaAcao()" class="single_advisor_profile wow fadeInUp"
                     data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                    <div class="advisor_thumb"><img src="/imagem/1.png" alt>

                        <div class="social-info"><a style='font-size:20px'> <strong> Contratos</a> </strong> </div>
                    </div>

                    <div class="single_advisor_details_info">
                        <h6>Contratos</h6>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div id="clicavel" onclick="executaAcaoItens()" class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                    <div class="advisor_thumb"><img src="/imagem/2.png" alt>

                        <div class="social-info"><a style='font-size:20px'> <strong> Itens </a> </strong> </div>
                    </div>

                    <div class="single_advisor_details_info">
                        <h6>Itens</h6>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s"
                     style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                    <div class="advisor_thumb"><img src="/imagem/3.png" alt>

                        <div class="social-info"><a style='font-size:20px'> <strong>Pedidos</a> </strong> </div>
                    </div>

                    <div class="single_advisor_details_info">
                        <h6>Pedidos</h6>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">

                    <div class="advisor_thumb"><img src="/imagem/4.png" alt>

                        <div class="social-info"><a style='font-size:20px'> <strong> Empresas </a> </strong> </div>
                    </div>

                    <div class="single_advisor_details_info">
                        <h6>Empresas</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript"></script>
    <script>
        function executaAcao() {
            window.location = "/ContratoEmpenho";
        }
        function executaAcaoItens() {
            window.location = "/itemAlmo";
        }
    </script>

@endsection
@section('js')

@endsection
