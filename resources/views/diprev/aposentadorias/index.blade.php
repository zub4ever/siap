@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Aposentadorias
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
    <li class="breadcrumb-item active"><a>Aposentadorias</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                @hasanyrole('Admin|Tecnico')
                <a class="btn btn-info btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo" href="{{route('aposentadorias.create')}}" role="button">
                    Nova Aposentadoria
                </a>
                @endhasanyrole
                <div class="pull-right">
                    <a class="btn btn-primary btn-md" href="/aposentadorias">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Aposentadorias</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Tipo de Aposentadoria</th>
                                <th class="text-center">Regra de Aposentadoria</th>
                                <th class="text-center">Nº Processo</th>
                                <th class="text-center">Data aposentadoria</th>
                                
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aposentadorias as $aposentadoria)
                            <tr>
                                <td>{{$aposentadoria->id}}</td>
                                <td>{{$aposentadoria->matricula}}-{{$aposentadoria->nm_servidor}}</td>
                                <td>{{$aposentadoria->nm_aposentadoria}}</td>
                                <td>{{$aposentadoria->nm_regra}}</td>
                                <td>{{$aposentadoria->nr_processo}}</td>
                                <td>{{date('d/m/Y', strtotime($aposentadoria->data_aposentadoria))}}</td>                                                               
                                

                                <td>
                                    @hasanyrole('Admin|Tecnico')
                                    <a href="{{route('aposentadorias.edit', $aposentadoria->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    &nbsp;
                                    <form action="{{route('aposentadorias.destroy', $aposentadoria->id)}}" method="POST"
                                          id="formLaravel{{$aposentadoria->id}}" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="{{$aposentadoria->id}}">
                                            <i class="ti-trash btn btn-danger"></i>
                                        </span>
                                    </form>
                                    @endhasanyrole
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