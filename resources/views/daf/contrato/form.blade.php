<div class="row d-flex justify-content-center">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="nr_contrato" class="form-control-label">Número do contrato:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_contrato" value="{{ @$contrato->nr_contrato}}">
            @if ($errors->has('nr_contrato'))
            <h6 class="heading text-danger">{{$errors->first('nr_contrato')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="ano_contrato" class="form-control-label">Ano do contrato:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="ano_contrato" value="{{ @$contrato->ano_contrato}}">
            @if ($errors->has('ano_contrato'))
            <h6 class="heading text-danger">{{$errors->first('ano_contrato')}}</h6>
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