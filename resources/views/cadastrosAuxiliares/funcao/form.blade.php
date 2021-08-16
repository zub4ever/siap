<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="orgao_id" class="form-control-label">Órgão:
                <span class="text-danger">*</span>
            </label>
            <select name="orgao_id" class="form-control" id="titula1">
                <option value="">Selecione uma opção</option>
                @foreach ($orgaoMun as $orgao)
                <option value="{{$orgao->id}}">
                    {{$orgao->nm_orgao}}
                </option>
                @endforeach
            </select>
        </div>
    </div>  
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="nm_funcao" class="form-control-label">Nome da Função:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_funcao" value="{{ @$funcao->nm_funcao }}">
            @if ($errors->has('nm_funcao'))
                <h6 class="heading text-danger">{{$errors->first('nm_funcao')}}</h6>
            @endif
        </div>
    </div> 
</div>
<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar Função
        </button>
    </div>
</div>