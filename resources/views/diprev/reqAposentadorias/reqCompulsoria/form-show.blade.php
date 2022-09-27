<div id="smartwizard" class="sw sw-justified sw-theme-arrows">

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link inactive done" href="#step-1">
                <strong>Beneficiários</strong>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link inactive active" href="#step-2">
                <strong>Familiares</strong>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link inactive active" href="#step-3">
                <strong>Declaração Acumulo de Cargos</strong>
            </a>
        </li>




    </ul>

    <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1"
             style="position: static; width: 100%; display: block; padding: 2%;">
            <div class="mt-5">
                <hr/>
                <h4>Informações Gerais</h4>
                <hr/>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
                    <div class="wrap">
                        <label for="nm_requerente" class="form-control-label">Nome:
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control focus" name="nm_requerente"
                               value="{{@$compulsoria->nm_requerente}}" disabled>
                    </div>
                </div>
            </div>
        </div>



        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2"
             style="position: static; width: 100vh; display: block; padding: 2%;">

            <div class="col-sm-12 col-md-12 col-lg-12 mb-5 text-center" id="btn-familia">
                <a class="btn btn-success btn-md"
                   href="{{route('dependentes.create',$compulsoria->id )}}"
                   role="button">Cadastrar novo familiar</a>
            </div>

            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nome</th>

                        <th class="text-center">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($dependentes as $denpendente)
                        <tr>
                            <td class="text-center">{{$denpendente->id}}</td>
                            <td class="text-center">{{$denpendente->nm_dependente}}</td>

{{--                            <td class="text-center">--}}
{{--                                <a href="{{route('familiares.edit', $denpendente->id)}}">--}}
{{--                                    <i class="ti-pencil mr-1 btn btn-success" data-toggle="tooltip"--}}
{{--                                       title="Editar Registro"></i>--}}
{{--                                </a>--}}
{{--                                <form action="{{route('familiares.destroy', $denpendente->id)}}" method="POST"--}}
{{--                                      id="formDependente{{$denpendente->id}}" style="display:inline-block;">--}}
{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <span class="deleteDependente" idform="{{$denpendente->id}}">--}}
{{--                                        <i class="ti-trash  btn btn-danger" data-toggle="tooltip"--}}
{{--                                           title="Excluir Registro"></i>--}}
{{--                                    </span>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12  pagination justify-content-end">
                    {{-- {{$produtos->links()}} --}}
                </div>
            </div>

        </div>
        <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5"
             style="position: static; width: 100vh; display: block; padding: 2%;">
            <div class="col-sm-12 col-md-12 col-lg-12 mb-5 text-center">
                <a class="btn btn-primary btn-md" href="{{route('metaProjeto.create', $projeto->id)}}"
                   role="button">Novo</a>
            </div>

            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Descrição da Meta</th>
                        <th class="text-center">Quantidade</th>
                        <th class="text-center">Unidade</th>
                        <th class="text-center">Tempo em Mês</th>
                        <th class="text-center">Realizado</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projeto->meta as $meta)
                        <tr>
                            <td class="text-center">{{$meta->id}}</td>
                            <td class="text-center">{{$meta->descricao}}</td>
                            <td class="text-center">{{$meta->quantidade_prevista}}</td>
                            <td class="text-center">{{$meta->unidade->nome}}</td>
                            <td class="text-center">{{$meta->tempo_execucao}}</td>
                            <td class="text-center">{{$meta->quantidade_realizada}}</td>
                            <td class="text-center">{{$meta->status->nome}}</td>
                            <td class="text-center">
                                <a
                                    href="">
                                    <i class="ti-clipboard btn btn-primary" data-toggle="tooltip"
                                       title="Dados do Registro"></i>
                                </a>
{{--                                <a--}}
{{--                                    href="{{route('metaProjeto.edit', ['idProjeto' => $projeto->id, 'idMeta' => $meta->id])}}">--}}
{{--                                    <i class="ti-pencil btn btn-success" data-toggle="tooltip"--}}
{{--                                       title="Editar Registro"></i>--}}
{{--                                </a>--}}
{{--                                <form--}}
{{--                                    action="{{route('metaProjeto.destroy',  ['idProjeto' => $projeto->id, 'idMeta' => $meta->id])}}"--}}
{{--                                    method="POST" id="formMeta{{$meta->id}}" style="display:inline-block;">--}}
{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <span class="deleteMeta" idform="{{$meta->id}}">--}}
{{--                                        <i class="ti-trash  btn btn-danger" data-toggle="tooltip"--}}
{{--                                           title="Excluir Registro"></i>--}}
{{--                                    </span>--}}
{{--                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>



            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12  pagination justify-content-end">
                    {{-- {{$produtos->links()}} --}}
                </div>
            </div>
        </div>
        <br>


    </div>



