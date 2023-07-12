<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="atendimento_status_id" class="form-control-label">Status atendimento:
                <span class="text-danger">*</span>
            </label>
            <select name="atendimento_status_id" class="form-control" id="titula1" >

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

            </label>
            <input type="text" class="form-control" name="matricula" value="{{ @$atendimentos->matricula}}">
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
            <input type="text" class="form-control" name="nm_assegurado"  value="{{ @$atendimentos->nm_assegurado }}">
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
            <input type="text" class="form-control focus" name="cpf" value="{{empty(old('cpf')) ? @$atendimentos->cpf : old('cpf')}}" data-mask="999.999.999-99" autocomplete="off" maxlength="14">
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
                   value="{{ !empty($atendimentos->data_nascimento) ? date('d-m-Y', strtotime($atendimentos->data_nascimento)) : '' }}">
        </div>
    </div>



</div>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="city_id" class="form-control-label">Cidade:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control cidadeSelect2" name="city_id" id="city_id">
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
            <select class="form-control estadoSelect2" name="state_id" id="state_id">
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
            <select class="form-control cidadeSelect2" name="atendimento_assunto_id" id="atendimento_assunto_id">
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
            <select class="form-control estadoSelect2" name="almoxarifado_localizacao_dpto_id" id="almoxarifado_localizacao_dpto_id">
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
            <input type="text" class="form-control" name="numero_telefone" placeholder="(00)00000-0000" data-mask="(00)00000-0000" maxlength="13" autocomplete="off" value="{{ @$atendimentos->numero_telefone }}">
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
            <input type="text" class="form-control" name="email" value="{{ @$atendimentos->email }}">
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
        <select class="form-control" name="atendimento_tipo_servidor_id" id="atendimento_tipo_servidor_id">
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
                      rows="4" value="{{@$atendimentos->descricao}}">
            </textarea>
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
