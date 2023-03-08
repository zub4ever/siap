<div class="row">

    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="rbprev_numeros_mes_id" class="form-control-label">Mês:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="rbprev_numeros_mes_id" id="rbprev_numeros_mes_id">
                <option value="">Selecione o Mês</option>
                @foreach ($rbprev_numeros_mes as $sv)
                <option value="{{$sv->id}}" {{(empty(old('rbprev_numeros_mes_id')) ? @$rbprev_numero->rbprev_numeros_mes_id : old('rbprev_numeros_mes_id')) == $sv->id ? 'selected' : ''}}>
                    {{$sv->nm_mes}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('rbprev_numeros_mes_id'))
            <h6 class="heading text-danger">{{$errors->first('rbprev_numeros_mes_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="rbprev_numeros_ano_id" class="form-control-label">Ano:
                <span class="text-danger">*</span>
            </label>
            <select name="rbprev_numeros_ano_id" class="form-control">

                <option value="">Selecione o ano</option>
                @foreach ($rbprev_numeros_ano as $atividade)
                <option value="{{$atividade->id}}" {{(empty(old('rbprev_numeros_ano_id')) ? @$rbprev_numero->rbprev_numeros_ano_id : old('rbprev_numeros_ano_id')) == $atividade->id ? 'selected' : ''}}>
                    {{$atividade->nm_ano}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('rbprev_numeros_ano_id'))
            <h6 class="heading text-danger">{{$errors->first('rbprev_numeros_ano_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="path_pdf" class="form-control-label">Arquivo:
                <span class="text-danger">*</span>
            </label>
            <br>
            <input type="file" name="path_pdf">
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
