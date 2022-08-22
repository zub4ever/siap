@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Requerimentos
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
    <li class="breadcrumb-item active"><a>Ap Volunária</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo" href="{{route('reqVoluntaria.create')}}" role="button">
                    Novo requerimento
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Requerimentos Ap Voluntárias</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Nome requerente</th>
                                <th class="text-center">Tipo de requerimento</th>
                                <th class="text-center">CPF</th>
                                <th class="text-center">Data</th>
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reqApVoluntaria as $fcn)
                            <tr>
                                <td class="text-center">{{$fcn->id}}</td>
                                <td class="text-center">{{$fcn->nm_requerente}}</td>
                                <td class="text-center">Aposentadoria Voluntaria</td>
                                <td class="text-center">{{$fcn->cpf}}</td>

                                <td>{{ date( 'd/m/Y' , strtotime($fcn->data_solicitacao))}}</td>
                                <td>
                                    <a href="{{route('reqVoluntaria.show', $fcn->id)}}" target="_blank">
                                        <i class="ti-clipboard mr-1 btn btn-info" data-toggle="tooltip" title="Visualizar informações"></i>
                                    </a>

                                    <a href="{{route('reqVoluntaria.edit', $fcn->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    <a href="{{route('reqVoluntaria.pdf', $fcn->id)}}" target="_blank
                                       ">
                                        <i class="ti-printer mr-1 btn btn-warning"></i>
                                    </a>
                                    @can('excluir')
                                    &nbsp;
                                    <form action="{{route('reqVoluntaria.destroy', $fcn->id)}}" method="POST" id="formLaravel{{$fcn->id}}" style="display:inline-block;">
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