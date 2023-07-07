@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
    Detalhes do pedido
@endsection
@section('css')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/jquery.dataTables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/responsive.bootstrap.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/responsive.jqueryui.min.css")}}">
    <!-- Sweet Alert Css -->
    <link rel="stylesheet" href="{{asset("assets/vendors/sweetalert2/css/sweetalert2.min.css")}}">
@endsection
@section('main-content')

    @foreach($pedido as $item)
        <p>Número do Pedido: {{ $item->nr_pedido }}</p>
        <p>Quantidade Pedido: {{ $item->quantidade_pedido }}</p>
        <p>Valor Unitário: {{ $item->valor_uni }}</p>
        <!-- Outras informações do pedido -->
    @endforeach





@endsection
@section('js')
    <!-- Data Table js -->
    <script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/responsive.bootstrap.min.js")}}"></script>
    <!-- Data table Init -->
    <script src="{{asset("assets/js/init/data-table.js")}}"></script>
    <!-- Sweet Alert Js -->
    <!-- Sweet Alert Js -->
    <script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
    <script src="{{asset('js/delete.js')}}"></script>
@endsection
