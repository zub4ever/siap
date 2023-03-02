<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>DIRF - Resultado da pesquisa por CPF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('assets/images/logo-fav.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-image" style=" background-image: url('http://rbprev.riobranco.ac.gov.br/images/IconsIndex/background_canais.png'); position:relative;">
            <br><br>
            <div class="container d-flex flex-column align-items-center justify-content-center">
                <img src="/imagem/logo2.png" alt="Imagem" width="120px" height="120px">
                <br> 
            </div>
            <div style="text-align: center;">
                <h3 style="color: #ffffff; text-align: center;">COMPROVANTE DE RENDIMENTOS - 2023</h3>

            </div>
            <br>
        </div>
        <div class="container mt-5">
            <h4 class="mb-3">Resultado da pesquisa por CPF</h4>
            @if ($pdfPath)
            <p>A busca correspondente ao CPF {{ $cpf }} foi encontrado:</p>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $pdfPath }}</h5>
                    <a href="{{ route('dirf.store_c', $cpf) }}" target="_blank" class="btn btn-primary">Download do PDF</a>
                </div>
            </div>
            @else
            <p>Nenhum PDF foi encontrado para o CPF {{ $cpf }}.</p>
            @endif
        </div>


    </body>
    <br><br><br>
    <br><br><br>
    <br><br>


    <footer class="bg-gray-100 text-dark py-3">
        <div class="container d-flex flex-column align-items-center">
            <img src="/imagem/azul.png" alt="Imagem" width="100px" height="120px">

            <br>
            <strong>Prefeitura Municipal de Rio Branco</strong>

        </div>
    </footer>
</html>
