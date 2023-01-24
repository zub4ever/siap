<div class="row">

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="serve_id" class="form-control-label">Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control servidor-select2" name="serve_id" id="serve_id">
                <option value="">Selecione o servidor</option>
                @foreach ($servidor as $sv)
                <option value="{{$sv->id}}" {{(empty(old('serve_id')) ? @$contrato->serve_id : old('serve_id')) == $sv->id ? 'selected' : ''}}>
                    {{$sv->matricula}} - {{$sv->nm_servidor}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('serve_id'))
            <h6 class="heading text-danger">{{$errors->first('serve_id')}}</h6>
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