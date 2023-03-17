<!DOCTYPE html>
<html lang="pt-br">
    <script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script>
    <head>
        <title>DIRF - Pesquisa por CPF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="//siap.rbprev.riobranco.ac.gov.br/assets/images/logo-fav.png" type="image/x-icon">
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
                <img src="/imagem/branca.png" alt="Imagem" width="114,24,2px" height="133,98px">
                <br> 
            </div>
            <div style="text-align: center;">
                <h4 style="color: #ffffff; text-align: center;">COMPROVANTE DE RENDIMENTOS - 2023</h4>

            </div>
            <br>
        </div>
        <br>    
        <div class="container mt-5">
            <h4 class="mb-3">Resultado da pesquisa</h4>
            @if ($pdfPath)
            <p>A busca correspondente ao CPF <strong>{{ $cpf }} - Matricula {{ $matricula }} - {{$nome}} </strong>foi encontrado(a):</p>
            <div class="card">
                <div class="card-body">
                    
                    
                    <a href="{{ route('dirf_pmrb.store_c', ['cpf' => $cpf, 'matricula' => $matricula]) }}" target="_blank" class="btn btn-primary">Baixar Arquivo</a>

                </div>
            </div>
            <script>
                $(document).ready(function () {
                    var nome = "{{ $nome }}";
                    if (nome) {
                        $('#modal-nome').modal('show');
                    }
                });
            </script>
            @else
            <p>Nenhum PDF foi encontrado para o CPF {{ $cpf }}.</p>
            @endif

            <!-- Modal -->
            <!-- Modal -->
            <div class="modal fade" id="modal-nome" tabindex="-1" role="dialog" aria-labelledby="modal-nome-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-nome-label">
                                <img src="/imagem/rbPrevlogo2.jpg" alt="Logo RBPREV" style="height: 30px; margin-right: 10px;">
                                RBPREV da Boas Vindas
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" style="text-align:center;">
                            <strong>Seu informe de rendimento está disponível:</strong><br><br>
                            <p style="font-size: 20px;"><span style="color: blue">{{ $nome }}</span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>










        <footer class=" text-dark py-1" style="bottom: 0%; position: fixed; width: 100%;text-align: center; background-color: #003C82; ">
            <div class="container d-flex flex-column align-items-center">
                <!--<img src="images/azul.png" alt="Imagem" width="50px" height="50px">-->
                <!--<strong class="text-white py-3">Prefeitura Municipal de Rio Branco</strong>-->
                <p class="text-white py-2">Copyright © 2023 Instituto de Previdência do Município de Rio Branco</p>
            </div>
        </footer>







    </body></html>