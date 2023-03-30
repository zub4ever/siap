
@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
CTC
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
    <li class="breadcrumb-item active"><a>CTC</a></li>
</ol>
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                @hasanyrole('Admin|Tecnico')
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar" href="{{route('ctc.create')}}" role="button">
                    Nova CTC
                </a>
                @endhasanyrole
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Certidões emitidas</h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="table text-center">
                            <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">CTC Número</th>
                                <th class="text-center">Nome servidor</th>
                                <th class="text-center">CPF</th>
                                <th class="text-center">Função</th>

                                <th class="text-center">Orgão</th>
                                <th class="text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($ctc as $ctc)
                                <tr>
                                    <td class="text-center">{{$ctc->ctc_numero}}</td>
                                   
                                    @foreach($serve as $servidor)
                                        @if($ctc->serve_id == $servidor->id)
                                            <td class="text-center"> {{$servidor->matricula}} - {{$servidor->nm_servidor}}</td>
                                            <td class="text-center"> {{$servidor->cpf}}</td>
                                        @endif
                                    @endforeach
                                    
                                    @foreach($funcao as $lc)
                                        @if($ctc->funcao_id == $lc->id)
                                            <td class="text-center">{{$lc->nm_funcao}}</td>
                                        @endif
                                    @endforeach

                                    @foreach($orgao as $org)
                                        @if($ctc->orgao_id == $org->id)
                                            <td class="text-center">{{$org->nm_orgao}}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        
                                        <a href="{{route('ctc.show',$ctc->id)}}" target="_blank
                                       ">
                                            <i class="ti-printer mr-1 btn btn-primary"></i>
                                        </a>
                                       
                                        <a href="{{route('ctc.edit', $ctc->id)}}">
                                            <i class="ti-pencil mr-1 btn btn-success"></i>
                                        </a>
                                            @can('excluir')
                                            &nbsp;
                                            <form action="{{route('ctc.destroy', $ctc->id)}}" method="POST"
                                                  id="formLaravel{{$ctc->id}}" style="display:inline-block;">
                                                @method('DELETE')
                                                @csrf
                                                <span class="submit" idform="{{$ctc->id}}">
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


