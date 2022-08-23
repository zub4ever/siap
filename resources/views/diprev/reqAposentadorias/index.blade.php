@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Página inicial
@endsection
{{-- This Page Css --}}
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendors/highcharts/css/highcharts.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets/vendors/am-charts/css/am-charts.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets/vendors/charts/morris-bundle/morris.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">


@endsection
@section('main-content')

<div class="row">

    <div class="cards-lista">
        <a href="{{route('reqVoluntaria.index')}}">
            <div class="cardAp 1">

                <div class="card_image">
                    <img src="/imagem/voluntaria.png" />
                </div>
                
            </div>
        </a>


        <div class="cardAp 2">
            <div class="card_image">
                <img src="/imagem/compulsoria.png" />
            </div>
            
        </div>

        <div class="cardAp 3">
            <div class="card_image">
                <img src="/imagem/apinvalidez.png" />
            </div>
            
        </div>

        <div class="cardAp 4">
            <div class="card_image">
                <img src="/imagem/especial.png" />
            </div>            
        </div>

    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <div class="col-sm-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">                       
                     
                    <div class="col-sm-5">
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                        <figure class="highcharts-figure">
                            <div id="containerAlmo">
                            </div>
                        </figure>
                    </div>
                </div>


            </div>
        </div>
    </div>




</div>
@endsection
@section('js')
<script src="{{asset('js/apRequerimentos/requerimentos.js')}}"></script>

@endsection