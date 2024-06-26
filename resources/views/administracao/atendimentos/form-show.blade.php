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
    <li class="breadcrumb-item"><a href="{{route("atendimentos.index")}}">Início</a></li>
    <li class="breadcrumb-item active"><a>Ver atendimento</a></li>
</ol>

<div class="mt-5">
    <hr />
    <h4>Informações Gerais</h4>
    <hr />
</div>


<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="atendimento_status_id" class="form-control-label">Status atendimento:
                <span class="text-danger">*</span>
            </label>
            <select name="atendimento_status_id" class="form-control" id="titula1" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($atendimento_status as $atendimento)
                <option value="{{$atendimento->id}}"
                        {{(empty(old('atendimento_status_id')) ? @$atendimentos->atendimento_status_id : old('atendimento_status_id')) == $atendimento->id ? 'selected' : ''}}>
                    {{$atendimento->statusAtendimento}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('atendimento_status_id'))
            <h6 class="heading text-danger">{{$errors->first('atendimento_status_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="matricula" class="form-control-label">Matrícula:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="matricula" value="{{ @$atendimentos->matricula}} " disabled>
            @if ($errors->has('matricula'))
            <h6 class="heading text-danger">{{$errors->first('matricula')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nm_assegurado" class="form-control-label">Nome do Requerente:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_assegurado"  value="{{ @$atendimentos->nm_assegurado }}" disabled>
            @if ($errors->has('nm_assegurado'))
            <h6 class="heading text-danger">{{$errors->first('nm_assegurado')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="cpf" class="form-control-label">CPF:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="cpf" value="{{empty(old('cpf')) ? @$atendimentos->cpf : old('cpf')}}" data-mask="999.999.999-99" autocomplete="off" maxlength="14" disabled>
            @if ($errors->has('cpf'))
            <h6 class="heading text-danger">{{$errors->first('cpf')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="data_nascimento" class="form-control-label">Data de nascimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="data_nascimento" placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off"
                   value="{{ !empty($atendimentos->data_nascimento) ? date('d-m-Y', strtotime($atendimentos->data_nascimento)) : '' }}" disabled>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="city_id" class="form-control-label">Cidade:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control cidadeSelect2" name="city_id" id="city_id" disabled>
                <option value="">Selecione a cidade</option>
                @foreach ($city as $ct)
                <option value="{{$ct->id}}"
                        {{(empty(old('city_id')) ? @$atendimentos->city_id : old('city_id')) == $ct->id ? 'selected' : ''}}>
                    {{$ct->nm_cidade}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('city_id'))
            <h6 class="heading text-danger">{{$errors->first('city_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="state_id" class="form-control-label">Estado:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control estadoSelect2" name="state_id" id="state_id" disabled>
                <option value="">Selecione o estado</option>
                @foreach ($state as $st)
                <option value="{{$st->id}}"
                        {{(empty(old('state_id')) ? @$atendimentos->state_id : old('state_id')) == $st->id ? 'selected' : ''}}>
                    {{$st->nm_estado}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('state_id'))
            <h6 class="heading text-danger">{{$errors->first('state_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="atendimento_assunto_id" class="form-control-label">Tipo de atendimento:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control cidadeSelect2" name="atendimento_assunto_id" id="atendimento_assunto_id" disabled>
                <option value="">Selecione o atendimento</option>
                @foreach ($atendimento_assunto as $assunto)
                <option value="{{$assunto->id}}"
                        {{(empty(old('atendimento_assunto_id')) ? @$atendimentos->atendimento_assunto_id : old('atendimento_assunto_id')) == $assunto->id ? 'selected' : ''}}>
                    {{$assunto->nm_assunto}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('atendimento_assunto_id'))
            <h6 class="heading text-danger">{{$errors->first('atendimento_assunto_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="almoxarifado_localizacao_dpto_id" class="form-control-label">Departamento de Atendimento:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control estadoSelect2" name="almoxarifado_localizacao_dpto_id" id="almoxarifado_localizacao_dpto_id" disabled>
                <option value="">Selecione o departamento</option>
                @foreach ($almo_localizacao_dpto as $dpto)
                <option value="{{$dpto->id}}"
                        {{(empty(old('almoxarifado_localizacao_dpto_id')) ? @$atendimentos->almoxarifado_localizacao_dpto_id : old('almoxarifado_localizacao_dpto_id')) == $dpto->id ? 'selected' : ''}}>
                    {{$dpto->nm_departamento}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_localizacao_dpto_id'))
            <h6 class="heading text-danger">{{$errors->first('almoxarifado_localizacao_dpto_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="numero_telefone" class="form-control-label">Numero de telefone:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="numero_telefone" placeholder="(00)00000-0000" data-mask="(00)00000-0000" maxlength="13" autocomplete="off" value="{{ @$atendimentos->numero_telefone }}"
                   disabled>
            @if ($errors->has('numero_telefone'))
            <h6 class="heading text-danger">{{$errors->first('numero_telefone')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="email" class="form-control-label">E-mail informado:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="email" value="{{ @$atendimentos->email }}" disabled>
            @if ($errors->has('email'))
            <h6 class="heading text-danger">{{$errors->first('email')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="atendimento_tipo_servidor_id" class="form-control-label">
                Tipo de Assegurado:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="atendimento_tipo_servidor_id" id="atendimento_tipo_servidor_id" disabled>
                <option value="">Selecione o tipo</option>
                @foreach ($atendimento_tipo_servidor as $tpservidor)
                    <option value="{{$tpservidor->id}}"
                        {{(old('atendimento_tipo_servidor_id', @$atendimentos->atendimento_tipo_servidor_id) == $tpservidor->id) ? 'selected' : ''}}>
                        {{$tpservidor->nm_tipo_servidor}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('atendimento_tipo_servidor_id'))
                <h6 class="heading text-danger">{{$errors->first('atendimento_tipo_servidor_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<hr>
<div class="row d-flex justify-content-center align-items-center">
    <p>Administração</p>
</div>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-4">


        <div class="form-group">
            <textarea type="text" class="form-control" name="descricao"
                      rows="4" value="{{@$atendimentos->descricao}}" disabled>
            </textarea>
        </div>
    </div>
</div>


<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <a href="{{route('atendimentos.Verpdf',$atendimentos->id)}}">
            <button type="submit" class="btn btn-warning">
                Imprimir
            </button>
        </a>
    </div>
    <div class="wrap mt-1" style="text-align: center;">
        <a href="{{route('atendimentos.index')}}">
            <button type="submit" class="btn btn-info">
                Voltar
            </button>
        </a>
    </div>
</div>

<div id="show-atendimento"></div>

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



<script>
$(document).ready(function () {
    $('.btn-show').click(function () {
        let id = $(this).data('id');

        $.ajax({
            url: "/registro/" + id,
            method: "GET",
            success: function (response) {
                $('#show-atendimento').html(response);
            }
        });
    });
});
</script>
