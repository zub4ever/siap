<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="tce_mes_id" class="form-control-label">Mês:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="tce_mes_id" id="tce_mes_id">
                <option value="">Selecione o Mês</option>
                @foreach ($processo_mes as $sv)
                <option value="{{$sv->id}}" {{(empty(old('tce_mes_id')) ? @$processos->tce_mes_id : old('tce_mes_id')) == $sv->id ? 'selected' : ''}}>
                    {{$sv->nm_mes}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('tce_mes_id'))
            <h6 class="heading text-danger">{{$errors->first('tce_mes_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="tce_ano_id" class="form-control-label">Ano:
                <span class="text-danger">*</span>
            </label>
            <select name="tce_ano_id" class="form-control">

                <option value="">Selecione o ano</option>
                @foreach ($processo_ano as $atividade)
                <option value="{{$atividade->id}}" {{(empty(old('tce_ano_id')) ? @$processos->tce_ano_id : old('tce_ano_id')) == $atividade->id ? 'selected' : ''}}>
                    {{$atividade->nm_ano}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('tce_ano_id'))
            <h6 class="heading text-danger">{{$errors->first('tce_ano_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-8 col-lg-8 mt-4">
        <div class="wrap">
            <label for="nm_assegurado" class="form-control-label">Nome Assegurado:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_assegurado" value="{{@$processos->nm_assegurado}}">
            @if ($errors->has('nm_assegurado'))
            <h6 class="heading text-danger">{{$errors->first('nm_assegurado')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="funcao_id" class="form-control-label">Função:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control funcaoTCE-select2" name="funcao_id" id="funcao_id">
                <option value="">Selecione a Função</option>
                @foreach ($funcao as $funcao)
                <option value="{{$funcao->id}}" {{(empty(old('funcao_id')) ? @$processos->funcao_id : old('funcao_id')) == $funcao->id ? 'selected' : ''}}>
                    {{$funcao->id}} - {{$funcao->nm_funcao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('funcao_id'))
            <h6 class="heading text-danger">{{$errors->first('funcao_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="tipo_aposentadoria_id" class="form-control-label">Aposentado? Tipo:                
            </label>
            <select class="form-control" name="tipo_aposentadoria_id" id="tipo_aposentadoria_id">
                <option value="">Selecione</option>
                @foreach ($tipo_aposentadoria as $ap)
                <option value="{{$ap->id}}" {{(empty(old('tipo_aposentadoria_id')) ? @$processos->tipo_aposentadoria_id : old('tipo_aposentadoria_id')) == $ap->id ? 'selected' : ''}}>
                    {{$ap->id}} - {{$ap->nm_aposentadoria}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('tipo_aposentadoria_id'))
            <h6 class="heading text-danger">{{$errors->first('tipo_aposentadoria_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="tipo_pensao_id" class="form-control-label">Pensionista? Tipo:                
            </label>
            <select class="form-control" name="tipo_pensao_id" id="tipo_pensao_id">
                <option value="">Selecione</option>
                @foreach ($tipo_pensao as $pensao)
                <option value="{{$pensao->id}}" {{(empty(old('tipo_pensao_id')) ? @$processos->tipo_pensao_id : old('tipo_pensao_id')) == $pensao->id ? 'selected' : ''}}>
                    {{$pensao->id}} - {{$pensao->nm_pensao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('tipo_pensao_id'))
            <h6 class="heading text-danger">{{$errors->first('tipo_pensao_id')}}</h6>
            @endif
        </div>
    </div>   
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="data_notificacao" class="form-control-label">Data da Notificação:

            </label>
            
            <input type="text" class="form-control" name="data_notificacao" placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off" 
                   @if(isset($processos->data_notificacao)) value="{{date('d-m-Y', strtotime($processos->data_notificacao))}}" @endif>
        </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nr_acordao" class="form-control-label">Acordão:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='nr_acordao' placeholder="0.000/0000"  autocomplete="off"
                   value="">
        </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="data_diario_eletronico" class="form-control-label">Data do diário eletrônico de Contas:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="data_diario_eletronico" placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off" 
                   @if(isset($processos->data_diario_eletronico)) value="{{date('d-m-Y', strtotime($processos->data_diario_eletronico))}}" @endif>

        </div>
    </div>

</div>

<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar
        </button>
    </div>
</div>
