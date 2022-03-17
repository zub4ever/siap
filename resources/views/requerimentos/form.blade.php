
<!-- progressbar -->
<ul id="progressbar">
    <li class="active">Identificação</li>
    <li>Atendimento</li>
    <li>Contato</li>
</ul>
<!-- fieldsets -->
<fieldset>
    <h2 class="fs-title">Identificação assegurado</h2>
    <h3 class="fs-subtitle">Etapa 1</h3>
    <input type="text" class="form-control" name="nm_assegurado" placeholder="Nome assegurado" />
    <input type="text" class="form-control" name="cpf" data-mask="999.999.999-99"  maxlength="14" placeholder="CPF"/>
    <input type="text" name="email" placeholder="Email" />

    <input type="button" name="next" class="next action-button" value="Próximo" />
</fieldset>
<fieldset>
    <h2 class="fs-title">Atendimento deesejado</h2>
    <h3 class="fs-subtitle">Informe o atendimento desejado</h3>
    
    <textarea name="nm_atendimento" placeholder="Atendimento desejado"></textarea>


    <input type="button" name="previous" class="previous action-button" value="Voltar" />
    <input type="button" name="next" class="next action-button" value="Próximo" />
</fieldset>
<fieldset>
    <h2 class="fs-title">Contato</h2>
    <h3 class="fs-subtitle">Informações para contato</h3>
    <input type="text" class="form-control" name="nm_cidade" placeholder="Cidade de onde solicita atendimento" />
    <input type="text" class="form-control" name="numero_telefone" data-mask="(00)00000-0000" maxlength="15" placeholder="(00)99999-9999" />

    
    <input type="button" name="previous" class="previous action-button" value="Voltar" />
    <input type="submit" name="submit" class="submit action-button" value="Enviar" />
</fieldset>
