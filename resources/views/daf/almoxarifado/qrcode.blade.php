@extends('layouts.app')

{{-- Page Title --}}
@section('page-title')
Almoxarifado
@endsection
@section('css')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/jquery.dataTables.css")}}">
<link rel="stylesheet" type="text/css"
      href="{{asset("assets/vendors/data-table/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" type="text/css"
      href="{{asset("assets/vendors/data-table/css/responsive.bootstrap.min.css")}}">
<link rel="stylesheet" type="text/css"
      href="{{asset("assets/vendors/data-table/css/responsive.jqueryui.min.css")}}">
<!-- Sweet Alert Css -->
<link rel="stylesheet" href="{{asset("assets/vendors/sweetalert2/css/sweetalert2.min.css")}}">
@endsection
@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Almoxarifado</a></li>
</ol>




<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">

                <div class="visible-print text-center">
                    <br>
                    <br>
                    <div style="display: flex; align-items: center; flex-direction: column;">
                        <div style="display: flex; align-items: center; justify-content: center;">
                            {{ $qrCodeImage }}
                            <img src="{{ asset('imagem/azul_claro.png') }}" alt="Azul Claro" style="height: 50px; margin-left: 10px; margin-right: 10px;">
                            <img src="{{ asset('imagem/logo02.png') }}" alt="Azul Claro" style="height: 50px;">
                        </div>
                        <br>
                        <div><strong>{{ $almo->nm_patrimonio }}</strong></div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>





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
<script src="https://cdn.jsdelivr.net/npm/qrcode@1.4.4/qrcode.min.js"></script>

<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection
