@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    almoxarifadoVirtualContrato
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
        <li class="breadcrumb-item active"><a>Contratos</a></li>
    </ol>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                       title="Cadastrar novo Departamento" href="{{route('ContratoEmpenho.create')}}" role="button">
                        Cadastrar contrato/empenho
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Contratos</h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="table text-center">
                            <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">GRP</th>
                                <th class="text-center">Nº Contrato</th>
                                <th class="text-center">Nº SEI</th>
                                <th class="text-center">Empresa Contratada</th>
                                <th class="text-center">Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($contratoEpenho as $contrato)
                                <tr>
                                    <td class="text-center">{{$contrato->id}}</td>
                                    <td class="text-center">{{$contrato->cod_grp}}</td>
                                    <td class="text-center">{{$contrato->nr_contrato}}</td>
                                    <td class="text-center">{{$contrato->nr_sei}}</td>
                                    <td class="text-center">{{$contrato->cnpj}} - {{$contrato->razao_social}}</td>

                                    <td>
                                        <a href="">
                                            <i class="ti-pencil mr-1 btn btn-success"></i>
                                        </a>
                                        @can('excluir')
                                            &nbsp;
                                            <form action="" method="POST"
                                                  id="formLaravel" style="display:inline-block;">
                                                @method('DELETE')
                                                @csrf
                                                <span class="submit" idform="">
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
