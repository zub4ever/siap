<div class="row">
     <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="atendimento_status_id" class="form-control-label">Status atendimento:
                <span class="text-danger">*</span>
            </label>
            <select name="atendimento_status_id" class="form-control" id="titula1">
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
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_assegurado" class="form-control-label">Nome do Assegurado:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_assegurado"  value="{{ @$atendimentos->nm_assegurado }}">
            @if ($errors->has('nm_assegurado'))
                <h6 class="heading text-danger">{{$errors->first('nm_assegurado')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nm_atendimento" class="form-control-label">Tipo de atendimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_atendimento" value="{{ @$atendimentos->nm_atendimento }}">
            @if ($errors->has('nm_atendimento'))
                <h6 class="heading text-danger">{{$errors->first('nm_atendimento')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="nm_cidade" class="form-control-label">Cidade:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_cidade" value="{{ @$atendimentos->nm_cidade }}">
            @if ($errors->has('nm_cidade'))
                <h6 class="heading text-danger">{{$errors->first('nm_cidade')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="numero_telefone" class="form-control-label">Numero de telefone:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="numero_telefone" placeholder="(00)00000-0000" data-mask="(00)00000-0000" maxlength="13" autocomplete="off" value="{{ @$atendimentos->numero_telefone }}">
            @if ($errors->has('numero_telefone'))
                <h6 class="heading text-danger">{{$errors->first('numero_telefone')}}</h6>
            @endif
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