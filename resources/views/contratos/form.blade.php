<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Origem Servidor:
                <span class="text-danger">*</span>
            </label>
            <select name="origin_id" class="form-control" data-plugin="select2">

                <option value="">Selecione uma opção</option>
                @foreach ($origin as $atividade)
                <option value="{{$atividade->id}}" {{(empty(old('origin_id')) ? @$contrato->origin_id : old('origin_id')) == $atividade->id ? 'selected' : ''}}>
                    {{$atividade->nm_origem}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('origin_id'))
            <h6 class="heading text-danger">{{$errors->first('origin_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="serve_id" class="form-control-label">Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control servidor-select2" name="serve_id" id="serve_id">
                <option value="">Selecione o servidor</option>
                @foreach ($servidor as $sv)
                <option value="{{$sv->id}}" {{(empty(old('serve_id')) ? @$contrato->serve_id : old('serve_id')) == $sv->id ? 'selected' : ''}}>
                    {{$sv->matricula}} - {{$sv->nm_servidor}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('serve_id'))
            <h6 class="heading text-danger">{{$errors->first('serve_id')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="nr_contrato" class="form-control-label">Nº Contrato:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_contrato" value="{{@$contrato->nr_contrato}}">
            @if ($errors->has('nr_contrato'))
            <h6 class="heading text-danger">{{$errors->first('nr_contrato')}}</h6>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="orgao_id" class="form-control-label">Orgão:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control orgao-select2" name="orgao_id" id="orgao_id">
                <option value="">Selecione o orgão</option>
                @foreach ($orgao as $orgao)
                <option value="{{$orgao->id}}" {{(empty(old('orgao_id')) ? @$contrato->orgao_id : old('orgao_id')) == $orgao->id ? 'selected' : ''}}>
                    {{$orgao->id}} - {{$orgao->nm_orgao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('orgao_id'))
            <h6 class="heading text-danger">{{$errors->first('orgao_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="funcao_id" class="form-control-label">Função:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control funcao-select2" name="funcao_id" id="funcao_id">
                <option value="">Selecione o Função</option>
                @foreach ($funcao as $funcao)
                <option value="{{$funcao->id}}" {{(empty(old('funcao_id')) ? @$contrato->funcao_id : old('funcao_id')) == $funcao->id ? 'selected' : ''}}>
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
<br>



<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar
        </button>
    </div>
</div>