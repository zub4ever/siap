@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
View CTC
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



<table style="width:100%; border: 1px solid black;font-size: 8px;">
    <thead>
        <tr>
            <th style="width:0%; border: 1px solid black;">ANO</th>
            <th style="width:0%; border: 1px solid black;">TEMPO BRUTO</th>
            <th style="width:0%; border: 1px solid black;">FALTAS</th>
            <th style="width:0%; border: 1px solid black;">LICENÇA</th>
            <th style="width:0%; border: 1px solid black;">LICENÇA<br>SEM VENCIMENTO</th>
            <th style="width:0%; border: 1px solid black;">SUSPENSÕES</th>
            <th style="width:0%; border: 1px solid black;">DISPONIBILIDADE</th>
            <th style="width:0%; border: 1px solid black;">OUTRAS</th>
            <th style="width:0%; border: 1px solid black;">TOTAL LÍQUIDO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($days_by_year as $year => $days)
        <tr>
            <td style="border: 1px solid black;">{{ $year }}</td>
            <td style="border: 1px solid black;">{{ $days }} </td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">{{ $days }} </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td>Total</td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;">{{ $diff }} dias</td>

        </tr>
    </tfoot>
</table>
<br>





























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


