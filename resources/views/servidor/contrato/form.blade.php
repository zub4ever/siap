<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Órgão:
                <span class="text-danger">*</span>
            </label>
            <select name="origin_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($origin as $orgao)
                <option value="{{$orgao->id}}">
                    {{$orgao->nm_origem}}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_servidor" class="form-control-label">Nome do servidor:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_servidor" value="">
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="matricula" class="form-control-label">Matrícula:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="matricula" value="">
        </div>
    </div>
</div>

<!-- // // // -->

<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-4 mt-4">
        <div class="wrap">
            <label for="data_nascimento" class="form-control-label">Data de Nascimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="data_nascimento" value="" data-mask="00/00/0000">
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="rg" class="form-control-label">RG:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="rg" value="">
        </div>
    </div>
           <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="orgao_expedidor_id" class="form-control-label">Órgão Expedidor:
                <span class="text-danger">*</span>
            </label>

            <select name="orgao_expedidor_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($orgao_expedidor as $ex)
                <option value="{{$ex->id}}">
                    {{$ex->nm_orgao}}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="cpf" class="form-control-label">CPF:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="cpf" value="">
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
            <input type="text" class="form-control" name="pis_pasep" value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_pai" class="form-control-label">Nome do Pai:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="nm_pai" value="" >
        </div>
    </div>

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_mae" class="form-control-label">Nome da Mãe:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_mae" value="">
        </div>
    </div>

</div>

<!-- // // // -->

<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="marital_status" class="form-control-label">Estado Civil:
                <span class="text-danger">*</span>
            </label>

            <select name="marital_status_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($marital_status as $ms)
                <option value="{{$ms->id}}">
                    {{$ms->status_civil}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- // // // -->
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="sexo_id" class="form-control-label">Sexo:
                <span class="text-danger">*</span>
            </label>

            <select name="sexo_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($sexo as $sx)
                <option value="{{$sx->id}}">
                    {{$sx->nm_sexo}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="obito_id" class="form-control-label">Obito:
                <span class="text-danger">*</span>
            </label>

            <select name="obito_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($obito as $ob)
                <option value="{{$ob->id}}">
                    {{$ob->nm_obito}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class ="row">

           <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="type_serve_id" class="form-control-label">Situação do Servidor:
                <span class="text-danger">*</span>
            </label>

            <select name="type_serve_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($type_serve as $tp)
                <option value="{{$tp->id}}">
                    {{$tp->status_servidor}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar Servidor
        </button>
    </div>
</div>
