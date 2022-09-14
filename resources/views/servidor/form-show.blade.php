<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Órgão:
                <span class="text-danger">*</span>
            </label>
            <select name="origin_id" class="form-control" id="titula1" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($origin as $orgao)
                <option value="{{$orgao->id}}"
                        {{(empty(old('origin_id')) ? @$serve->origin_id : old('origin_id')) == $orgao->id ? 'selected' : ''}}>
                    {{$orgao->nm_origem}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('origin_id'))
            <h6 class="heading text-danger">{{$errors->first('origin_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="tp_servidor_id" class="form-control-label">Tipo de servidor:
                <span class="text-danger">*</span>
            </label>
            <select name="tp_servidor_id" class="form-control" id="titula1" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($tpservidor as $tp)
                <option value="{{$tp->id}}"
                        {{(empty(old('tp_servidor_id')) ? @$serve->tp_servidor_id : old('tp_servidor_id')) == $tp->id ? 'selected' : ''}}>
                    {{$tp->nm_tpservidor}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('tp_servidor_id'))
            <h6 class="heading text-danger">{{$errors->first('tp_servidor_id')}}</h6>
            @endif
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="matricula" class="form-control-label">Matrícula:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="matricula" value="{{ @$serve->matricula}}" disabled>
            @if ($errors->has('matricula'))
            <h6 class="heading text-danger">{{$errors->first('matricula')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-9 col-lg-9 mt-4">
        <div class="wrap">
            <label for="nm_servidor" class="form-control-label">Nome do servidor:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_servidor" value="{{ @$serve->nm_servidor}}" disabled>
            @if ($errors->has('nm_servidor'))
            <h6 class="heading text-danger">{{$errors->first('nm_servidor')}}</h6>
            @endif
        </div>
    </div>


</div>

<!-- // // // -->

<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="data_nascimento" class="form-control-label">Data de Nascimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='data_nascimento' placeholder="11/11/1111" data-mask="00/00/0000" autocomplete="off"
            value="{{date('d-m-Y', strtotime(@$serve->data_nascimento))}}" disabled>

        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="rg" class="form-control-label">RG:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="rg" value="{{ @$serve->rg}}" maxlength="8" disabled>
            @if ($errors->has('rg'))
            <h6 class="heading text-danger">{{$errors->first('rg')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="orgao_expedidor_id" class="form-control-label">Órgão Expedidor:
                <span class="text-danger">*</span>
            </label>
            <select name="orgao_expedidor_id" class="form-control" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($orgao_expedidor as $ex)
                <option value="{{$ex->id}}"
                        {{(empty(old('orgao_expedidor_id')) ? @$serve->orgao_expedidor_id : old('orgao_expedidor_id')) == $ex->id ? 'selected' : ''}}>
                    {{$ex->nm_orgao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('orgao_expedidor_id'))
            <h6 class="heading text-danger">{{$errors->first('orgao_expedidor_id')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="cpf" class="form-control-label">CPF:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="cpf" id="cpf" value="{{empty(old('cpf')) ? @$serve->cpf : old('cpf')}}" data-mask="999.999.999-99"  autocomplete="off" maxlength="14" disabled>
            @if ($errors->has('cpf'))
            <h6 class="heading text-danger">{{$errors->first('cpf')}}</h6>
            @endif
        </div>
    </div>

</div>


<!-- // // // -->

<div class="row">

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="pis_pasep" class="form-control-label">PIS/PASESP:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="pis_pasep" value="{{@$serve->pis_pasep}}" maxlength="14" disabled>
            @if ($errors->has('pis_pasep'))
            <h6 class="heading text-danger">{{$errors->first('pis_pasep')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_pai" class="form-control-label">Nome do Pai:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="nm_pai" value="{{@$serve->nm_pai}}" disabled>
            @if ($errors->has('nm_pai'))
            <h6 class="heading text-danger">{{$errors->first('nm_pai')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_mae" class="form-control-label">Nome da Mãe:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_mae" value="{{@$serve->nm_mae}}" disabled>
            @if ($errors->has('nm_pai'))
            <h6 class="heading text-danger">{{$errors->first('nm_pai')}}</h6>
            @endif
        </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="marital_status" class="form-control-label">Estado Civil:
                <span class="text-danger">*</span>
            </label>

            <select name="marital_status_id" class="form-control" id="titula1" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($marital_status as $ms)
                <option value="{{$ms->id}}"
                        {{(empty(old('marital_status_id')) ? @$serve->marital_status_id : old('marital_status_id')) == $ms->id ? 'selected' : ''}}>
                    {{$ms->status_civil}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('marital_status_id'))
            <h6 class="heading text-danger">{{$errors->first('marital_status_id')}}</h6>
            @endif
        </div>
    </div>
    <!-- // // // -->
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="sexo_id" class="form-control-label">Sexo:
                <span class="text-danger">*</span>
            </label>

            <select name="sexo_id" class="form-control" id="titula1" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($sexo as $sx)
                <option value="{{$sx->id}}"
                        {{(empty(old('sexo_id')) ? @$serve->sexo_id : old('sexo_id')) == $sx->id ? 'selected' : ''}}>
                    {{$sx->nm_sexo}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('sexo_id'))
            <h6 class="heading text-danger">{{$errors->first('sexo_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="obito_id" class="form-control-label">Obito?:
                <span class="text-danger">*</span>
            </label>

            <select name="obito_id" class="form-control" id="titula1" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($obito as $ob)
                <option value="{{$ob->id}}"
                     {{(empty(old('obito_id')) ? @$serve->obito_id : old('obito_id')) == $ob->id ? 'selected' : ''}}>
                    {{$ob->nm_obito}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('obito_id'))
            <h6 class="heading text-danger">{{$errors->first('obito_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class ="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="type_serve_id" class="form-control-label">Situação do Servidor:
                <span class="text-danger">*</span>
            </label>

            <select name="type_serve_id" class="form-control" id="titula1" disabled>
                <option value="">Selecione uma opção</option>
                @foreach ($type_serve as $tp)
                <option value="{{$tp->id}}"
                    {{(empty(old('type_serve_id')) ? @$serve->type_serve_id : old('type_serve_id')) == $tp->id ? 'selected' : ''}}>
                    {{$tp->status_servidor}}
                </option>
                @endforeach
            </select>
            @if($errors->has('type_serve_id'))
            <h6 class="heading text-danger">{{$errors->first('type_serve_id')}}</h6>
            @endif
        </div>
    </div>
</div>

