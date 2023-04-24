<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Consulta almoxarifado</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <!-- Dependências necessárias para a modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </head>
    <body class="vsc-initialized">
        <div class="bg-image" style=" background-image: url('http://rbprev.riobranco.ac.gov.br/images/IconsIndex/background_canais.png'); position:relative;">
            <br><br>
            <div class="container d-flex flex-column align-items-center justify-content-center">
                <img src="/imagem/logo2.png" alt="Imagem" width="114,24,2px" height="133,98px">
                <br>
            </div>
            <div style="text-align: center;">
                <h4 style="color: #ffffff; text-align: center;">Consulta de Patrimônio</h4>

            </div>
            <br>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Patrimônio</th>
                        <th class="text-center">Tipo de Almoxarifado</th>
                        <th class="text-center">Localização</th>
                        <th class="text-center">Registro fotográfico</th>
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
                        @foreach ($almo_localizacao_dpto as $loca)
                        @if($busca->almoxarifado_localizacao_dpto_id == $loca->id)
                        <td style="text-align:center;">{{$loca->nm_departamento}}</td>
                        @endif
                        @endforeach
                        <td style="text-align:center;">
                            <!-- Alterar 'localhost/storage' para o caminho em produção  -->
                            <img src="{{ route('almoxarifado.imagemAlmo', ['id' => $busca->id]) }}" alt="Imagem do Item" style="max-width: 400px; max-height: 400px; display: block; margin: 0 auto; border: 2px solid blue;">

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <footer class="text-dark py-1" style="bottom: 0%; position: absolute; width: 100%; background-color: #003C82;">
        <div class="container d-flex justify-content-center align-items-center">
            <img src="/imagem/branca.png" alt="Imagem" width="60px" height="60px" style="margin-right: 10px;">

        </div>
        <div class="container justify-content-center align-items-center">
            <p class="text-white mb-0">Instituto de Previdência do Município de Rio Branco</p>
        </div>
    </footer>

</body>
</html>
