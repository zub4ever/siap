<div class="row">

    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="serve_id" class="form-control-label">Servidor:
                <span class="text-danger">*</span>
            </label>
            <select class="form-control select2" name="serve_id" id="serve_id">
                <option value="">Selecione o servidor</option>
                @foreach ($servidor as $sv)
                <option value="{{$sv->id}}" {{(empty(old('serve_id')) ? @$ctc->serve_id : old('serve_id')) == $sv->id ? 'selected' : ''}}>
                    {{$sv->matricula}} - {{$sv->nm_servidor}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('serve_id'))
            <h6 class="heading text-danger">{{$errors->first('serve_id')}}</h6>
            @endif
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
        <div class="wrap">
            <label for="origin_id" class="form-control-label">Origem Servidor:
                <span class="text-danger">*</span>
            </label>
            <select name="origin_id" class="form-control" data-plugin="select2">

                <option value="">Selecione uma opção</option>
                @foreach ($origin as $atividade)
                <option value="{{$atividade->id}}" {{(empty(old('origin_id')) ? @$ctc->origin_id : old('origin_id')) == $atividade->id ? 'selected' : ''}}>
                    {{$atividade->nm_origem}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('origin_id'))
            <h6 class="heading text-danger">{{$errors->first('origin_id')}}</h6>
            @endif
        </div>
    </div>
        <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
        <div class="wrap">
                          <div class="container"><p>Para:</p>
                    <div class="row justify-content-center align-items-center">
                        
                       
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="identificacao_servidor"  value="1" checked>
                                    <label class="form-check-label" for="option1">Aposentadoria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="identificacao_servidor"  value="2">
                                    <label class="form-check-label" for="option2"> Ex servidor</label>
                                </div>
                            </div>

                      
                    </div>
                </div>
            
            
        </div>
    </div>
    
    
    
    
</div>
<br>
<div class="center">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="orgao_id" class="form-control-label">Orgão:
                    <span class="text-danger">*</span>
                </label>
                <select class="form-control orgaoCTC-select2" name="orgao_id" id="orgao_id">
                    <option value="">Selecione o orgão</option>
                    @foreach ($orgao as $orgao)
                    <option value="{{$orgao->id}}" {{(empty(old('orgao_id')) ? @$ctc->orgao_id : old('orgao_id')) == $orgao->id ? 'selected' : ''}}>
                        {{$orgao->id}} - {{$orgao->nm_orgao}}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('orgao_id'))
                <h6 class="heading text-danger">{{$errors->first('orgao_id')}}</h6>
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="funcao_id" class="form-control-label">Função:
                    <span class="text-danger">*</span>
                </label>
                <select class="form-control funcaoCTC-select2" name="funcao_id" id="funcao_id">
                    <option value="">Selecione o Função</option>
                    @foreach ($funcao as $funcao)
                    <option value="{{$funcao->id}}" {{(empty(old('funcao_id')) ? @$ctc->funcao_id : old('funcao_id')) == $funcao->id ? 'selected' : ''}}>
                        {{$funcao->id}} - {{$funcao->nm_funcao}}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('funcao_id'))
                <h6 class="heading text-danger">{{$errors->first('funcao_id')}}</h6>
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <div class="center">                             
                    <label for="tipo_certidao_id" class="form-control-label">Situação:
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control situacaoCTC-select2" name="tipo_certidao_id" id="tipo_certidao_id">
                        <option value="">Selecione</option>
                        @foreach ($tipo_certidao as $tipo_certidao)
                        <option value="{{$tipo_certidao->id}}" {{(empty(old('tipo_certidao_id')) ? @$ctc->tipo_certidao_id : old('tipo_certidao_id')) == $tipo_certidao->id ? 'selected' : ''}}>
                            {{$tipo_certidao->id}} - {{$tipo_certidao->nm_tipocertidao}}
                        </option>
                        @endforeach
                    </select>
                    @if ($errors->has('tipo_certidao_id'))
                    <h6 class="heading text-danger">{{$errors->first('tipo_certidao_id')}}</h6>
                    @endif
                    <br>
                </div>

            </div>
        </div>
    </div>
    <br>
</div>
<br>
<div class="center">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="nr_processo" class="form-control-label">Nº Processo:
                    <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" name="nr_processo" value="{{@$ctc->nr_processo}}">
                @if ($errors->has('nr_processo'))
                <h6 class="heading text-danger">{{$errors->first('nr_processo')}}</h6>
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="data_pedido" class="form-control-label">Data do pedido:
                    <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" name='data_pedido' placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off"
                       value="">
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="data_admissao" class="form-control-label">Data da Admissão:
                    <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" name='data_admissao' placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off"
                       value="">
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="data_exoneracao" class="form-control-label">Data da exoneração:
                    <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" name='data_exoneracao' placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off"
                       value="">
            </div>
        </div>


        <br>
    </div>
    <br>
</div>
<br>

<div class="row">
    <div class="col-6 container-left">
        <p align="center">Período de Compreendido nesta Certidão</p>
        <!-- Conteúdo para o container esquerdo -->
        <div class="center">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
                    <div class="wrap">
                        <label for="start_date" class="form-control-label">Data de Inicio:
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name='start_date' placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off"
                               value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
                    <div class="wrap">
                        <label for="end_date" class="form-control-label">Data final:
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name='end_date' placeholder="00/00/0000" data-mask="00/00/0000" autocomplete="off"
                               value="">
                    </div>
                </div> 




            </div>
            <br>
            <div class="center">
                <div class="container"><p align="center">Aproveitamento:</p>
                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-6">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="local_destino"  value="RBPREV" checked>
                                    <label class="form-check-label" for="option1">RBPREV</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="local_destino"  value="Outros Regimes">
                                    <label class="form-check-label" for="option2"> Outros regimes</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <br>
            
        </div> 
    </div>

    <div class="col-6 container-right">
        <p align="center">Outras informações:</p>
        <div class ="center">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                <div class="wrap">
                    <label for="font_info" class="form-control-label">Fonte de informação:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name='font_info' placeholder=""  autocomplete="off"
                           value="{{@$ctc->font_info}}">
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                <div class="wrap">
                    <label for="destinacao" class="form-control-label">Destinação:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name='destinacao' placeholder=""  autocomplete="off"
                           value="{{@$ctc->destinacao}}">
                </div>
            </div>
            <br>
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



<style>
    .center {

        border: 1px solid blue;

    }
    .container-left {
        float: left;
    }

    .container-right {
        float: right;
    }

</style>