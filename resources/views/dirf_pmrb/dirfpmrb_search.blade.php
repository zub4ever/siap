<html lang="pt-br">
    <script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script>
    <head>
        <title>DIRF - Pesquisa por CPF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="//siap.rbprev.riobranco.ac.gov.br/assets/images/logo-fav.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    </head>
    <body class="vsc-initialized">
        <div class="bg-image" style=" background-image: url('http://rbprev.riobranco.ac.gov.br/images/IconsIndex/background_canais.png'); position:relative;">
            <br><br>
            <div class="container d-flex flex-column align-items-center justify-content-center">
                <img src="/imagem/branca.png" alt="Imagem" width="114,24,2px" height="133,98px">
                <br> 
            </div>
            <div style="text-align: center;">
                <h4 style="color: #ffffff; text-align: center;">COMPROVANTE DE RENDIMENTOS - 2023</h4>

            </div>
            <br>
        </div>
        <br>

    <box style="background-color: #eeeeee; position: fixed;  padding: 30px; left: 20px; right: 20px">
        <div class="container ">
            <hr>
            <h5 class="mb-5" style="margin-top: 0">Pesquisa por Cédula C</h5> 

            <form action="{{ route('dirf_pmrb.result') }}" method="post" id="cpf-form">
                @csrf 
                <div class="form-group">
                    <label for="matricula">Matrícula:</label>
                    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Digite a Matrícula" required="" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required="" maxlength="14">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #003C82 ;">Pesquisar</button>
                </div>
            </form>
            <div class="right-container">
                <button type="submit" class="btn btn-primary" style="background-color: #003C82; float: right;  ">
                    <a style="color: #ffff;" href="http://www.riobranco.ac.gov.br/">
                        Voltar ao site
                    </a>
                </button>
            </div>
        </div>
    </box>







    <footer class=" text-dark py-1" style="bottom: 0%; position: fixed; width: 100%;text-align: center; background-color: #003C82; ">
        <div class="container d-flex flex-column align-items-center">
            <!--<img src="images/azul.png" alt="Imagem" width="50px" height="50px">-->
            <!--<strong class="text-white py-3">Prefeitura Municipal de Rio Branco</strong>-->
            <p class="text-white py-2">Copyright © 2023 Instituto de Previdência do Município de Rio Branco</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
$(document).ready(function () {
    $('#cpf').mask('000.000.000-00');
    $('#cpf-form').submit(function () {

    });

    $('#matricula').mask('00000000');
    $('#matricula-form').submit(function () {
        var matricula = $('#matricula').val();
        $('#matricula').val(matricula.replace(/\D/g, ''));
    });
});
    </script>


</body></html>