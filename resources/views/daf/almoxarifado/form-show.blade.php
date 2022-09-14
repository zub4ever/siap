<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nm_patrimonio" class="form-control-label">Patrimônio:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_patrimonio" value="{{ @$almoxarifado->nm_patrimonio}}" disabled>
            @if ($errors->has('nm_patrimonio'))
                <h6 class="heading text-danger">{{$errors->first('nm_patrimonio')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="almoxarifado_tipo_id" class="form-control-label">Tipo de item:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_tipo_id" class="form-control almo_tipos-select2" id="almoxarifado_tipo_id" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($almo_tipo as $tp)
                    <option value="{{$tp->id}}" {{(empty(old('almoxarifado_tipo_id')) ? @$almoxarifado->almoxarifado_tipo_id : old('almoxarifado_tipo_id')) == $tp->id ? 'selected' : ''}}>
                        {{$tp->nm_tipo}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_tipo_id'))
                <h6 class="heading text-danger">{{$errors->first('almoxarifado_tipo_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="almoxarifado_contrato_id" class="form-control-label">Contrato:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control almo_contrato-select2" name="almoxarifado_contrato_id" id="almoxarifado_contrato_id" disabled>
                <option value="">Selecione o Contrato</option>
                @foreach ($almo_contrato as $sv)
                    <option value="{{$sv->id}}" {{(empty(old('almoxarifado_contrato_id')) ? @$almoxarifado->almoxarifado_contrato_id : old('almoxarifado_contrato_id')) == $sv->id ? 'selected' : ''}}>
                        {{$sv->nr_contrato}}/{{$sv->ano_contrato}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_contrato_id'))
                <h6 class="heading text-danger">{{$errors->first('almoxarifado_contrato_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<br>
<div class="card-header">
    <h5>Gerais</h5>
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="almoxarifado_marca_id" class="form-control-label">Marca do item:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_marca_id" class="form-control almo_marca-select2" id="almoxarifado_marca_id" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($almo_marca as $marca)
                    <option value="{{$marca->id}}" {{(empty(old('almoxarifado_marca_id')) ? @$almoxarifado->almoxarifado_marca_id : old('almoxarifado_marca_id')) == $marca->id ? 'selected' : ''}}>
                        {{$marca->nm_marca}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_marca_id'))
                <h6 class="heading text-danger">{{$errors->first('almoxarifado_marca_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="almoxarifado_condicao_id" class="form-control-label">Condição do Item:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control almo_condicao-select2" name="almoxarifado_condicao_id" id="almoxarifado_condicao_id" disabled>
                <option value="">Selecione</option>
                @foreach ($almo_condicao as $condi)
                    <option value="{{$condi->id}}" {{(empty(old('almoxarifado_condicao_id')) ? @$almoxarifado->almoxarifado_condicao_id : old('almoxarifado_condicao_id')) == $condi->id ? 'selected' : ''}}>
                        {{$condi->nm_condicao}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_condicao_id'))
                <h6 class="heading text-danger">{{$errors->first('almoxarifado_condicao_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="almoxarifado_localizacao_dpto_id" class="form-control-label">Localização do Item (Departamento):
                <span class="text-danger">*</span>
            </label>
            <select class="form-control almo_localizacao_dpto-select2" name="almoxarifado_localizacao_dpto_id" id="almoxarifado_localizacao_dpto_id" disabled>
                <option value="">Selecione o Contrato</option>
                @foreach ($almo_localizacao_dpto as $dpto)
                    <option value="{{$dpto->id}}" {{(empty(old('almoxarifado_localizacao_dpto_id')) ? @$almoxarifado->almoxarifado_localizacao_dpto_id : old('almoxarifado_localizacao_dpto_id')) == $dpto->id ? 'selected' : ''}}>
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
<br>
<div class="card-header">
    <h5>Gerais</h5>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
        <div class="wrap">
            <label for="descricao" class="form-control-label">Descrição:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="descricao" value="{{ @$almoxarifado->descricao}}" disabled>
            @if ($errors->has('descricao'))
                <h6 class="heading text-danger">{{$errors->first('descricao')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="observacao" class="form-control-label">Observação:
                <span class="text-danger">*</span>
            </label>
            <input type="textarea" class="form-control" name="observacao" rows="5" value="{{ @$almoxarifado->observacao}}" disabled>
            @if ($errors->has('observacao'))
                <h6 class="heading text-danger">{{$errors->first('observacao')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="almoxarifado_cedido_id" class="form-control-label">Item cedido?:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_cedido_id" class="form-control almoxarifado_cedido_id" id="almoxarifado_cedido_id" disabled>
                @foreach ($almo_cedido as $cedido)
                    <option value="{{$cedido->id}}" {{(empty(old('almoxarifado_cedido_id')) ? @$almoxarifado->almoxarifado_cedido_id : old('almoxarifado_cedido_id')) == $cedido->id ? 'selected' : ''}}>
                        {{$cedido->nm_cedido}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_cedido_id'))
                <h6 class="heading text-danger">{{$errors->first('almoxarifado_cedido_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4" id="cedido_localizacao" style='display:none;'>
        <div class="wrap">
            <label for="cedido_localizacao" class="form-control-label">Para onde?:
                <span class="text-danger">*</span>
            </label>
            <input type="textarea" class="form-control" name="cedido_localizacao" value="{{ @$almoxarifado->cedido_localizacao}}" disabled>
            @if ($errors->has('cedido_localizacao'))
                <h6 class="heading text-danger">{{$errors->first('cedido_localizacao')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
        <div class="wrap">
            <label for="almoxarifado_responsavel_id" class="form-control-label">Responsável pelo Item:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_responsavel_id" class="form-control almo_responsavel-select2" id="almoxarifado_responsavel_id" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($almo_responsavel as $resp)
                    <option value="{{$resp->id}}" {{(empty(old('almoxarifado_responsavel_id')) ? @$almoxarifado->almoxarifado_responsavel_id : old('almoxarifado_responsavel_id')) == $resp->id ? 'selected' : ''}}>
                        {{$resp->nm_responsavel}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('almoxarifado_responsavel_id'))
                <h6 class="heading text-danger">{{$errors->first('almoxarifado_responsavel_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <a href="{{route('almoxarifado.Verpdf',$almoxarifado->id)}}">
            <button type="submit" class="btn btn-warning">
                Imprimir
            </button>
        </a>
    </div>
    <div class="wrap mt-1" style="text-align: center;">
        <a href="{{route('almoxarifado.index')}}">
            <button type="submit" class="btn btn-info">
                Voltar
            </button>
        </a>
    </div>
</div>



