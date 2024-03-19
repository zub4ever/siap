<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>DIRF</title>
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
                <h3 style="color: #ffffff; text-align: center;">COMPROVANTE DE RENDIMENTOS</h3>

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



<div class="login">
    <div class="login-triangle"></div>
    <h2 class="login-header">Bem vindo!</h2>
    <form class="login-container" action="{{ route('dirf.result') }}" method="post" id="cpf-form">
      @csrf
      <p><input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required></p>
      <p><input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o primeiro nome" required></p>
      <p><input type="submit" value="Entrar"></p>
    </form>
  </div>

  <style>

  /**
   * 01/28/2016
   * This pen is years old, and watching at the code after all
   * those years made me fall from my chair, so I:
   * - changed all IDs to classes
   * - converted all units to pixels and em units
   * - changed all global elements to classes or children of
   *   .login
   * - cleaned the syntax to be more consistent
   * - added a lot of spaces that I so hard tried to avoid
   *   a few years ago
   *   (because it's cool to not use them)
   * - and probably something else that I can't remember anymore
   *
   * I sticked to the same philosophy, meaning:
   * - the design is almost the same
   * - only pure HTML and CSS
   * - no frameworks, preprocessors or resets
   */

  /* 'Open Sans' font from Google Fonts */
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

  body {
    background: #456;
    font-family: 'Open Sans', sans-serif;
  }

  .login {
    width: 400px;
    margin: 16px auto;
    font-size: 16px;
  }

  /* Reset top and bottom margins from certain elements */
  .login-header,
  .login p {
    margin-top: 0;
    margin-bottom: 0;
  }

  /* The triangle form is achieved by a CSS hack */
  .login-triangle {
    width: 0;
    margin-right: auto;
    margin-left: auto;
    border: 12px solid transparent;
    border-bottom-color: #28d;
  }

  .login-header {
    background: #28d;
    padding: 20px;
    font-size: 1.4em;
    font-weight: normal;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
  }

  .login-container {
    background: #ebebeb;
    padding: 12px;
  }

  /* Every row inside .login-container is defined with p tags */
  .login p {
    padding: 12px;
  }

  .login input {
    box-sizing: border-box;
    display: block;
    width: 100%;
    border-width: 1px;
    border-style: solid;
    padding: 16px;
    outline: 0;
    font-family: inherit;
    font-size: 0.95em;
  }

  .login input[type="email"],
  .login input[type="password"] {
    background: #fff;
    border-color: #bbb;
    color: #555;
  }

  /* Text fields' focus effect */
  .login input[type="email"]:focus,
  .login input[type="password"]:focus {
    border-color: #888;
  }

  .login input[type="submit"] {
    background: #28d;
    border-color: transparent;
    color: #fff;
    cursor: pointer;
  }

  .login input[type="submit"]:hover {
    background: #17c;
  }

  /* Buttons' focus effect */
  .login input[type="submit"]:focus {
    border-color: #05a;
  }

  </style>
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
