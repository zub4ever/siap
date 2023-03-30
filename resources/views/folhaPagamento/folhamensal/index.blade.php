@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Folha
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
    <li class="breadcrumb-item active"><a>Folha</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                @hasanyrole('Admin|Tecnico')
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right"
                   title="Cadastrar novo item" href="{{route('folhamensal.create')}}" role="button">
                    Novo
                </a>
                @endhasanyrole
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
                <h4 class="card_title">Folha Mensal</h4>
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
                            @foreach ($folhapgto as $fcn)
                            <tr>                                                           
                                <td class="text-center">{{$fcn->ano}}</td>  
                                @if ($fcn->mes == 1)
                                <td class="text-center">Janeiro</td>
                                @elseif($fcn->mes == 2)
                                <td class="text-center">Feveiro</td>
                                @elseif($fcn->mes == 3)
                                <td class="text-center">Março</td>
                                @elseif($fcn->mes == 4)
                                <td class="text-center">Abril</td>
                                @elseif($fcn->mes == 5)
                                <td class="text-center">Maio</td>
                                @elseif($fcn->mes == 6)
                                <td class="text-center">Junho</td>
                                @elseif($fcn->mes == 7)
                                <td class="text-center">Julho</td>
                                @elseif($fcn->mes == 8)
                                <td class="text-center">Agosto</td>
                                @elseif($fcn->mes == 9)
                                <td class="text-center">Setembro</td>
                                @elseif($fcn->mes == 10)
                                <td class="text-center">Outubro</td>
                                @elseif($fcn->mes == 11)
                                <td class="text-center">Novembro</td>
                                @elseif($fcn->mes == 12)
                                <td class="text-center">Dezembro</td>
                                @elseif($fcn->mes == 13)
                                <td class="text-center">Décimo Terceiro</td>
                                @endif
                               
                                <td> 
                                    @can('excluir')
                                    <a href="{{Route('folhamensal.edit',$fcn->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                     
                                    
                                    &nbsp;
                                    <form action="" method="POST" id="formLaravel" style="display:inline-block;">
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
