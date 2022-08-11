<div class="row d-flex justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="nm_responsavel" class="form-control-label">Nome do Responsável:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_responsavel" value="{{ @$responsavel->nm_responsavel}}">
            @if ($errors->has('nm_responsavel'))
            <h6 class="heading text-danger">{{$errors->first('nm_responsavel')}}</h6>
            @endif
        </div>
    </div>
</div>


<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar responsavel
        </button>
    </div>
</div>