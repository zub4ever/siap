<html lang="pt-br">
    <head>
        <!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Requerimento PDF</title>
</head>
<body>
    <div align="center"><img class="imgcabecalho" src="../public/imagem/rbPrevlogo2.jpg"></div>

    <h4 align="center"><a>Instituto de Previdência do Município de Rio Branco - RBPREV</a></h4>
    <table>       
        <tr>
        <tr>       
            <td><center><strong>Solicitação de Aposentadoria Voluntária</strong></center></td>
</tr>
</tr>
</table>
<br>
<table>       
    <tr>

        <td style="width: 500px">Nome requerente: <strong>{{$reqApVoluntaria->nm_requerente}}</strong></td>
        <td>Matrícula: <strong>{{$reqApVoluntaria->matricula}}</strong></td>  

    </tr>       
</table>
<table>       
    <tr>
        <td>Data Nascimento: <strong>{{date( 'd/m/Y' , strtotime($reqApVoluntaria->data_nascimento))}}</strong></td>

        <td>CPF: <strong>{{$reqApVoluntaria->cpf}}</strong></td> 
        <td>RG: <strong>{{$reqApVoluntaria->rg}}</strong></td>  
        <td>PIS/PASEP: <strong>{{$reqApVoluntaria->pis_pasep}}</strong></td>           
    </tr>       
</table>
<table>       
    <tr>
        @foreach ($sexo as $sexo)
        @if($reqApVoluntaria->sexo_id == $sexo->id)
        <td>Sexo: <strong>{{$sexo->nm_sexo}}</strong></td>
        @endif
        @endforeach
        @foreach ($marital_status as $mt)
        @if($reqApVoluntaria->status_civil_id == $mt->id)
        <td>Status Civil: <strong>{{$mt->status_civil}}</strong></td>
        @endif
        @endforeach
        <td>Contato: <strong>{{$reqApVoluntaria->nr_telefone}}</strong></td>
    </tr>       
</table>
<br>
<table>       
    <tr>
    <tr>       
        <td><center><strong>Informações de endereço</strong></center></td>
</tr>
</tr>
</table>
<br><!-- comment -->
<table>       
    <tr>
        <td style="width: 500px">Endereço: <strong>{{$reqApVoluntaria->nm_rua}}</strong></td>
        <td>Número: <strong>{{$reqApVoluntaria->numero_casa}}</strong></td>           
    </tr>       
</table>
<table>       
    <tr>       
        <td style="width: 500px">Complemento: <strong>{{$reqApVoluntaria->complemento}}</strong></td>
        <td>CEP: <strong>{{$reqApVoluntaria->cep}}</strong></td>
    </tr>       
</table>
<table>       
    <tr>
        <td style="width: 300px">Bairro: <strong>{{$reqApVoluntaria->nm_bairro}}</strong></td>
        @foreach ($city as $city)
        @if($reqApVoluntaria->city_id == $city->id)
        <td>Cidade: <strong>{{$city->nm_cidade}}</strong></td>
        @endif
        @endforeach
        <td>UF: <strong>{{$reqApVoluntaria->nm_uf}}</strong></td>

    </tr>       
</table>
<br>
<table>       
    <tr>
    <tr>       
        <td><center><strong>Informações de Contato</strong></center></td>
</tr>
</tr>
</table>
<br><!-- comment -->
<table>       
    <tr>

        @foreach ($vinculo_municipio as $vinculo)
        @if($reqApVoluntaria->vinculo_municipio_id == $vinculo->id)
        <td style="width: 200px">Vinculo: <strong>{{$vinculo->nm_vinculo}}</strong></td>
        @endif
        @endforeach       
        @foreach ($orgao as $orgao)
        @if($reqApVoluntaria->orgao_id == $orgao->id)
        <td>Orgão: <strong>{{$orgao->nm_orgao}}</strong></td>
        @endif
        @endforeach                    
    </tr>       
</table>
<table>
    <tr>
        @foreach ($funcao as $funcao)
        @if($reqApVoluntaria->funcao_id == $funcao->id)
        <td style="width: 400px">Função: <strong>{{$funcao->nm_funcao}}</strong></td>
        @endif
        @endforeach
        <td>Cargo Efetivo: <strong>{{$reqApVoluntaria->nm_cargo}}</strong></td>
    </tr>
</table>
<table>
    <tr>       
        <td>Lotação: <strong>{{$reqApVoluntaria->nm_lotacao}}</strong></td>
    </tr>
</table>

<br>
<table>       
    <tr>
    <tr>       
        <td><center><strong>Informações de Base Legal</strong></center></td>
</tr>
</tr>
</table>
<table>
    <tr>
        <td>Nos termos de:</td>        
    </tr>
</table>
<table>
    <tr>
    <tr>
        @foreach ($termo_aposentadoria as $termo)
        @if($reqApVoluntaria->termos_aposentadoria_id == $termo->id)
        <td><strong>{{$termo->nm_termos}}</strong></td>
        @endif
        @endforeach</tr>
</tr>
</table>
<br><br>
<table>
    <tr>       
        <td style="width: 120px">Local: <strong>RBPREV</strong></td>

        <td>Data Solicitação: <strong>{{date( 'd/m/Y' , strtotime($reqApVoluntaria->data_solicitacao))}}</strong></td>
        <td style="width: 300px">Responsável: 
            @foreach ($termo_aposentadoria_responsavel as $termos)
            @if($reqApVoluntaria->termos_aposentadoria_responsavel_id == $termos->id)   
            <strong>{{$termos->nm_responsavel}}</strong>
            @endif
            @endforeach
        </td>

    </tr>
</table>

<br><br>
<div class="container">
    <div class="box-orange">
        <br>
        <p style="text-align:center">__________________________________________</p>
        <p style="text-align:center">{{$reqApVoluntaria->nm_requerente}}</p>
        <p style="text-align:center">Requerente</p>
    </div>
    <div class="box-blue">
        <br>
        <p style="text-align:center">__________________________________________</p>

        <p style="text-align:center">{{$nome_responsavel}}</p>

        <p style="text-align:center">Responsável</p>

    </div>


</div>


<div class="footer" align="center"><img width="80" height="80" src="../public/imagem/pfrb.jpg">
</div>

</body>

</html>

<style>
    container {
        position: absolute;
        background: lightgray;
        width: 50%;
        margin: 0 auto;
        height: 100px;
        display: inline-block;

    }
    .box-orange {
        background: #ABA9A9;
        width: 345px;
        height: 150px;
        position: center;
        right: 18px;
        display: inline-block
    }

    .box-blue {
        background: #ABA9A9;
        width: 350px;
        height: 150px;
        right: 18px;
        display: inline-block
    }

    .html,
    body {
        display: block;
    }

    .cabecalho {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .left {
        float: left;
        width: 80px;
    }

    .html,


    .cabecalho {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }



    .left {
        float: left;
        width: 100px;
    }

    .body {
        margin-top: 0.5cm;
        margin-left: 1cm;
        margin-right: 1cm;
        margin-bottom: 0.5cm;
    }

    .header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #3b5998;
        color: white;
        line-height: 1.0cm;
    }



    .imgcabecalho {
        width: 100px;
        height: 70px;
        alignment: center;
    }

    .imgrodape {
        width: 440px;
        height: 20px;
        alignment: center;
    }


    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 4px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    th .tg-0pky {
        background-color: #dddddd;
    }

</style>