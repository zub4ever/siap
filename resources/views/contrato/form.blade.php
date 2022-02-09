<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-5">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Origem Servidor:
                <span class="text-danger">*</span>
            </label>
            <select name="origin_id" class="form-control" data-plugin="select2">

                <option value="">Selecione uma opção</option>
                @foreach ($origin as $atividade)
                <option value="{{$atividade->id}}"
                        {{(empty(old('origin_id')) ? @$contrato->origin_id : old('origin_id')) == $atividade->id ? 'selected' : ''}}>    
                    {{$atividade->nm_origem}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('origin_id'))
            <h6 class="heading text-danger">{{$errors->first('origin_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-5">
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
    <div class="col-sm-12 col-md-2 col-lg-2 mt-5">
        <div class="wrap">
            <label for="nr_contrato" class="form-control-label">Nº Contrato:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_contrato" value="{{@$contrato->nr_contrato}}">
            @if ($errors->has('nr_contrato'))
            <h6 class="heading text-danger">{{$errors->first('nr_contrato')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-1 col-lg-1 mt-5">

    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-5">
        <div class="wrap">
            <label for="orgao_id" class="form-control-label">Orgão Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control select2" name="orgao_id" id="orgao_id">
                <option value="">Selecione uma opção</option>
                @foreach ($orgao as $og)
                <option value="{{$og->id}}"
                        {{(empty(old('orgao_id')) ? @$contrato->orgao_id : old('orgao_id')) == $og->id ? 'selected' : ''}}>
                    {{$og->nm_orgao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('orgao_id'))
            <h6 class="heading text-danger">{{$errors->first('orgao_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-5">
        <div class="wrap">
            <label for="funcao_id" class="form-control-label">Função:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control func-select2" name="funcao_id" id="funcao_id">
                <option value="">Selecione uma opção</option>
                @foreach ($funcao as $ofc)
                <option value="{{$ofc->id}}"
                        {{(empty(old('funcao_id')) ? @$contrato->funcao_id : old('funcao_id')) == $ofc->id ? 'selected' : ''}}>
                    {{$ofc->nm_funcao}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('funcao_id'))
            <h6 class="heading text-danger">{{$errors->first('funcao_id')}}</h6>
            @endif
        </div>
    </div>
</div>
<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar Contrato
        </button>
    </div>
</div>


@section('js')
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection