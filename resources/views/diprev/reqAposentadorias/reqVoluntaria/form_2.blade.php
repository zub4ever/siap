<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
        <div class="wrap">
            <label for="matricula" class="form-control-label">Matrícula:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="matricula" value="{{ @$reqApVoluntaria->matricula}}">
            @if ($errors->has('matricula'))
            <h6 class="heading text-danger">{{$errors->first('matricula')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-9 col-lg-9 mt-4">
        <div class="wrap">
            <label for="nm_requente" class="form-control-label">Nome do servidor:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_requente" value="{{ @$reqApVoluntaria->nm_requente}}">
            @if ($errors->has('nm_requente'))
            <h6 class="heading text-danger">{{$errors->first('nm_requente')}}</h6>
            @endif
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