@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Servidor
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
    <li class="breadcrumb-item"><a href="home">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("servidor.index")}}">Servidor</a></li>
    <li class="breadcrumb-item active"><a> Servidor detalhes</a></li>
</ol>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Órgão:
                <span class="text-danger">*</span>
            </label>
            <select name="origin_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($origin as $orgao)
                <option value="{{$orgao->id}}"
                        {{(empty(old('origin_id')) ? @$serve->origin_id : old('origin_id')) == $orgao->id ? 'selected' : ''}}>
                    {{$orgao->nm_origem}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('origin_id'))
            <h6 class="heading text-danger">{{$errors->first('origin_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="tp_servidor_id" class="form-control-label">Tipo de servidor:
                <span class="text-danger">*</span>
            </label>
            <select name="tp_servidor_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($tpservidor as $tp)
                <option value="{{$tp->id}}"
                        {{(empty(old('tp_servidor_id')) ? @$serve->tp_servidor_id : old('tp_servidor_id')) == $orgao->id ? 'selected' : ''}}>
                    {{$tp->nm_tpservidor}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('tp_servidor_id'))
            <h6 class="heading text-danger">{{$errors->first('tp_servidor_id')}}</h6>
            @endif
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
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection


