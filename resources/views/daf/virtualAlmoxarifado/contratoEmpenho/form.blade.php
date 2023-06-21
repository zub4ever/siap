<div class="mt-5">
    <h4>Informações contratuais</h4>
    <hr>
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="almoxarifado_virtual_empresa_contratada_id" class="form-control-label">Empresa contratada:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_virtual_empresa_contratada_id" class="form-control almo_virtual_empresa-select2"
                    id="almoxarifado_virtual_empresa_contratada_id">
                <option value="">Selecione uma empresa</option>
                @foreach ($empresa_contratada as $marca)
                    <option
                        value="{{$marca->id}}" {{(empty(old('almoxarifado_virtual_empresa_contratada_id')) ? @$empresaContratada->almoxarifado_virtual_empresa_contratada_id : old('almoxarifado_virtual_empresa_contratada_id')) == $marca->id ? 'selected' : ''}}>
                        {{$marca->cnpj}} - {{$marca->razao_social}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_virtual_empresa_contratada_id'))
                <h6 class="heading text-danger">{{$errors->first('almoxarifado_virtual_empresa_contratada_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="elemento_despesa_id" class="form-control-label">Elemento de despesa:
                <span class="text-danger">*</span>
            </label>
            <select name="elemento_despesa_id" class="form-control elemento_despesa"
                    id="elemento_despesa_id">
                <option value="">Selecione uma despesa</option>
                @foreach ($elemento_despesa as $elemento)
                    <option
                        value="{{$elemento->id}}" {{(empty(old('elemento_despesa_id')) ? @$empresaContratada->elemento_despesa_id : old('elemento_despesa_id')) == $elemento->id ? 'selected' : ''}}>
                        {{$elemento->nm_elemento}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('elemento_despesa_id'))
                <h6 class="heading text-danger">{{$errors->first('elemento_despesa_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="fonte_recurso_id" class="form-control-label">Fonte de recurso:
                <span class="text-danger">*</span>
            </label>
            <select name="fonte_despesa_id" class="form-control fonte_recurso">
                <option value="">Selecione uma fonte</option>
                @foreach ($fonte_recurso as $fonte)
                    <option
                        value="{{$fonte->id}}" {{(empty(old('fonte_despesa_id')) ? @$empresaContratada->fonte_despesa_id : old('fonte_despesa_id')) == $fonte->id ? 'selected' : ''}}>
                        {{$fonte->nm_fonte}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('fonte_despesa_id'))
                <h6 class="heading text-danger">{{$errors->first('fonte_despesa_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="programa_trabalho_id" class="form-control-label">Programa de trabalho:
                <span class="text-danger">*</span>
            </label>
            <select name="programa_trabalho_id" class="form-control almo_virtual_programa_trabalho-select2">
                <option value="">Selecione o programa de trabalho</option>
                @foreach ($programa_trabalho as $programa)
                    <option
                        value="{{$programa->id}}" {{(empty(old('programa_trabalho_id')) ? @$empresaContratada->programa_trabalho_id : old('programa_trabalho_id')) == $programa->id ? 'selected' : ''}}>
                        {{$programa->nm_programa}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('programa_trabalho_id'))
                <h6 class="heading text-danger">{{$errors->first('programa_trabalho_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="cod_grp" class="form-control-label">Código do GRP:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="cod_grp" value="{{ @$empresaContratada->cod_grp}}" maxlength="15">
            @if ($errors->has('cod_grp'))
                <h6 class="heading text-danger">{{$errors->first('cod_grp')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="saldo_total" class="form-control-label">Valor Total:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus valor" name="saldo_total"
                   value="{{empty(old('saldo_total')) ? @$empresaContratada->saldo_total : old('saldo_total')}}">
            @if ($errors->has('saldo_total'))
                <h6 class="heading text-danger">{{$errors->first('saldo_total')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="valor_geral" class="form-control-label">Valor usado:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus valor" name="valor_geral"
                   value="{{empty(old('valor_geral')) ? @$empresaContratada->valor_geral : old('valor_geral')}}" disabled>
            @if ($errors->has('valor_geral'))
                <h6 class="heading text-danger">{{$errors->first('valor_geral')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="valor_geral" class="form-control-label">Valor restante:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus valor" name="valor_geral"
                   value="{{empty(old('valor_geral')) ? @$empresaContratada->valor_geral : old('valor_geral')}}" disabled>
            @if ($errors->has('valor_geral'))
                <h6 class="heading text-danger">{{$errors->first('valor_geral')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="nr_contrato" class="form-control-label">Nº Contrato:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_contrato" value="{{@$empresaContratada->nr_contrato}} " maxlength="15">
            @if ($errors->has('nr_contrato'))
                <h6 class="heading text-danger">{{$errors->first('nr_contrato')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="nr_sei" class="form-control-label">Nº Processo no SEI:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_sei" value="{{@$empresaContratada->nr_sei}} " maxlength="15">
            @if ($errors->has('nr_sei'))
                <h6 class="heading text-danger">{{$errors->first('nr_sei')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="data_assinatura" class="form-control-label">Data de assinatura:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='data_assinatura' placeholder="00/00/0000" data-mask="00/00/0000"
                   autocomplete="off"
                   value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="hora_assinatura" class="form-control-label">Hora de assinatura:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="hora_assinatura" placeholder="00:00:00" data-mask="00:00:00"
                   autocomplete="off"
                   value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="prazo_entrega_contrato" class="form-control-label">Prazo de entrega estipulado:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="prazo_entrega_contrato" value="{{@$empresaContratada->prazo_entrega_contrato}}">
            @if ($errors->has('prazo_entrega_contrato'))
                <h6 class="heading text-danger">{{$errors->first('prazo_entrega_contrato')}}</h6>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
        <div class="wrap">
            <label for="descricao" class="form-control-label">Descrição:
                <span class="text-danger">*</span>
            </label>
            <div class="form-group">
            <textarea type="text" class="form-control" name="descricao"
                      rows="4" value="{{@$empresaContratada->descricao}}">
            </textarea>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: right;">
        <button type="submit" class="btn btn-info">
            Salvar
        </button>
    </div>
</div>




