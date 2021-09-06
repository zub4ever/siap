@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Página inicial
@endsection
{{-- This Page Css --}}
@section('css')
<!--=========================*
               AM Chart
    *===========================-->
<link rel="stylesheet" href="{{ asset('assets/vendors/am-charts/css/am-charts.css') }}" type="text/css" media="all" />
<!--=========================*
               Morris Css
    *===========================-->
<link rel="stylesheet" href="{{ asset('assets/vendors/charts/morris-bundle/morris.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--=========================*
               Datatable
    *===========================-->
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css"
      href="{{ asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">
@endsection

@section('main-content')
<div class="row">
    <div class="col-lg-4">
        <div class="w3-card-4" style="width:100%;">
            <header class="w3-container w3-blue">
                <h1>Servidores</h1>
            </header>

            <div class="w3-container">

            </div>

            <footer class="w3-container w3-blue">
                <h5>Total de servidores</h5> <h3>{{count($serve)}}</h3>
            </footer>
        </div>
    </div>
    <div class="col-lg-4">  
        <div class="w3-card-4" style="width:100%;">
            <header class="w3-container w3-green">
                <h1>Aposentadorias</h1>
            </header>

            <div class="w3-container">

            </div>

            <footer class="w3-container w3-green">
                <h5>Total de Aposentadorias</h5> 
            </footer>
        </div>
    </div>
   <div class="col-lg-4">  
        <div class="w3-card-4" style="width:100%;">
            <header class="w3-container w3-teal">
                <h1>Analises</h1>
            </header>

            <div class="w3-container">

            </div>

            <footer class="w3-container w3-teal">
                <h5>Total de analises</h5> 
            </footer>
        </div>
    </div>
</div>
<br><br>
<div class="row">
       <div class="col-lg-4">  
        <div class="w3-card-4" style="width:100%;">
            <header class="w3-container w3-gray">
                <h1>Pedidos</h1>
            </header>

            <div class="w3-container">

            </div>

            <footer class="w3-container w3-gray">
                <h5>Total de Pedidos</h5> 
            </footer>
        </div>
    </div>
</div>

@endsection

@section('js')
<!-- start amchart js -->
<script src="{{asset('assets/vendors/am-charts/js/ammap.js')}}"></script>
<script src="{{asset('assets/vendors/am-charts/js/worldLow.js')}}"></script>
<script src="{{asset('assets/vendors/am-charts/js/continentsLow.js')}}"></script>
<script src="{{asset('assets/vendors/am-charts/js/light.js')}}"></script>
<!--Morris Chart-->
<script src="{{asset('assets/vendors/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('assets/vendors/charts/morris-bundle/morris.js')}}"></script>
<!--Chart Js-->
<script src="{{asset('assets/vendors/charts/charts-bundle/Chart.bundle.js')}}"></script>
<!-- C3 Chart -->
<script src="{{asset('assets/vendors/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('assets/vendors/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<!--Home Script-->
@endsection
