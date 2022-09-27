<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
        <div class="wrap">
            <label for="nm_requerente" class="form-control-label">Nome do requerente:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control focus required" name="nm_requerente" placeholder="Nome"
                   value="{{empty(old('nm_requerente')) ? @$acumuloCargos->nm_requerente : old('nm_requerente')}}">
            @if ($errors->has('nm_requerente'))
                <h6 class="heading text-danger">{{$errors->first('nm_requerente')}}</h6>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mb-5">
        <div class="wrap">
            <a class="btn btn-primary btn-md"
                href="{{route('subMetaProjeto.create', ['idProjeto' => $idProjeto, 'idMeta' => $meta->id])}}"
                role="button">Adicionar
                SubMetas</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
        <table class="table text-center" id="tabelaEntidades">
            <thead class="bg-light text-capitalize">
                <tr>
                    <td class="text-center">ID</td>
                    <td class="text-center">DESCRIÇÃO DA SUBMETA</td>
                    <td class="text-center">QUANTIDADE</td>
                    <td class="text-center">UNIDADE</td>
                    <td class="text-center">OBSERVAÇÃO</td>
                    <td class="text-center">STATUS</td>
                    <td class="text-center">AÇÃO</td>
                </tr>
            </thead>
            <tbody>
                @if (!empty($subMetas))
                @foreach ($subMetas as $subMeta)
                <tr>
                    <td class="text-center">{{$subMeta->id}}</td>
                    <td class="text-center">{{$subMeta->descricao}}</td>
                    <td class="text-center">{{$subMeta->quantidade}}</td>
                    <td class="text-center">{{$subMeta->unidadeSubMeta->nome}}</td>
                    <td class="text-center">{{$subMeta->observacao}}</td>
                    <td class="text-center">
                        {{$subMeta->status == 2 ? 'Atendida' : 'Não atendida'}}
                    </td>
                    <td>
                        @if ($subMeta->status == 1)
                        <form
                            action="{{route('subMetaProjeto.aprova',  ['idProjeto' => $idProjeto, 'idMeta' => $meta->id, 'idSubmeta' => $subMeta->id])}}"
                            method="POST" id="formSubMetaAprova{{$subMeta->id}}" style="display:inline-block;">
                            @csrf
                            <span class="aprovaSubmeta" idform="{{$subMeta->id}}">
                                <i class="fa fa-thumbs-o-up btn btn-info" data-toggle="tooltip"
                                    title="Aprova Registro"></i>
                            </span>
                        </form>
                        @endif
                        @if ($subMeta->status == 2)
                        <form
                            action="{{route('subMetaProjeto.reprova',  ['idProjeto' => $idProjeto, 'idMeta' => $meta->id, 'idSubmeta' => $subMeta->id])}}"
                            method="POST" id="formSubMetaReprova{{$subMeta->id}}" style="display:inline-block;">
                            @csrf
                            <span class="reprovaSubmeta" idform="{{$subMeta->id}}">
                                <i class="fa fa-thumbs-down btn btn-danger" data-toggle="tooltip"
                                    title="Reprova Registro"></i>
                            </span>
                        </form>
                        @endif
                        <a href="{{route('subMetaProjeto.edit', ['idProjeto' => $idProjeto, 'idMeta' => $meta->id,
                        'idSubmeta' => $subMeta->id])}}">
                            <i class="ti-pencil btn btn-success" data-toggle="tooltip" title="Editar Registro"></i>
                        </a>
                        <form
                            action="{{route('subMetaProjeto.destroy',  ['idProjeto' => $idProjeto, 'idMeta' => $meta->id, 'idSubmeta' => $subMeta->id])}}"
                            method="POST" id="formSubMeta{{$subMeta->id}}" style="display:inline-block;">
                            @method('DELETE')
                            @csrf
                            <span class="removeSubmeta" idform="{{$subMeta->id}}">
                                <i class="ti-trash btn btn-danger" data-toggle="tooltip" title="Excluir Registro"></i>
                            </span>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<br>

<div class="col-sm-12 mt-5">
    <div class="wrap mt-1 text-center">
        <button type="submit" class="btn btn-success">
            Salvar
        </button>
    </div>
</div>

@section('js')
<!-- Sweet Alert Js -->
<script src="{{asset("js/programa/projeto/meta/show.js")}}"></script>
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
@endsection
