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
            <select name="almoxarifado_virtual_empresa_contratada_id" class="form-control almo_virtual_empresa-select2" id="almoxarifado_virtual_empresa_contratada_id">
                <option value="">Selecione uma empresa</option>
                                @foreach ($empresa_contratada as $marca)
                                    <option value="{{$marca->id}}" {{(empty(old('almoxarifado_virtual_empresa_contratada_id')) ? @$almoxarifado->almoxarifado_virtual_empresa_contratada_id : old('almoxarifado_virtual_empresa_contratada_id')) == $marca->id ? 'selected' : ''}}>
                                        {{$marca->razao_social}}
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
            <label for="almoxarifado_marca_id" class="form-control-label">Elemento de despesa:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_marca_id" class="form-control elemento_despesa-select2" id="almoxarifado_marca_id">
                <option value="">Selecione uma despesa</option>
                {{--                @foreach ($almo_marca as $marca)--}}
                {{--                    <option value="{{$marca->id}}" {{(empty(old('almoxarifado_marca_id')) ? @$almoxarifado->almoxarifado_marca_id : old('almoxarifado_marca_id')) == $marca->id ? 'selected' : ''}}>--}}
                {{--                        {{$marca->nm_marca}}--}}
                {{--                    </option>--}}
                {{--                @endforeach--}}
            </select>
            {{--            @if ($errors->has('almoxarifado_marca_id'))--}}
            {{--                <h6 class="heading text-danger">{{$errors->first('almoxarifado_marca_id')}}</h6>--}}
            {{--            @endif--}}
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="almoxarifado_marca_id" class="form-control-label">Fonte de recurso:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_marca_id" class="form-control fonte_recurso-select2" id="almoxarifado_marca_id">
                <option value="">Selecione uma fonte</option>
                {{--                @foreach ($almo_marca as $marca)--}}
                {{--                    <option value="{{$marca->id}}" {{(empty(old('almoxarifado_marca_id')) ? @$almoxarifado->almoxarifado_marca_id : old('almoxarifado_marca_id')) == $marca->id ? 'selected' : ''}}>--}}
                {{--                        {{$marca->nm_marca}}--}}
                {{--                    </option>--}}
                {{--                @endforeach--}}
            </select>
            {{--            @if ($errors->has('almoxarifado_marca_id'))--}}
            {{--                <h6 class="heading text-danger">{{$errors->first('almoxarifado_marca_id')}}</h6>--}}
            {{--            @endif--}}
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="almoxarifado_marca_id" class="form-control-label">Programa de trabalho:
                <span class="text-danger">*</span>
            </label>
            <select name="almoxarifado_marca_id" class="form-control almo_virtual_programa_trabalho-select2" id="almoxarifado_marca_id">
                <option value="">Selecione o programa de trabalho</option>
                {{--                @foreach ($almo_marca as $marca)--}}
                {{--                    <option value="{{$marca->id}}" {{(empty(old('almoxarifado_marca_id')) ? @$almoxarifado->almoxarifado_marca_id : old('almoxarifado_marca_id')) == $marca->id ? 'selected' : ''}}>--}}
                {{--                        {{$marca->nm_marca}}--}}
                {{--                    </option>--}}
                {{--                @endforeach--}}
            </select>
            {{--            @if ($errors->has('almoxarifado_marca_id'))--}}
            {{--                <h6 class="heading text-danger">{{$errors->first('almoxarifado_marca_id')}}</h6>--}}
            {{--            @endif--}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="cod_grp" class="form-control-label">Código do GRP:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="cod_grp" value="{{ @$almoxarifado->cod_grp}}">
            @if ($errors->has('cod_grp'))
                <h6 class="heading text-danger">{{$errors->first('cod_grp')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="valor_geral" class="form-control-label">Valor Total:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus valor" name="valor_geral"
                   value="{{empty(old('valor_geral')) ? @$projeto->valor_geral : old('valor_geral')}}">
            @if ($errors->has('valor_geral'))
                <h6 class="heading text-danger">{{$errors->first('valor_geral')}}</h6>
            @endif
        </div>
    </div><div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="wrap">
            <label for="valor_geral" class="form-control-label">Valor usado:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus valor" name="valor_geral"
                   value="{{empty(old('valor_geral')) ? @$projeto->valor_geral : old('valor_geral')}}" disabled>
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
                   value="{{empty(old('valor_geral')) ? @$projeto->valor_geral : old('valor_geral')}}" disabled>
            @if ($errors->has('valor_geral'))
                <h6 class="heading text-danger">{{$errors->first('valor_geral')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nr_processo" class="form-control-label">Nº Contrato:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_processo" value="{{@$ctc->nr_processo}}">
            @if ($errors->has('nr_processo'))
                <h6 class="heading text-danger">{{$errors->first('nr_processo')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="data_pedido" class="form-control-label">Data de assinatura:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='data_pedido' placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off"
                   value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="data_pedido" class="form-control-label">Hora de assinatura:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="data_pedido" placeholder="00:00:00" data-mask="00:00:00" autocomplete="off"
                   value="">
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
                      rows="4" value="{{@$atendimentos->descricao}}">
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




