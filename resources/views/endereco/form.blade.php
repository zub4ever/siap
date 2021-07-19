<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="serve_id" class="form-control-label">Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control select2" name="serve_id" id="serve_id">
                <option value="">Selecione o Servidor</option>
                @foreach ($servidor as $sv)
                <option value="{{$sv->id}}">{{$sv->nm_servidor}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_rua" class="form-control-label">Rua:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_rua" value="">
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="nr_casa" class="form-control-label">Número:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_casa" value="">
        </div>
    </div>
</div>
<div class="row">
  
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="complemento" class="form-control-label">Complemento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="complemento" value="">
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="city_id" class="form-control-label">Cidade:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control select2" name="city_id" id="serve_id">
                <option value="">Selecione a cidade</option>
                @foreach ($city as $ct)
                <option value="{{$ct->id}}">{{$ct->nm_cidade}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="state_id" class="form-control-label">Estado:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control select2" name="state_id" id="serve_id">
                <option value="">Selecione o estado</option>
                @foreach ($state as $st)
                <option value="{{$st->id}}">{{$st->nm_estado}}</option>
                @endforeach
            </select>
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
