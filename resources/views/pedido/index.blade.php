
@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
CTC
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
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>CTC</a></li>
</ol>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
        <div class="wrap">


            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Ano</th>
                            <th class="text-center">Tempo bruto</th>
                            <th class="text-center">Faltas</th>
                            <th class="text-center">Licenças</th><th class="text-center">Tempo  liquido</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $totalDays = 0;
                        @endphp
                        @foreach ($sortedDays as $year => $days)
                        <tr>
                            <td>{{ $year }}</td>
                            <td>{{ $count = count($days) }} dias</td>
                            <td></td>
                            <td></td>
                            <td>{{ $count = count($days) }} dias</td>
                        </tr>
                        @php
                        $totalDays += $count;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <p>Total de dias: {{ $totalDays }}</p>
            </div>
        </div>
    </div>        
</div> 
<table>
    <thead>
        <tr>
            <th>Nome do Arquivo</th>
        </tr>
    </thead>
    <tbody>
        @foreach(range(1, 998) as $numero)
        <tr>
            <td>DIRF2022_Parte7_Parte{{ $numero }}.pdf</td>
        </tr>
        @endforeach
    </tbody>
</table>






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


