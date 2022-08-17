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
    <div class="row">
        <div class="col-xs-6 col-md-4">
        </div>
        <div class="col-xs-6 col-md-4">
            <h4>
                <br>
                <h2>Consulta de Almoxarifado</h2>
            </h4>
        </div>
        <div class="col-xs-6 col-md-4"></div>
    </div>
    <hr>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">ID de Registro</th>
                    <th class="text-center">Número de patrimônio</th>
                    <th class="text-center">Tipo de patrimônio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($almoxarifado as $busca)
                <tr>
                    <td style="text-align:center;"> {{ $busca->id }}</td>
                    <td style="text-align:center;"> {{ $busca->nm_patrimonio }}</td>
                    @foreach ($almo_tipo as $tipo)
                    @if($busca->almoxarifado_tipo_id == $tipo->id)
                    <td style="text-align:center;">{{$tipo->nm_tipo}}</td>
                    @endif
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <style type="text/css">
        img {
            max-width: 100%;
            max-height: 100%;
        }

        .cat {
            height: 100px;
            width: 100px;

        }
    </style>
</body>
</html>