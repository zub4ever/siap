@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Atendimentos
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
    <li class="breadcrumb-item active"><a>Atendimentos</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo Orgão Expedidor" href="{{route('atendimentos.create')}}" role="button">
                    Novo atendimento
                </a>
                    <div class="pull-right">
                <a class="btn btn-inverse-primary btn-md" href="/atendimentos/historico">Histórico de atendimentos</a>
            </div>               
            </div>           
        </div>       
    </div>
    

</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Solicitações de atendimento</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Nome assegurado</th>
                                <th class="text-center">Tipo de atendimento</th>

                                <th class="text-center">CPF</th>
                                <th class="text-center">Número</th>
                                <th class="text-center">Data</th>
                                <th class="text-center">Status atendimento</th>
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atendimentos as $fcn)
                            <tr>
                                <td class="text-center">{{$fcn->id}}</td>
                                <td class="text-center">{{$fcn->matricula}}-{{$fcn->nm_assegurado}}</td>

                                @foreach($atendimento_assunto as $mnc)
                                @if($fcn->atendimento_assunto_id == $mnc->id)
                                <td class="text-center">{{$mnc->nm_assunto}}</td>
                                @endif
                                @endforeach



                                <td class="text-center">{{$fcn->cpf}}</td>
                                <td class="text-center">{{$fcn->numero_telefone}}</td>
                                <td>{{ date( 'd/m/Y' , strtotime($fcn->created_at))}}</td>
                                @foreach($atendimento_status as $mc)
                                @if($fcn->atendimento_status_id == $mc->id)
                                <td class="text-center">
                                    
                                    <label class="badge badge-success">{{$mc->statusAtendimento}}</label>
                                
                                </td>
                                @endif
                                @endforeach
                                <td>
                                    <a href="{{route('atendimentos.show',$fcn->id)}}">
                                        <i class="ti-clipboard mr-1 btn btn-info"></i>
                                    </a>
                                    <a href="{{route('atendimentos.edit', $fcn->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    <a href="{{route('atendimentos.Verpdf',$fcn->id)}}" target="_blank
                                       ">
                                        <i class="ti-printer mr-1 btn btn-warning"></i>
                                    </a>
                                    @can('excluir')
                                    &nbsp;
                                    <form action="{{route('atendimentos.destroy', $fcn->id)}}" method="POST"
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
                            @include('administracao.atendimentos.modal')
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
