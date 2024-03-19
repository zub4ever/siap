<div class="row d-flex justify-content-center">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
        <div class="wrap">
            <label for="cnpj" class="form-control-label">CNPJ da empresa:
                <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <input type="text" class="form-control" name="cnpj" id="cnpj" value="" data-mask="00.000.000/0000-00">
                <div class="input-group-append">
                    <button class="btn btn-primary" id="btnBuscarCnpj" type="button">Buscar CNPJ</button>
                </div>
            </div>
        </div>


    </div>
</div>


<div id="dadosCnpj">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="nome_fantasia">Nome Fantasia:</label>
                <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="razao_social">Razão Social:</label>
                <input type="text" class="form-control" id="razaoSocial" name="razao_social" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="cnpj">CNPJ:</label>
                <input type="text" class="form-control" id="cnpjRetornado" name="cnpj" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
            <div class="wrap">
                <label for="status">Situação:</label>
                <input type="text" class="form-control" id="statusRetornado" name="status" readonly>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
            <div class="wrap">
                <label for="cnae_principal_descricao">Principal descrição:</label>
                <input type="text" class="form-control" id="descricaoRetornado" name="cnae_principal_descricao" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="cnae_principal_codigo">Codigo Principal:</label>
                <input type="text" class="form-control" id="codigoRetornado" name="cnae_principal_codigo" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cepRetornado" name="cep" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="data_abertura">Data de abertura:</label>
                <input type="text" class="form-control" id="dataAberturaRetornado" name="data_abertura" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="ddd">DDD:</label>
                <input type="text" class="form-control" id="dddRetornado" name="ddd" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefoneRetornado" name="telefone">
            </div>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
            <div class="wrap">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="emailRetornado" name="email">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
            <div class="wrap">
                <label for="tipo_logradouro">Tipo de Logradouro:</label>
                <input type="text" class="form-control" id="tplogradouroRetornado" name="tipo_logradouro" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="logradouro">Logradouro:</label>
                <input type="text" class="form-control" id="logradouroRetornado" name="logradouro" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2 mt-4">
            <div class="wrap">
                <label for="numero">Número:</label>
                <input type="text" class="form-control" id="numeroRetornado" name="numero" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="complemento">Complemento:</label>
                <input type="text" class="form-control" id="complementoRetornado" name="complemento">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
            <div class="wrap">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairroRetornado" name="bairro" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
            <div class="wrap">
                <label for="municipio">Municipio:</label>
                <input type="text" class="form-control" id="municipioRetornado" name="municipio" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5 mt-4">
            <div class="wrap">
                <label for="uf">UF:</label>
                <input type="text" class="form-control" id="ufRetornado" name="uf" readonly>
            </div>
        </div>
    </div>

</div>

<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar
        </button>
    </div>
</div>


<script>
    document.getElementById('btnBuscarCnpj').addEventListener('click', function () {
        var cnpj = document.getElementById('cnpj').value.replaceAll(/[^\d]/g, ''); // Esse trecho remove os pontos e vigula e tals
        var url = '/search-cnpj?cnpj=' + cnpj;

       
        var request = new XMLHttpRequest();
        request.open('GET', url, true);
        request.onload = function () {
            if (request.status >= 200 && request.status < 400) {
                var data = JSON.parse(request.responseText);
                
                document.getElementById('nomeFantasia').value = data['NOME FANTASIA'];
                document.getElementById('razaoSocial').value = data['RAZAO SOCIAL'];
                document.getElementById('cnpjRetornado').value = data['CNPJ'];
                document.getElementById('statusRetornado').value = data['STATUS'];
                document.getElementById('descricaoRetornado').value = data['CNAE PRINCIPAL DESCRICAO'];
                document.getElementById('codigoRetornado').value = data['CNAE PRINCIPAL CODIGO'];
                document.getElementById('cepRetornado').value = data['CEP'];
                document.getElementById('dataAberturaRetornado').value = data['DATA ABERTURA'];
                document.getElementById('dddRetornado').value = data['DDD'];
                document.getElementById('telefoneRetornado').value = data['TELEFONE'];
                document.getElementById('emailRetornado').value = data['EMAIL'];
                document.getElementById('tplogradouroRetornado').value = data['TIPO LOGRADOURO'];
                document.getElementById('logradouroRetornado').value = data['LOGRADOURO'];
                document.getElementById('numeroRetornado').value = data['NUMERO'];
                document.getElementById('complementoRetornado').value = data['COMPLEMENTO'];
                document.getElementById('bairroRetornado').value = data['BAIRRO'];
                document.getElementById('municipioRetornado').value = data['MUNICIPIO'];
                document.getElementById('ufRetornado').value = data['UF'];


            }
        };
        request.send();
    });
</script>









