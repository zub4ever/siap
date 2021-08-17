@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Endereços
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Endereço</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo Orgão Expedidor" href="{{route('endereco.create')}}" role="button">
                    Novo endereço
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Endereços</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Matrícula</th>
                                <th class="text-center">Nome servidor</th>
                                <th class="text-center">Cidade</th>

                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($address as $svd)                            
                            <tr>
                                @foreach($servidor as $vd)
                                @if($svd->serve_id == $vd->id)
                                <td class="text-center">{{$vd->matricula}}</td>
                                <td class="text-center">{{$vd->nm_servidor}}</td>
                                @endif
                                @endforeach
                                @foreach($city as $mnc)
                                @if($svd->city_id == $mnc->id)
                                <td class="text-center">{{$mnc->nm_cidade}}</td>
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
@section('js')
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
@endsection
