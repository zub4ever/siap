@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Requerimentos
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
    <li class="breadcrumb-item active"><a>Volunária</a></li>
</ol>
<div class="mt-5">
    <hr />
    <h4>Informações Gerais</h4>
    <hr />
</div>

<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8 mt-2">

        <div class="wrap">
            <label for="nm_requerente" class="form-control-label">Requerente:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_requerente" value="{{$reqApVoluntaria->nm_requerente}}" disabled>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">

        <div class="wrap">
            <label for="matricula" class="form-control-label">Matrícula:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="matricula" value="{{$reqApVoluntaria->matricula}}" disabled>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="data_nascimento" class="form-control-label">Data de Nascimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='data_nascimento' placeholder="11/11/1111" data-mask="00/00/0000" autocomplete="off" value="{{(@$reqApVoluntaria->data_nascimento)}}" disabled>
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="cpf" class="form-control-label">CPF:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="cpf" value="{{empty(old('cpf')) ? @$reqApVoluntaria->cpf : old('cpf')}}" data-mask="999.999.999-99" autocomplete="off" maxlength="14" disabled>

        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="rg" class="form-control-label">RG:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="rg" value="{{ @$reqApVoluntaria->rg}}" maxlength="8" disabled>

        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="pis_pasep" class="form-control-label">PISPASEP:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="pis_pasep" value="{{ @$reqApVoluntaria->pis_pasep}}" maxlength="20" disabled>

        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="sexo_id" class="form-control-label">Sexo:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="sexo_id" id="sexo_id" disabled>
                <option value="">Selecione</option>
                @foreach ($sexo as $st)
                <option value="{{$st->id}}" {{(empty(old('sexo_id')) ? @$reqApVoluntaria->sexo_id : old('sexo_id')) == $st->id ? 'selected' : ''}}>
                    {{$st->nm_sexo}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="status_civil_id" class="form-control-label">Status Civil:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="status_civil_id" id="status_civil_id" disabled>
                <option value="">Selecione</option>
                @foreach ($marital_status as $mt)
                <option value="{{$mt->id}}" {{(empty(old('status_civil_id')) ? @$reqApVoluntaria->status_civil_id : old('status_civil_id')) == $mt->id ? 'selected' : ''}}>
                    {{$mt->status_civil}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="mt-5">
    <hr />
    <h4>Informações de endereço</h4>
    <hr />
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
        <div class="wrap">
            <label for="nm_rua" class="form-control-label">Endereço:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_rua" value="{{ @$reqApVoluntaria->nm_rua}}" disabled>
            @if ($errors->has('nm_rua'))
            <h6 class="heading text-danger">{{$errors->first('nm_rua')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-2">
        <div class="wrap">
            <label for="numero_casa" class="form-control-label">Número:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="numero_casa" value="{{ @$reqApVoluntaria->numero_casa}}" disabled>
            @if ($errors->has('numero_casa'))
            <h6 class="heading text-danger">{{$errors->first('numero_casa')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
        <div class="wrap">
            <label for="complemento" class="form-control-label">Complemento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="complemento" value="{{ @$reqApVoluntaria->complemento}}" disabled>
            @if ($errors->has('complemento'))
            <h6 class="heading text-danger">{{$errors->first('complemento')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-2">
        <div class="wrap">
            <label for="cep" class="form-control-label">CEP:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="cep" value="{{ @$reqApVoluntaria->cep}}" disabled>
            @if ($errors->has('cep'))
            <h6 class="heading text-danger">{{$errors->first('cep')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
        <div class="wrap">
            <label for="nm_bairro" class="form-control-label">Bairro:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_bairro" value="{{ @$reqApVoluntaria->nm_bairro}}" disabled>
            @if ($errors->has('nm_bairro'))
            <h6 class="heading text-danger">{{$errors->first('nm_bairro')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
        <div class="wrap">
            <label for="city_id" class="form-control-label">Municipio:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="city_id" id="city_id" disabled>
                <option value="">Selecione</option>
                @foreach ($city as $cty)
                <option value="{{$cty->id}}" {{(empty(old('city_id')) ? @$reqApVoluntaria->city_id : old('city_id')) == $cty->id ? 'selected' : ''}}>
                    {{$cty->nm_cidade}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('city_id'))
            <h6 class="heading text-danger">{{$errors->first('city_id')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-2">
        <div class="wrap">
            <label for="nm_uf" class="form-control-label">UF:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_uf" value="{{ @$reqApVoluntaria->nm_uf}}" disabled>
            @if ($errors->has('nm_uf'))
            <h6 class="heading text-danger">{{$errors->first('nm_uf')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-2">
        <div class="wrap">
            <label for="nr_telefone" class="form-control-label">Telefone:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_telefone" value="{{ @$reqApVoluntaria->nr_telefone}}" disabled>
            @if ($errors->has('nr_telefone'))
            <h6 class="heading text-danger">{{$errors->first('nr_telefone')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="mt-5">
    <hr />
    <h4>Informações de Contrato</h4>
    <hr />
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="vinculo_municipio_id" class="form-control-label">Vinculo:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="vinculo_municipio_id" id="vinculo_municipio_id" disabled>
                <option value="">Selecione</option>
                @foreach ($vinculo_municipio as $vcmn)
                <option value="{{$vcmn->id}}" {{(empty(old('vinculo_municipio_id')) ? @$reqApVoluntaria->vinculo_municipio_id : old('vinculo_municipio_id')) == $vcmn->id ? 'selected' : ''}}>
                    {{$vcmn->nm_vinculo}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('vinculo_municipio_id'))
            <h6 class="heading text-danger">{{$errors->first('vinculo_municipio_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="funcao_id" class="form-control-label">Função:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control func-select2" name="funcao_id" id="funcao_id" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($funcao as $ofc)
                <option value="{{$ofc->id}}" {{(empty(old('funcao_id')) ? @$reqApVoluntaria->funcao_id : old('funcao_id')) == $ofc->id ? 'selected' : ''}}>
                    {{$ofc->nm_funcao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('funcao_id'))
            <h6 class="heading text-danger">{{$errors->first('funcao_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="nm_cargo" class="form-control-label">Cargo Efetivo:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_cargo" value="{{ @$reqApVoluntaria->nm_cargo}}" disabled>
            @if ($errors->has('nm_cargo'))
            <h6 class="heading text-danger">{{$errors->first('nm_cargo')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="orgao_id" class="form-control-label">Orgão:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control func-select2" name="orgao_id" id="orgao_id" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($orgao as $org)
                <option value="{{$org->id}}" {{(empty(old('orgao_id')) ? @$reqApVoluntaria->orgao_id : old('orgao_id')) == $org->id ? 'selected' : ''}}>
                    {{$org->nm_orgao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('orgao_id'))
            <h6 class="heading text-danger">{{$errors->first('orgao_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
        <div class="wrap">
            <label for="nm_lotacao" class="form-control-label">Lotação:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_lotacao" value="{{ @$reqApVoluntaria->nm_lotacao}}" disabled>
            @if ($errors->has('nm_lotacao'))
            <h6 class="heading text-danger">{{$errors->first('nm_lotacao')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="mt-5">
    <hr />
    <h4>Base legal</h4>
    <hr />
</div>
<div class="card-header">
    <h5>Nos termos do:</h5>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
        <div class="wrap">
            <label for="termos_aposentadoria_id" class="form-control-label">Aposentadoria nos termos:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="termos_aposentadoria_id" id="termos_aposentadoria_id" disabled>
                <option value="">Selecione</option>
                @foreach ($termo_aposentadoria as $termos)
                <option value="{{$termos->id}}" {{(empty(old('termos_aposentadoria_id')) ? @$reqApVoluntaria->termos_aposentadoria_id : old('termos_aposentadoria_id')) == $termos->id ? 'selected' : ''}}>
                    {{$termos->nm_termos}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('termos_aposentadoria_id'))
            <h6 class="heading text-danger">{{$errors->first('termos_aposentadoria_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="mt-5">
    <hr />
    <h4>Informações de Gerais</h4>
    <hr />
</div>
<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-2">
        <div class="wrap">
            <label for="nm_local" class="form-control-label">Local:
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="nm_local" class="form-control" value="{{'Instituto de Previdência do Município de Rio Branco - RBPREV'}}" disabled>
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-2">
        <div class="wrap">
            <label for="data_solicitacao" class="form-control-label">Data de Solicitação:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='data_solicitacao' placeholder="11/11/1111" data-mask="00/00/0000" autocomplete="off" value="{{(@$reqApVoluntaria->data_solicitacao)}}" disabled>
        </div>
    </div>

    <div class="col-sm-12 col-md-5 col-lg-5 mt-2">
        <div class="wrap">
            <label for="termos_aposentadoria_responsavel_id" class="form-control-label">Responsável:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="termos_aposentadoria_responsavel_id" id="termos_aposentadoria_responsavel_id" disabled>
                <option value="">Selecione</option>
                @foreach ($termo_aposentadoria_responsavel as $termos_responsavel)
                <option value="{{$termos_responsavel->id}}" {{(empty(old('termos_aposentadoria_responsavel_id')) ? @$reqApVoluntaria->termos_aposentadoria_responsavel_id : old('termos_aposentadoria_responsavel_id')) == $termos_responsavel->id ? 'selected' : ''}}>
                    {{$termos_responsavel->nm_responsavel}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('termos_aposentadoria_responsavel_id'))
            <h6 class="heading text-danger">{{$errors->first('termos_aposentadoria_responsavel_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <a href="">
            <button type="submit" class="btn btn-warning">
                Imprimir
            </button>
        </a>
    </div>
    <div class="wrap mt-1" style="text-align: center;">
        <a href="{{route('reqVoluntaria.index')}}">
            <button type="submit" class="btn btn-info">
                Voltar
            </button>
        </a>
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