<div id="smartwizard" class="sw sw-justified sw-theme-arrows">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link inactive active" href="#step-1">
                <strong>Requerimento Compulsório</strong>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link inactive none" href="#step-2">
                <strong>Dependentes</strong>
            </a>
        </li>


    </ul>

    <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1"
             style="position: static; width: 100vh; display: block; padding: 2%;">
            <div class="mt-3">
                <hr/>
                <h4>Dados do programa</h4>
                <hr/>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
                    <div class="wrap">
                        <label for="nm_requerente" class="form-control-label">Nome do Requerente:
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control focus required" name="nm_requerente" placeholder="Nome"
                               value="{{empty(old('nome')) ? @$compulsoria->nm_requerente : old('nm_requerente')}}">
                        @if ($errors->has('nm_requerente'))
                            <h6 class="heading text-danger">{{$errors->first('nm_requerente')}}</h6>
                        @endif
                    </div>
                </div>


            </div>


        </div>

        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2"
             style="position: static; width: 100vh; display: block; padding: 2%;">


        </div>

        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3"
             style="position: static; width: 100vh; display: block; padding: 2%;">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
                    <div class="wrap">
                        <label for="nm_requerente" class="form-control-label">Nome do Requerente:
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control focus required" name="nm_requerente" placeholder="Nome"
                               value="{{empty(old('nome')) ? @$compulsoria->nm_requerente : old('nm_requerente')}}">
                        @if ($errors->has('nm_requerente'))
                            <h6 class="heading text-danger">{{$errors->first('nm_requerente')}}</h6>
                        @endif
                    </div>
                </div>


            </div>

        </div>

        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4"
             style="position: static; width: 100vh; display: block; padding: 2%;">


        </div>

        <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5"
             style="position: static; width: 100vh; display: block; padding: 2%;">


        </div>
    </div>

    <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: center;">
        <button class="btn sw-btn-prev disabled" type="button">Anterior</button>

        <button class="btn sw-btn-next" type="button">Próximo</button>
    </div>
</div>
