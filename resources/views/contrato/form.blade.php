<div class="row">
    <div class="col-sm-12 col-md-5 col-lg-5 mt-5">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Origem Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control contrato-select2" name="origin_id" id="origin_id">
                <option value="">Selecione uma opção</option>
                @foreach ($origin as $atividade)
                <option value="{{$atividade->id}}">{{$atividade->nm_origem}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-5">
        <div class="wrap">
            <label for="serve_id" class="form-control-label">Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control serve-select2" name="serve_id" id="serve_id">
                <option value="">Selecione uma opção</option>
                @foreach ($servidor as $sv)
                <option value="{{$sv->id}}">{{$sv->matricula}}- {{$sv->nm_servidor}}</option>
                @endforeach
            </select>
        </div>
    </div>
        <div class="col-sm-12 col-md-2 col-lg-2 mt-5">
        <div class="wrap">
            <label for="nr_contrato" class="form-control-label">Nº Contrato:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nr_contrato" value="">
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
            <select class="form-control og-select2" name="orgao_id" id="orgao_id">
                <option value="">Selecione uma opção</option>
                @foreach ($orgao as $og)
                <option value="{{$og->id}}">{{$og->nm_orgao}}</option>
                @endforeach
            </select>
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
                <option value="{{$ofc->id}}">{{$ofc->nm_funcao}}</option>
                @endforeach
            </select>
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