@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Processos Homolagados
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
    <li class="breadcrumb-item active"><a>Processos Homologados</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                   title="Cadastrar novo item" href="{{route('processosTCE.create')}}" role="button">
                    Novo processos TCE
                </a>
                <div class="pull-right">
                    <a class="btn btn-inverse-warning btn-md" href="{{route('rbprevAtualizacoes.index')}}">Voltar</a>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Processos Homologados</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Mês</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Aposentadoria</th>
                                <th class="text-center">Pensão</th>
                                <th class="text-center">Cargo</th>
                                <th class="text-center">Notificação TCE</th>
                                <th class="text-center">Acordão</th>
                                <th class="text-center">Data Diário EC</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($processos as $processo)
                            <tr>
                                <td>{{$processo->id}}</td>
                                <td>{{$processo->nm_assegurado}}</td>
                                <td>{{$processo->nm_mes}}</td>
                                <td>{{$processo->nm_aposentadoria}}</td>
                                <td>{{$processo->nm_pensao}}</td>
                                <td>{{$processo->nm_funcao}}</td>
                                
                                <td>{{date('d/m/Y', strtotime($processo->data_notificacao))}}</td>
                                <td>{{$processo->nr_acordao}}</td>
                                <td>{{date('d/m/Y', strtotime($processo->data_diario_eletronico))}}</td>
                                <td>
                                    @hasanyrole('Admin|Tecnico')
                                    <a href="{{route('processosTCE.edit', $processo->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    &nbsp;
                                    <form action="{{route('processosTCE.destroy', $processo->id)}}" method="POST"
                                          id="formLaravel{{$processo->id}}" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="{{$processo->id}}">
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
