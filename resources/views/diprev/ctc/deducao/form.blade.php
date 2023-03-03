<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between w-100">
            <h4>CTC Certidão Dedução do Ano # {{ $registros->ano }}</h4>
            <h4>Tempo bruto a deduzir # {{ $registros->tempo_bruto }}</h4>
        </div>
    </div>
</div>
<hr>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label for="faltas">Faltas</label>
      <input type="text" name="faltas" id="faltas" class="form-control" placeholder="Informe as faltas" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="licencas">Licenças</label>
      <input type="text" name="licencas" id="licencas" class="form-control" placeholder="Informe as licenças" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="licencas_sem_vencimento">Licenças sem vencimento</label>
      <input type="text" name="licencas_sem_vencimento" id="licencas_sem_vencimento" class="form-control" placeholder="Informe as licenças sem vencimento" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="suspensoes">Suspensões</label>
      <input type="text" name="suspensoes" id="suspensoes" class="form-control" placeholder="Informe as suspensões" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="disponibilidade">Disponibilidade</label>
      <input type="text" name="disponibilidade" id="disponibilidade" class="form-control" placeholder="Informe a disponibilidade" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="outras">Outras</label>
      <input type="text" name="outras" id="outras" class="form-control" placeholder="Informe outras informações" required>
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