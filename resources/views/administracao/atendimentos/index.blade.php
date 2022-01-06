@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Atendimentos
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
                                <th class="text-center">Cidade</th>
                                <th class="text-center">Número</th>
                                <th class="text-center">Data</th>
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atendimentos as $fcn)
                            <tr>
                                <td class="text-center">{{$fcn->id}}</td>
                                <td class="text-center">{{$fcn->nm_assegurado}}</td>
                                <td class="text-center">{{$fcn->nm_atendimento}}</td>
                                <td class="text-center">{{$fcn->nm_cidade}}</td>
                                <td class="text-center">{{$fcn->numero_telefone}}</td>
                                <td>{{ date( 'd/m/Y' , strtotime($fcn->created_at))}}</td>
                                
                                
                               
                                <td>
                                    <a href="{{route('atendimentos.edit', $fcn->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    <a href="{{route('atendimentos.Verpdf',$fcn->id)}}" target="_blank
                                       ">
                                        <i class="ti-printer mr-1 btn btn-warning"></i>
                                    </a>
                                    &nbsp;
                                    <form action="" method="POST"
                                          id="formLaravel" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="">
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
@endsection
@section('js')
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
@endsection
