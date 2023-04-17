<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="serve_id" class="form-control-label">Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control assegurado-select2" name="serve_id" id="serve_id">
                <option value="">Selecione o servidor</option>
                @foreach ($servidor as $sv)
                <option value="{{$sv->id}}" {{(empty(old('serve_id')) ? @$aposentadorias->serve_id : old('serve_id')) == $sv->id ? 'selected' : ''}}>
                    {{$sv->matricula}} - {{$sv->nm_servidor}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('serve_id'))
            <h6 class="heading text-danger">{{$errors->first('serve_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="funcao_id" class="form-control-label">Cargo:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control funcaounassegurado-select2" name="funcao_id" id="funcao_id">
                <option value="">Selecione o Função</option>
                @foreach ($funcao as $funcao)
                <option value="{{$funcao->id}}" {{(empty(old('funcao_id')) ? @$aposentadorias->funcao_id : old('funcao_id')) == $funcao->id ? 'selected' : ''}}>
                    {{$funcao->id}} - {{$funcao->nm_funcao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('funcao_id'))
            <h6 class="heading text-danger">{{$errors->first('funcao_id')}}</h6>
            @endif
        </div>
    </div> 
</div>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="tipo_de_aposentadoria_id" class="form-control-label">Tipo de aposentadoria:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control tipoassegurado-select2" name="tipo_de_aposentadoria_id" id="tipo_de_aposentadoria_id">
                <option value="">Selecione o tipo</option>
                @foreach ($tipo_aposentadoria as $aposentadoria)
                <option value="{{$aposentadoria->id}}" {{(empty(old('tipo_de_aposentadoria_id')) ? @$aposentadorias->tipo_de_aposentadoria_id : old('tipo_de_aposentadoria_id')) == $aposentadoria->id ? 'selected' : ''}}>
                    {{$aposentadoria->id}} - {{$aposentadoria->nm_aposentadoria}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('tipo_de_aposentadoria_id'))
            <h6 class="heading text-danger">{{$errors->first('tipo_de_aposentadoria_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="regras_aposentadoria_id" class="form-control-label">Regra de aposentadoria:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control regraassegurado-select2" name="regras_aposentadoria_id" id="regras_aposentadoria_id">
                <option value="">Selecione a regra</option>
                @foreach ($regra as $regras)
                <option value="{{$regras->id}}" {{(empty(old('regras_aposentadoria_id')) ? @$aposentadorias->regras_aposentadoria_id : old('regras_aposentadoria_id')) == $regras->id ? 'selected' : ''}}>
                    {{$regras->id}} - {{$regras->nm_regra}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('regras_aposentadoria_id'))
            <h6 class="heading text-danger">{{$errors->first('regras_aposentadoria_id')}}</h6>
            @endif
        </div>
    </div> 
</div>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nr_processo" class="form-control-label">Nº Processo:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='nr_processo' placeholder="00.000"  autocomplete="off"
                   value="{{@$aposentadorias->nr_processo}}">
            @if ($errors->has('nr_processo'))
            <h6 class="heading text-danger">{{$errors->first('nr_processo')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nr_portaria" class="form-control-label">Nº Portaria:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='nr_portaria' placeholder="00.000"  autocomplete="off"
                   value="{{@$aposentadorias->nr_portaria}}">
            @if ($errors->has('nr_portaria'))
            <h6 class="heading text-danger">{{$errors->first('nr_portaria')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nr_protocolo" class="form-control-label">Nº Protocolo:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='nr_protocolo' placeholder="00.000"  autocomplete="off"
                   value="{{@$aposentadorias->nr_protocolo}}">
            @if ($errors->has('nr_protocolo'))
            <h6 class="heading text-danger">{{$errors->first('nr_protocolo')}}</h6>
            @endif
        </div>
    </div>

</div>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="data_aposentadoria" class="form-control-label">Data da Aposentadoria:
            </label>          
            <input type="text" class="form-control" name="data_aposentadoria" placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off" 
                   @if(isset($aposentadorias->data_aposentadoria)) value="{{date('d-m-Y', strtotime($aposentadorias->data_aposentadoria))}}" @endif>
        </div>
    </div>


    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="data_diario_oficial" class="form-control-label">Data do diário:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="data_diario_oficial" placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off" 
                   @if(isset($aposentadorias->data_diario_oficial)) value="{{date('d-m-Y', strtotime($aposentadorias->data_diario_oficial))}}" @endif>

        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nr_diario" class="form-control-label">Nº Diário:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='nr_diario' placeholder="00.000"  autocomplete="off"
                   value="{{@$aposentadorias->nr_diario}}">
            @if ($errors->has('nr_diario'))
            <h6 class="heading text-danger">{{$errors->first('nr_diario')}}</h6>
            @endif
        </div>
    </div>

</div>



















<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </div>
</div>