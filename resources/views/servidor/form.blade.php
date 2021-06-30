<div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="matricula" class="form-control-label">Matrícula:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="matricula"
                   value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_servidor" class="form-control-label">Nome:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_servidor"
                   value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="data_nascimento" class="form-control-label">Data Nascimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="data_nascimento" value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
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
</div>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="rg" class="form-control-label">RG:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="rg" value="">
        </div>
    </div>  
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="orgao_expedidor_id" class="form-control-label">Órgão Emissor:
                <span class="text-danger">*</span>
            </label>
            <select name="orgao_expedidor_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($orgao_expedidor as $orgaoEx)
                <option value="{{$orgaoEx->id}}">
                    {{$orgaoEx->nm_orgao}}
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
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="pis_pasep" class="form-control-label">PIS/PASEP:
            </label>
            <input type="text" class="form-control" name="pis_pasep" value="">
        </div>
    </div>  
</div>
<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_pai" class="form-control-label">Nome do Pai:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_pai" value="">
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
    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="obito_id" class="form-control-label">Obito:
                <span class="text-danger">*</span>
            </label>
            <select name="obito_id" class="form-control" id="titula1">
                <option value="">Selecione</option>
                @foreach ($obito as $obito)
                <option value="{{$obito->id}}">
                    {{$obito->nm_obito}}
                </option>
                @endforeach
            </select>
        </div>
    </div> 
</div>
<div class ="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Origem do Servidor:
                <span class="text-danger">*</span>
            </label>
            <select name="origin_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($origin as $origem)
                <option value="{{$origem->id}}">
                    {{$origem->nm_origem}}
                </option>
                @endforeach
            </select>
        </div>
    </div> 
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="type_serve_id" class="form-control-label">Situação do Servidor:
                <span class="text-danger">*</span>
            </label>
            <select name="type_serve_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($type_serve as $tpserve)
                <option value="{{$tpserve->id}}">
                    {{$tpserve->status_servidor}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="marital_status_id" class="form-control-label">Estado Civil:
                <span class="text-danger">*</span>
            </label>
            <select name="marital_status_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($marital_status as $estadoCivil)
                <option value="{{$estadoCivil->id}}">
                    {{$estadoCivil->status_civil}}
                </option>
                @endforeach
            </select>
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