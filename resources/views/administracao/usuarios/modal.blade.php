
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-detalhes-{{$fcn->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detalhes do atendimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-2 mt-2">
                        <p><strong>Protocolo: <a><font color ="red">{{$fcn->id}}</font></a></p></strong> 
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5 mt-2">
                        <p><strong>Nome: <a><font color ="red">{{$fcn->nm_assegurado}}</font></a></p></strong> 
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5 mt-2">
                        <p><strong>Número para contato: <a><font color ="red">{{$fcn->numero_telefone}}</font></a></p></strong> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
                        <p><strong>Data da solicitação: <a><font color ="red">{{ date( 'd/m/Y' , strtotime($fcn->created_at))}}</font></a></p></strong> 
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
                        <p><strong>Cidade: <a> <font color ="red">{{$fcn->nm_cidade}}</font></a></p></strong> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                        <p><strong>Solicitação de atendimento: <a><font color ="red">{{$fcn->nm_atendimento}}</font></a></p></strong> 
                    </div> 
                </div> 






            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>               
            </div>
        </div>
    </div>
</div>