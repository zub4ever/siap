<div class="row">
  <div class="col-xs-6 col-md-4"></div>
  <div class="col-xs-6 col-md-4">
    <h4>
      <font color="32CD32"><strong>Resultados para o protocolo:</strong></font> {{$nm_patrimonio}}
    </h4>
  </div>
  <div class="col-xs-6 col-md-4"></div>
</div>
<hr>







<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th style="text-align:center;" scope="col">ID</th>
      <th style="text-align:center;" scope="col">Número de Patrimônio</th>
     
    </tr>
    @forelse($almoxarifado as $busca)
    <tr>
      <td style="text-align:center;"> {{ $busca->id }}</td>
      <td style="text-align:center;"> {{ $busca->nm_patrimonio }}</td>








    </tr>
    @empty
    <tr>
      <td colspan="90">
        <p align="center">Nenhum resultado encontrado!</p>
      </td>
    </tr>
    @endforelse
</table>