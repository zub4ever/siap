@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Contrato
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Contrato</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo Orgão Expedidor" href="{{route('contrato.create')}}" role="button">
                    Novo contrato
                </a>
            </div>
            
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Contratos</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Matrícula</th>
                                <th class="text-center">Contrato</th>
                                <th class="text-center">Nome servidor</th>
                                <th class="text-center">Origem</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servidor as $svd)
                            <tr>
                                <td class="text-center">{{$svd->matricula}}</td>
                                <td class="text-center"></td>
                                <td class="text-center">{{$svd->nm_servidor}}</td>
                                @foreach($origin as $mnc)
                                @if($svd->origin_id == $mnc->id)
                                <td class="text-center">{{$mnc->nm_origem}}</td>
                                @endif
                                @endforeach
                                <td>
                                    <a href="">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    <form action="" method="POST"
                                          id="formLaravel" style="display:inline-block;">
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