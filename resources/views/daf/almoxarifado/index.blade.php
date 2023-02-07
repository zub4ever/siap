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
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                       title="Cadastrar novo item" href="{{route('almoxarifado.create')}}" role="button">
                        Novo Item
                    </a>
                    <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                       title="Cadastrar novo item" href="{{route('departamento.create')}}" role="button">
                        Cadastrar departamento
                    </a>
                    <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                       title="Cadastrar novo item" href="{{route('contrato.create')}}" role="button">
                        Cadastrar contrato
                    </a>
                    <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                       title="Cadastrar novo item" href="{{route('responsavel.create')}}" role="button">
                        Cadastrar responsavel
                    </a>
                    <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                       title="Cadastrar novo item" href="{{route('marca.create')}}" role="button">
                        Cadastrar marca
                    </a>
                    <div class="pull-right">
                        <a class="btn btn-inverse-warning btn-md" href="{{route('relatorio.indexRelatorio')}}">Gerar Relatórios</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <hr/>
            <h4>FILTRO DE PESQUISA</h4>
            <hr/>
            
                
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                        <div class="wrap">
                             <button type="submit" class="btn btn-outline-primary btn-fixed-w mt-2">
                            Pesquisar
                        </button>
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
                                    <option
                                        value="{{$tipo->id}}" {{(isset($request) ? $request->input('almoxarifado_condicao_id') : '') == $tipo->id ? 'selected' : ''}}>
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
                                    <option
                                        value="{{$tipo->id}}" {{(isset($request) ? $request->input('almoxarifado_tipo_id') : '') == $tipo->id ? 'selected' : ''}}>
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
                                    <option
                                        value="{{$projeto->id}}" {{(isset($request) ? $request->input('almoxarifado_localizacao_dpto_id') : '') == $projeto->id ? 'selected' : ''}}>
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

                                    @foreach($almo_condicao as $condicao)
                                        @if($fcn->almoxarifado_condicao_id == $condicao->id)
                                            <td class="text-center">{{$condicao->nm_condicao}}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        <a href="{{ route('almoxarifado.show',$fcn->id) }}">
                                            <i class="ti-eye mr-1 btn btn-info"></i>
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
