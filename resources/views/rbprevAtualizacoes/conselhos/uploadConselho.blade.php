
<div class="row justify-content-center align-center">
    <strong><font color="Red">Arquivos de até 2Mb</font></strong>
</div>
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="conselho_tipo_id" class="form-control-label">Conselho:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="conselho_tipo_id" id="conselho_tipo_id">
                <option value="">Selecione o conselho</option>
                @foreach($tiposConselho as $tipoConselho)
                <option value="{{$tipoConselho->id}}" {{(empty(old('serve_id')) ? @$address->conselho_tipo_id : old('conselho_tipo_id')) == $tipoConselho->id ? 'selected' : ''}}>
                    {{ $tipoConselho->id }} - {{ $tipoConselho->nm_tipo_conselho }}
                </option>
                @endforeach
            </select>
            @if ($errors->has('conselho_tipo_id'))
            <h6 class="heading text-danger">{{$errors->first('conselho_tipo_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="conselho_ano_id" class="form-control-label">Ano:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="conselho_ano_id" id="conselho_ano_id">
                <option value="">Selecione o ano</option>
                @foreach($anosConselho as $anoConselho)
                <option value="{{$anoConselho->id}}" {{(empty(old('conselho_ano_id')) ? @$address->conselho_ano_id : old('conselho_ano_id')) == $tipoConselho->id ? 'selected' : ''}}>
                    {{ $anoConselho->id }} - {{ $anoConselho->nm_ano }}
                </option>
                @endforeach
            </select>
            @if ($errors->has('conselho_ano_id'))
            <h6 class="heading text-danger">{{$errors->first('conselho_ano_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="conselho_categoria_id" class="form-control-label">Categoria:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="conselho_categoria_id" id="conselho_categoria_id">
                <option value="">Selecione a categoria</option>
                @foreach($categoriasConselho as $categoriaConselho)
                <option value="{{$categoriaConselho->id}}" {{(empty(old('conselho_categoria_id')) ? @$address->conselho_categoria_id : old('conselho_categoria_id')) == $tipoConselho->id ? 'selected' : ''}}>
                    {{ $categoriaConselho->id }} - {{ $categoriaConselho->nm_categoria }}
                </option>
                @endforeach
            </select>
            @if ($errors->has('conselho_categoria_id'))
            <h6 class="heading text-danger">{{$errors->first('conselho_categoria_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">

    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="descricao" class="form-control-label">Descrição:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="descricao" value="{{@$address->descricao}}">
            @if ($errors->has('descricao'))
            <h6 class="heading text-danger">{{$errors->first('descricao')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="pdf_path">Arquivo:</label><br>
            <input type="file" name="pdf_path" id="pdf_path">
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






