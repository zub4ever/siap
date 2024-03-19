<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>DIRF - Bem Vindo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
</head>

<body>
    <div class="bg-image"
        style=" background-image: url('http://rbprev.riobranco.ac.gov.br/images/IconsIndex/background_canais.png'); position:relative;">
        <br><br>
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <img src="/imagem/logo2.png" alt="Imagem" width="120px" height="120px">
            <br>
        </div>
        <div style="text-align: center;">
            <h3 style="color: #ffffff; text-align: center;">COMPROVANTE DE RENDIMENTOS</h3>

        </div>
        <br>
    </div>
    <div class="container mt-5">
        <h4 class="mb-3">Bem vindo! {{ $nomeDirf }}</h4>
        @foreach ($cedulasFiltradas as $cedula)
            <p>A busca correspondente as credenciais informadas:</p>
            <div class="col-3">
                <div class="card">
                    <div class="card-body" style="text-align: center;">
                        <a href="{{ route('publico.pdf', ['cpf' => $cedula->cpf, 'anoExercicio' => $cedula->anoExercicio]) }}"
                            target="_blank" class="btn btn-primary">Baixar Cédula {{ $cedula->anoExercicio }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
<br><br><br>
<br><br><br>
<br><br>
<style>
    <footer class="bg-gray-100 text-dark py-3"><div class="container d-flex flex-column align-items-center"><img src="/imagem/azul.png" alt="Imagem" width="100px" height="120px"><br><strong>Prefeitura Municipal de Rio Branco</strong></div></footer></html>
