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

<div class="row">
<div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
        <label for="data_nascimento" class="form-control-label">Data de Nascimento:
                <span class="text-danger">*</span>
            </label>
<input type="text" class="form-control focus" name="data_nascimento" value="" data-mask="00/00/0000">

</div>
    </div>
</div>
<div class="row">
<!--
<div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="data_nascimento" class="form-control-label">Data de Nascimento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="data_nascimento" value="" data-mask="00/00/0000">
        </div>
    </div>-->





</div>


    <div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar Servidor
        </button>
    </div>
</div>
