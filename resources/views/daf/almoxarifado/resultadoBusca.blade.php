@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Almoxarifado
@endsection
@section('css')

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
                <div class="pull-right">
                    <a class="btn btn-primary btn-md" href="/almoxarifado">Voltar</a>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <hr />
        <h4>FILTRO DE PESQUISA</h4>
        <hr />
        <form action="{{route('almo.buscar')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                    <div class="wrap">
                        <label for="nm_patrimonio" class="form-control-label">Número de Patrimônio:
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" name="nm_patrimonio" value="{{isset($request) ? $request->input('nm_patrimonio') : '' }}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                    <div class="wrap">
                        <label for="almoxarifado_condicao_id" class="form-control-label">Condição de Item:
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" name="almoxarifado_condicao_id">
                            <option value="">Selecione uma opção</option>
                            @foreach ($almo_condicao as $tipo)
                                <option value="{{$tipo->id}}" {{(isset($request) ? $request->input('almoxarifado_condicao_id') : '') == $tipo->id ? 'selected' : ''}}>
                                    {{$tipo->nm_condicao}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                    <div class="wrap">
                        <label for="almoxarifado_tipo_id" class="form-control-label">Tipo de Item:
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" name="almoxarifado_tipo_id">
                            <option value="">Selecione uma opção</option>
                            @foreach ($almo_tipo as $tipo)
                                <option value="{{$tipo->id}}" {{(isset($request) ? $request->input('almoxarifado_tipo_id') : '') == $tipo->id ? 'selected' : ''}}>
                                    {{$tipo->nm_tipo}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                    <div class="wrap">
                        <label for="almoxarifado_localizacao_dpto_id" class="form-control-label">Departamento:
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" name="almoxarifado_localizacao_dpto_id">
                            <option value="">Selecione uma opção</option>
                            @foreach ($almo_localizacao_dpto as $projeto)
                                <option value="{{$projeto->id}}" {{(isset($request) ? $request->input('almoxarifado_localizacao_dpto_id') : '') == $projeto->id ? 'selected' : ''}}>
                                    {{$projeto->nm_departamento}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-4 col-lg-4"></div>
                <div class="col-sm-12 col-md-4 col-lg-4 mt-4" style="text-align: center;">
                    <button type="submit" class="btn btn-outline-primary btn-fixed-w mt-2">
                        Pesquisar
                    </button>
                    <button type="reset" class="btn btn-outline-danger btn-fixed-w mt-2">
                        Limpar
                    </button>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4"></div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Resultado da Busca</h4>

                <div class="table-responsive">
                    <table id="" class="table text-center">
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
                                <td class="text-center">{{$fcn->almoxarifado_tipo->nm_tipo}}</td>
                                <td class="text-center">{{$fcn->almoxarifado_marca->nm_marca}}</td>
                                <td class="text-center">{{$fcn->almoxarifado_localizacao_dpto->nm_departamento}}</td>
                                <td class="text-center">{{$fcn->almoxarifado_contrato->nr_contrato}}</td>
                                <td class="text-center">{{$fcn->almoxarifado_condicao->nm_condicao}}</td>
                                <td>
                                    <a href="{{ route('almoxarifado.show',$fcn->id) }}">
                                        <i class="ti-clipboard mr-1 btn btn-info"></i>
                                    </a>
                                    <a href="{{route('almoxarifado.Verpdf',$fcn->id)}}" target="_blank
                                       ">
                                        <i class="ti-printer mr-1 btn btn-warning"></i>
                                    </a>
                                    <a href="{{route('qrcode',$fcn->id)}}" target="_blank
                                       ">
                                        <i class="fa fa-qrcode mr-1 btn btn-info"></i>
                                    </a>
                                    <a href="{{route('almoxarifado.edit', $fcn->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    @can('excluir')
                                    &nbsp;
                                    <form action="{{route('almoxarifado.destroy', $fcn->id)}}" method="POST" id="formLaravel{{$fcn->id}}" style="display:inline-block;">
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
                        {!! $almoxarifado->appends(Request::only('almoxarifado_condicao_id', 'almoxarifado_tipo_id',
                        'almoxarifado_localizacao_dpto_id', 'nm_patrimonio'))->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('js')

<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection
