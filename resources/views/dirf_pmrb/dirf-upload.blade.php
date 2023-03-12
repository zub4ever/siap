@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Dirf
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
    <li class="breadcrumb-item active"><a>DIRF PMRB</a></li>
</ol>


<div class="container">
    <div class="form-container">
        <form action="{{ route('dirf_pmrb.upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="pdfs_pmrb">Dirfs PDFs:</label>
            <input type="file" name="pdfs_pmrb[]" multiple>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>





<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 30vh;
        background-color: white;
        border: 1px solid black;
    }

    .form-container {
        padding: 20px;
    }
    form {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    label {
        margin-right: 10px;
    }


</style>
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
