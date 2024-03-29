<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consulta almoxarifado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <img src="/imagem/logo2.png" height="100" width="100">
    </div>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-8">
                <form action="{{route('consulta.publica')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="nm_patrimonio" placeholder="Digite o número de patrimônio..."> <br>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>