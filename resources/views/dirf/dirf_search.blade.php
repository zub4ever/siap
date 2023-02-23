<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>DIRF - Pesquisa por CPF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('assets/images/logo-fav.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <style>
.col-md-12{
  display: inline-block;
  margin-left:-4px;
}
.col-md-12 img{
  width:100%;
  height:auto;
}
body .carousel-indicators li{
  background-color:rgb(0, 238, 255);
}
body .carousel-control-prev-icon,
body .carousel-control-next-icon{
  background-color:rgb(0, 238, 255);
}
body .no-padding{
  padding-left: 0;
  padding-right: 0;
}
            }

        </style>
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
<center>
    <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="container carousel-inner no-padding">
        <div class="carousel-item active">
          <div style="text-align:center" class="col-xs-12 col-sm-12 col-md-12">
            <img src="/imagem/SISA-banner.png">
          </div>
        </div>
        <div class="carousel-item">
          <div style="text-align:center"class="col-xs-12 col-sm-12 col-md-12">
            <img src="/imagem/SISA-banner2.png">
          </div>
        </div>
        <div class="carousel-item">
            <div style="text-align:center" class="col-xs-12 col-sm-12 col-md-12">
                <img src="/imagem/SISA-banner3.png">
            </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
</center>
        <div class="container mt-5">
            <hr>
            <h5 class="mb-5">Pesquisa por Cédula C</h5>

            <form action="{{ route('dirf.result') }}" method="post" id="cpf-form">
                @csrf
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #003C82 ;">Pesquisar</button>
                </div>
            </form>
        </div>
        <br><br><br>
        <br><br><br>





        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.112/jquery.mask.min.js"></script>
        <script>
$(document).ready(function () {
    $('#cpf').mask('000.000.000-00');
    $('#cpf-form').submit(function () {
        var cpf = $('#cpf').val().replace(/\./g, ''); // Remove pontos do valor do campo
        $('#cpf').val(cpf); // Atualiza o valor do campo com o valor sem pontos
    });
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
