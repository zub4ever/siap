<font color="red">Cadastrar somente os familiares que residem no mesmo estabelecimento</font>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
        <div class="wrap">
            <label for="nm_dependente" class="form-control-label">Nome do familiar:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus required" name="nm_dependente" placeholder="Nome"
                   value="{{empty(old('nm_dependente')) ? @$dependente->nm_dependente : old('nm_dependente')}}">
            @if ($errors->has('nm_dependente'))
                <h6 class="heading text-danger">{{$errors->first('nm_dependente')}}</h6>
            @endif
        </div>
    </div>
</div>
<br>
<div class="col-sm-12 mt-5">
    <div class="wrap mt-1 text-center">
        <button type="submit" class="btn btn-success">
            Salvar
        </button>
    </div>
</div>
