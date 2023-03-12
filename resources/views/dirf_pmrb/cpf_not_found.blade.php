<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CPF não encontrado</title>
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
            <h5 class="mb-5">Pesquisa por CPF</h5>
            <form action="" method="post" id="cpf-form">

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required>
                </div>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>

        <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="error-modal-label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="error-modal-label">CPF não encontrado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>O CPF digitado não foi encontrado.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#error-modal').modal('show');
                $('#error-modal .close, #error-modal .btn-secondary').on('click', function () {
                    window.location.href = '{{ route('dirf_pmrb.search') }}';
                });
            });
        </script>
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
    </body>
</html>
