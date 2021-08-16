<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="nm_orgao" class="form-control-label">Nome da orgão:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_orgao" value="{{ @$orgao->nm_orgao }}">
            @if ($errors->has('nm_orgao'))
                <h6 class="heading text-danger">{{$errors->first('nm_orgao')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar Origem
        </button>
    </div>
</div>