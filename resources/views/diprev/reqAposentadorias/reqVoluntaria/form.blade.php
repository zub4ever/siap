<div class="row">
    <div class="col-sm-12 col-md-9 col-lg-9 mt-4">
        <div class="wrap">
            <label for="nm_requerente" class="form-control-label">Nome do requente:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_requerente" value="{{ @$reqApVoluntaria->nm_requerente}}">
            @if ($errors->has('nm_requerente'))
            <h6 class="heading text-danger">{{$errors->first('nm_requerente')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="matricula" class="form-control-label">Matrícula:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="matricula" value="{{ @$reqApVoluntaria->matricula}}">
            @if ($errors->has('matricula'))
            <h6 class="heading text-danger">{{$errors->first('matricula')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="data_nascimento" class="form-control-label">Data de Nascimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='data_nascimento' placeholder="11/11/1111" data-mask="00/00/0000" autocomplete="off" value="{{strtotime(@$reqApVoluntaria->data_nascimento)}}">
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="cpf" class="form-control-label">CPF:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="cpf" value="{{empty(old('cpf')) ? @$reqApVoluntaria->cpf : old('cpf')}}" data-mask="999.999.999-99" autocomplete="off" maxlength="14">
            @if ($errors->has('cpf'))
            <h6 class="heading text-danger">{{$errors->first('cpf')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="rg" class="form-control-label">RG:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="rg" value="{{ @$reqApVoluntaria->rg}}" maxlength="8">
            @if ($errors->has('rg'))
            <h6 class="heading text-danger">{{$errors->first('rg')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="pis_pasep" class="form-control-label">PISPASEP:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="pis_pasep" value="{{ @$reqApVoluntaria->pis_pasep}}" maxlength="20">
            @if ($errors->has('pis_pasep'))
            <h6 class="heading text-danger">{{$errors->first('pis_pasep')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="sexo_id" class="form-control-label">Sexo:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="sexo_id" id="sexo_id">
                <option value="">Selecione</option>
                @foreach ($sexo as $st)
                <option value="{{$st->id}}" {{(empty(old('sexo_id')) ? @$reqApVoluntaria->sexo_id : old('sexo_id')) == $st->id ? 'selected' : ''}}>
                    {{$st->nm_sexo}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('sexo_id'))
            <h6 class="heading text-danger">{{$errors->first('sexo_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="status_civil_id" class="form-control-label">Status Civil:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="status_civil_id" id="status_civil_id">
                <option value="">Selecione</option>
                @foreach ($marital_status as $mt)
                <option value="{{$mt->id}}" {{(empty(old('status_civil_id')) ? @$reqApVoluntaria->status_civil_id : old('status_civil_id')) == $mt->id ? 'selected' : ''}}>
                    {{$mt->status_civil}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('status_civil_id'))
            <h6 class="heading text-danger">{{$errors->first('status_civil_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<br>
<div class="card-header">
    <h5>Endereço</h5>
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nm_rua" class="form-control-label">Endereço:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_rua" value="{{ @$reqApVoluntaria->nm_rua}}">
            @if ($errors->has('nm_rua'))
            <h6 class="heading text-danger">{{$errors->first('nm_rua')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="numero_casa" class="form-control-label">Número:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="numero_casa" value="{{ @$reqApVoluntaria->numero_casa}}">
            @if ($errors->has('numero_casa'))
            <h6 class="heading text-danger">{{$errors->first('numero_casa')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="complemento" class="form-control-label">Complemento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="complemento" value="{{ @$reqApVoluntaria->complemento}}">
            @if ($errors->has('complemento'))
            <h6 class="heading text-danger">{{$errors->first('complemento')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="cep" class="form-control-label">CEP:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="cep" value="{{ @$reqApVoluntaria->cep}}">
            @if ($errors->has('cep'))
            <h6 class="heading text-danger">{{$errors->first('cep')}}</h6>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nm_bairro" class="form-control-label">Bairro:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_bairro" value="{{ @$reqApVoluntaria->nm_bairro}}">
            @if ($errors->has('nm_bairro'))
            <h6 class="heading text-danger">{{$errors->first('nm_bairro')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="city_id" class="form-control-label">Municipio:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="city_id" id="city_id">
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

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="nm_uf" class="form-control-label">UF:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_uf" value="{{ @$reqApVoluntaria->nm_uf}}">
            @if ($errors->has('nm_uf'))
            <h6 class="heading text-danger">{{$errors->first('nm_uf')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="nr_telefone" class="form-control-label">Telefone:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_telefone" value="{{ @$reqApVoluntaria->nr_telefone}}">
            @if ($errors->has('nr_telefone'))
            <h6 class="heading text-danger">{{$errors->first('nr_telefone')}}</h6>
            @endif
        </div>
    </div>
</div>
<br>
<div class="card-header">
    <h5>Contrato</h5>
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="vinculo_municipio_id" class="form-control-label">Vinculo:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="vinculo_municipio_id" id="vinculo_municipio_id">
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
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="funcao_id" class="form-control-label">Função:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control func-select2" name="funcao_id" id="funcao_id">
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
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="nm_cargo" class="form-control-label">Cargo Efetivo:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_cargo" value="{{ @$reqApVoluntaria->nm_cargo}}">
            @if ($errors->has('nm_cargo'))
            <h6 class="heading text-danger">{{$errors->first('nm_cargo')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="orgao_id" class="form-control-label">Orgão:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control func-select2" name="orgao_id" id="orgao_id">
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
    <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
        <div class="wrap">
            <label for="nm_lotacao" class="form-control-label">Lotação:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_lotacao" value="{{ @$reqApVoluntaria->nm_lotacao}}">
            @if ($errors->has('nm_lotacao'))
            <h6 class="heading text-danger">{{$errors->first('nm_lotacao')}}</h6>
            @endif
        </div>
    </div>
</div>
<br>
<div class="card-header">
    <h5>Nos termos do:</h5>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
        <div class="wrap">
            <label for="termos_aposentadoria_id" class="form-control-label">Aposentadoria nos termos:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="termos_aposentadoria_id" id="termos_aposentadoria_id">
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
<br>
<div class="card-header">
    <h5>Geral</h5>
</div>
<br>
<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_local" class="form-control-label">Local:
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="nm_local" class="form-control" value="{{'Instituto de Previdência do Município de Rio Branco - RBPREV'}}" disabled>
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="data_solicitacao" class="form-control-label">Data de Solicitação:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='data_solicitacao' placeholder="11/11/1111" data-mask="00/00/0000" autocomplete="off" value="{{strtotime(@$reqApVoluntaria->data_solicitacao)}}">
        </div>
    </div>

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="termos_aposentadoria_responsavel_id" class="form-control-label">Aposentadoria nos termos:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="termos_aposentadoria_responsavel_id" id="termos_aposentadoria_responsavel_id">
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
        <button type="submit" class="btn btn-success">
            Salvar requerimento
        </button>
    </div>
</div>
<script type="text/javascript">
    $('.date').datepicker({
        format: 'dd-mm-yyyy'
    });
</script>