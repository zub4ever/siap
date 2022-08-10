@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Almoxarifado
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
    <li class="breadcrumb-item active"><a>Almoxarifado</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo item" href="{{route('almoxarifado.create')}}" role="button">
                    Novo Item
                </a>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrado de Almoxarifado</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Patrimonio</th>
                                <th class="text-center">Tipo de item</th>
                                <th class="text-center">Marca</th>
                                <th class="text-center">Localização</th>
                                <th class="text-center">Contrato</th>
                                <th class="text-center">Condição</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($almoxarifado as $fcn)
                            <tr>
                                <td class="text-center">{{$fcn->nm_patrimonio}}</td>
                                @foreach($almo_tipo as $mnc)
                                @if($fcn->almoxarifado_tipo_id == $mnc->id)
                                <td class="text-center">{{$mnc->nm_tipo}}</td>
                                @endif
                                @endforeach
                                @foreach($almo_marca as $mc)
                                @if($fcn->almoxarifado_marca_id == $mc->id)
                                <td class="text-center">{{$mc->nm_marca}}</td>
                                @endif
                                @endforeach
                                @foreach($almo_localizacao_dpto as $lc)
                                @if($fcn->almoxarifado_localizacao_dpto_id == $lc->id)
                                <td class="text-center">{{$lc->nm_departamento}}</td>
                                @endif
                                @endforeach
                                @foreach($almo_contrato as $contrato)
                                @if($fcn->almoxarifado_contrato_id == $contrato->id)
                                <td class="text-center">{{$contrato->nr_contrato}}/{{$contrato->ano_contrato}}</td>
                                @endif
                                @endforeach
                                @foreach($almo_condicao as $condicao)
                                @if($fcn->almoxarifado_condicao_id == $condicao->id)
                                <td class="text-center">{{$condicao->nm_condicao}}</td>
                                @endif
                                @endforeach
                                <td>
                                    <a href="{{route('almoxarifado.edit', $fcn->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    @can('excluir')
                                    &nbsp;
                                    <form action="{{route('almoxarifado.destroy', $fcn->id)}}" method="POST"
                                          id="formLaravel{{$fcn->id}}" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="{{$fcn->id}}">
                                            <i class="ti-trash btn btn-danger"></i>
                                        </span>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
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
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection