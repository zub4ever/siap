@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
CAPS
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
    <li class="breadcrumb-item active"><a>CAPS|COIN|COFIN</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-info btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo Orgão Expedidor" href="{{route('conselhos.create')}}" role="button">
                    Subir novo documento
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
                <h4 class="card_title">CAPS|COIN|COFIN</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Ano</th>
                                <th class="text-center">Categoria</th>
                                <th class="text-center">Conselho</th>
                                <th class="text-center">Usuário</th>
                                <th class="text-center">Descrição</th>
                                <th class="text-center">Data do envio</th>
                                <th class="text-center">Arquivo</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($conselhos as $conselho)
                            <tr>
                                <td>{{$conselho->nm_ano}}</td>
                                <td>{{$conselho->nm_categoria}}</td>
                                <td>{{$conselho->nm_tipo_conselho}}</td>
                                <td>{{$conselho->name}}</td>
                                <td>{{$conselho->descricao}}</td>
                                <td>{{date('d/m/Y', strtotime($conselho->created_at))}}</td>
                                <td>
                                    @hasanyrole('Admin|Tecnico')
                                    <a href="{{ route('showPdf', ['id' => $conselho->id]) }}" target="_blank">
                                        <button type="button" class="btn btn-success">Visualizar</button>
                                    </a>
                                    &nbsp;
                                    <form action="{{route('conselhos.destroy', $conselho->id)}}" method="POST"
                                          id="formLaravel{{$conselho->id}}" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="{{$conselho->id}}">
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
