{{--<font color="red">Cadastrar somente os familiares que residem no mesmo estabelecimento</font>--}}
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
        <div class="wrap">
            <label for="nm_requerente" class="form-control-label">Nome do requerente:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus required" name="nm_requerente" placeholder="Nome"
                   value="{{empty(old('nm_requerente')) ? @$acumuloCargos->nm_requerente : old('nm_requerente')}}">
            @if ($errors->has('nm_requerente'))
                <h6 class="heading text-danger">{{$errors->first('nm_requerente')}}</h6>
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
