<form action="{{route('consulta.publica')}}" method="post">
    {{ csrf_field() }}
    <input type="text" class="form-control" name="nm_patrimonio" placeholder="Digite o número de Protocolo..."> <br>

    <button type="submit" class="btn btn-primary ">Pesquisar</button>
</form>
</div>
<div class="col-xs-6 col-md-4"></div>
</div>


