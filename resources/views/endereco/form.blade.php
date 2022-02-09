<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="server_id" class="form-control-label">Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control servidor-select2" name="serve_id" id="serve_id">
                <option value="">Selecione o servidor</option>
                @foreach ($servidor as $sv)              
                <option value="{{$sv->id}}"
                        {{(empty(old('server_id')) ? @$contrato->server_id : old('server_id')) == $sv->id ? 'selected' : ''}}>   
                    {{$sv->matricula}}-{{$sv->nm_servidor}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('server_id'))
            <h6 class="heading text-danger">{{$errors->first('server_id')}}</h6>
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="nm_rua" class="form-control-label">Rua:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nm_rua" value="{{@$address->nm_rua}}">
            @if ($errors->has('nm_rua'))
            <h6 class="heading text-danger">{{$errors->first('nm_rua')}}</h6>
            @endif 
        </div>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
            <label for="nr_casa" class="form-control-label">Número:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_casa" value="{{@$address->nr_casa}}">
            @if ($errors->has('nr_casa'))
            <h6 class="heading text-danger">{{$errors->first('nr_casa')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">

    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="complemento" class="form-control-label">Complemento:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus" name="complemento" value="{{@$address->complemento}}">
            @if ($errors->has('complemento'))
            <h6 class="heading text-danger">{{$errors->first('complemento')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="city_id" class="form-control-label">Cidade:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control cidadeSelect2" name="city_id" id="serve_id">
                <option value="">Selecione a cidade</option>
                @foreach ($city as $ct)
                <option value="{{$ct->id}}"
                    {{(empty(old('city_id')) ? @$address->city_id : old('city_id')) == $ct->id ? 'selected' : ''}}>  
                    {{$ct->nm_cidade}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('city_id'))
            <h6 class="heading text-danger">{{$errors->first('city_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="state_id" class="form-control-label">Estado:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control estadoSelect2" name="state_id" id="serve_id">
                <option value="">Selecione o estado</option>
                @foreach ($state as $st)
                <option value="{{$st->id}}"
                    {{(empty(old('state_id')) ? @$address->state_id : old('state_id')) == $st->id ? 'selected' : ''}}>
                    {{$st->nm_estado}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('state_id'))
            <h6 class="heading text-danger">{{$errors->first('state_id')}}</h6>
            @endif
        </div>
    </div>





</div>
<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar Endereço
        </button>
    </div>
</div>
