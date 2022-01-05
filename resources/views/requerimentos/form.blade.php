<div id="regForm">
    <h1 id="register">Atendimento ao Assegurado</h1>
    <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> </i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
    <div class="tab">
        <h6>Informe seu nome:</h6>
        <p> <input placeholder="Nome..." oninput="this.className = ''" name="nm_assegurado"></p>
    </div>
    <div class="tab">
        <h6>Qual sua cidade?</h6>
        <p><input placeholder="City" oninput="this.className = ''" name="nm_cidade"></p>
    </div>
    <div class="tab">
        <h6>Tipo de atendimento:</h6>
        <p><input placeholder="Tipo de atendimento desejado" oninput="this.className = ''" name="nm_atendimento"></p>
    </div>
    <div class="tab">
        <h6>Número de Telefone:</h6>
        <p><input placeholder="Informe o número de telefone para entrarmos em contato" oninput="this.className = ''" name="numero_telefone"></p>
    </div>
    <div class="thanks-message text-center" id="text-message"> <img src="/assets/images/rbprev-2-logo.png" width="100" class="mb-4">
        <h3>Obrigado pelas informações!</h3> <span>Clique no botão abaixo para enviar sua solicitação de contato.</span>
        <div class="col-sm-12 mt-5">
            <div class="wrap mt-1" style="text-align: center;">
                <button type="submit" class="btn btn-success">
                    Salvar pedido de atendimento
                </button>
            </div>
        </div>
    </div>
    <div style="overflow:auto;" id="nextprevious">
        <div style="float:right;"> 
            <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
            <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> 
        </div>
    </div>
</div>
