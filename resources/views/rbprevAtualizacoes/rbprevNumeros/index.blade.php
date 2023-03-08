@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
RBPREV Números
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
    <li class="breadcrumb-item active"><a>RBPREV Números</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                   title="Cadastrar novo item" href="{{route('rbprevNumeros.create')}}" role="button">
                    Subir novo RBPREV Números
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
                <h4 class="card_title">RBPREV Números</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Ano</th>
                                <th class="text-center">Mês</th>                                
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rbprev_numeros as $rbprev_numero)
                            <tr>                                                           
                                <td>{{$rbprev_numero->nm_mes}}</td>
                                <td>{{$rbprev_numero->nm_ano}}</td>
                                <td> 
                                    @can('excluir')
                                    <a href="">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    &nbsp;
                                    <form action="{{route('rbprevNumeros.destroy', $rbprev_numero->id)}}" method="POST"
                                          id="formLaravel{{$rbprev_numero->id}}" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="{{$rbprev_numero->id}}">
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
