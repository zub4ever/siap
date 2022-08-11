
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
        <div class="wrap">
            <label for="nm_departamento" class="form-control-label">Nome do departamento:
                <span class="text-danger">*</span>
            </label>
            <input type="textarea" class="form-control" name="nm_departamento"  value="{{ @$departamento->nm_departamento}}">
            @if ($errors->has('nm_departamento'))
            <h6 class="heading text-danger">{{$errors->first('nm_departamento')}}</h6>
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