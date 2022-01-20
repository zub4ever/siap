@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Usuários
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
    <li class="breadcrumb-item active"><a>Usuários</a></li>
</ol>
@can('admin')
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo" href="{{route('usuarios.criar')}}" role="button">
                    Novo User
                </a>
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
                                <th class="text-center">Usuário</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Situação</th>                               
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($usuarios as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center"></td>
                                
                                <td>                                   
                                    <a href="">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>                                   
                                    &nbsp;
                                    <form action="{{route('usuarios.destroy', $user->id)}}" method="POST"
                                          id="formLaravel{{$user->id}}" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="{{$user->id}}">
                                            <i class="ti-trash btn btn-danger"></i>
                                        </span>
                                    </form>
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
@endcan
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
