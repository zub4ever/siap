<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>DIRF - Pesquisa por CPF</title>
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

        <hr>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary ml-auto" style="background-color: #003C82;">
                <a style="color: #ffff;" href="http://www.rbprev.riobranco.ac.gov.br/">
                    Voltar ao site
                </a>
            </button>
        </div>
        <div class="container mt-5">
            <hr>
            <h5 class="mb-5">Pesquisa por Cédula C</h5> 

            <form action="{{ route('dirf.result') }}" method="post" id="cpf-form">
                @csrf
                <div class="col-4">
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Primeiro Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o primeiro nome" required>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #003C82 ;">Pesquisar</button>
                </div>
                </div>
                
            </form>
            
        </div>
        <br><br><br>
        <br><br><br>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
                $(document).ready(function () {
                    $('#cpf').mask('000.000.000-00');
                    
                });
                $('#nome').on('input', function() {
                    var input = $(this);
                    var nomeCompleto = input.val();
                    var primeiroNome = nomeCompleto.split(' ')[0]; 
                    primeiroNome = primeiroNome.toUpperCase(); 

                    
                    if(nomeCompleto.indexOf(' ') >= 0) {
                        input.val(primeiroNome);
                    } else {
                        input.val(primeiroNome);
                    }
                });
        </script>

        <br>
        <footer class="bg-gray-100 text-dark py-3">
            <div class="container d-flex flex-column align-items-center">
                <img src="/imagem/azul.png" alt="Imagem" width="100px" height="120px">

                <br>
                <strong>Prefeitura Municipal de Rio Branco</strong>

            </div>
        </footer>
    </body>
</html>