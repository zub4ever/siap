

<html lang="pt-br">
    <head>
        <!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Item</title>
    <link rel="stylesheet" href="{{asset('css/pdf.css')}}">


</head>

<body>
    <div align="center"><img class="imgcabecalho" src="../public/imagem/rbPrevlogo2.jpg"></div>   
    <h3 align="center">Instituto de Previdência do Município de Rio Branco</h3>
<table class="tg" style="table-layout: fixed; width: 700px">
        <colgroup>
            <col style="width: 700px">
        </colgroup>
        <tr>
            <th class="tg-0pky">
        <center><strong>Item de Almoxarifado</strong></center>
    </th>
</tr>
</table>
<br>    
<table class="tgB" style="table-layout: fixed; width: 700px">
    <tr>
        <th class="tgB-lnuh" ><strong>Patrimônio: </strong> <a>{{$almoxarifado->nm_patrimonio}}</a></th>                
        @foreach ($almo_tipo as $tipo)
        @if($almoxarifado->almoxarifado_tipo_id == $tipo->id)
        <th class="tgB-lnuh" ><strong>Tipo de Item: </strong> <a>{{$tipo->nm_tipo}}</a></th>
        @endif
        @endforeach
        @foreach ($almo_contrato as $contrato)
        @if($almoxarifado->almoxarifado_contrato_id == $contrato->id)
        <th class="tgB-lnuh" ><strong>Contrato: </strong> <a>{{$contrato->nr_contrato}}/{{$contrato->ano_contrato}}</a></th>
        @endif
        @endforeach        
    </tr>
</table>
<br>
<table class="tg" style="table-layout: fixed; width: 700px">
        <colgroup>
            <col style="width: 700px">
        </colgroup>
        <tr>
            <th class="tg-0pky">
        <center><strong>Gerais</strong></center>
    </th>
</tr>
</table>
<br>    
<table class="tgB" style="table-layout: fixed; width: 700px">
    <tr>
                     
        @foreach ($almo_marca as $marca)
        @if($almoxarifado->almoxarifado_marca_id == $marca->id)
        <th class="tgB-lnuh" ><strong>Marca do Item: </strong> <a>{{$marca->nm_marca}}</a></th>
        @endif
        @endforeach
        @foreach ($almo_condicao as $condicao)
        @if($almoxarifado->almoxarifado_condicao_id == $condicao->id)
        <th class="tgB-lnuh" ><strong>Condição do Item: </strong> <a>{{$condicao->nm_condicao}}</a></th>
        @endif
        @endforeach  
        @foreach ($almo_localizacao_dpto as $localizacao)
        @if($almoxarifado->almoxarifado_localizacao_dpto_id == $localizacao->id)
        <th class="tgB-lnuh" ><strong>Localização do Item: </strong> <a>{{$localizacao->nm_departamento}}</a></th>
        @endif
        @endforeach       
    </tr>
</table>
<br>
<table class="tgB" style="table-layout: fixed; width: 700px">
    <tr>
                     
        @foreach ($almo_cedido as $cedido)
        @if($almoxarifado->almoxarifado_cedido_id == $cedido->id)
        <th class="tgB-lnuh" ><strong>Item cedido: </strong> <a>{{$cedido->nm_cedido}}</a></th>
        @endif
        @endforeach              
        <th class="tgB-lnuh" ><strong>Localização do Item: </strong> <a>{{$almoxarifado->cedido_localizacao}}</a></th>             
    </tr>
</table>
<br>
<table class="tg" style="table-layout: fixed; width: 700px">
        <colgroup>
            <col style="width: 700px">
        </colgroup>
        <tr>
            <th class="tg-0pky">
        <center><strong>Descrição</strong></center>
    </th>
</tr>
</table>
<br>
<table class="tgd" style="table-layout: fixed; width: 700px">
    <colgroup>
        <col style="width: 700px">
    </colgroup>
    <tr>
        <th class="tgd-x4j0"><p style="width: 20m; word-wrap: break-word;"><strong>Descrição do Item: </strong>{{ $almoxarifado->descricao }}</p></th>
    </tr>
</table>
<table class="tgd" style="table-layout: fixed; width: 700px">
    <colgroup>
        <col style="width: 700px">
    </colgroup>
    <tr>
        <th class="tgd-x4j0"><p style="width: 20m; word-wrap: break-word;"><strong>Observação do Item: </strong>{{ $almoxarifado->observacao }}</p></th>
    </tr>
</table>
<br>
<table class="tg" style="table-layout: fixed; width: 700px">
        <colgroup>
            <col style="width: 700px">
        </colgroup>
        <tr>
            <th class="tg-0pky">
        <center><strong>Responsabilidades</strong></center>
    </th>
</tr>
</table>
<br>
<table class="tgB" style="table-layout: fixed; width: 700px">
    <tr>
                     
        @foreach ($almo_responsavel as $responsavel)
        @if($almoxarifado->almoxarifado_responsavel_id == $responsavel->id)
        <th class="tgB-lnuh" ><strong>Responsável pelo Item: </strong> <a>{{$responsavel->nm_responsavel}}</a></th>
        @endif
        @endforeach            
    </tr>
</table>






<div class="footer" align="center"><img width="100" height="100" src="../public/imagem/pfrb.jpg">   
</div>

</body>

</html>

<style>
    .html, body {
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
        width: 100px;
    }

    .html, body {
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

    .table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        size: auto;
        padding: 6px;
        font-size: 14px;
        width: 100%;
    }

    .imgcabecalho {
        width: 120px;
        height: 90px;
        alignment: center;
    }

    .imgrodape {
        width: 740px;
        height: 40px;
        alignment: center;
    }

    <!--alisson-->
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
        border-color: #ccc;
    }

    .tg td {
        font-family: Arial, sans-serif;
        font-size: 14px;
        padding: 10px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: #ccc;
        color: #333;
        background-color: #f8f8f8;
    }

    .tg th {
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        padding: 10px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: #ccc;
        color: #333;
        background-color: #f8f8f8;
    }

    .tg .tg-xldj {
        border-color: inherit;
        text-align: left
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }
    .tgd {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tgd td {
        font-family: Arial, sans-serif;
        font-size: 12px;
        padding: 8px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }

    .tgd th {
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-weight: normal;
        padding: 8px 4px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }

    .tgd .tgd-x4j0 {
        font-family: Arial, sans-serif;
        font-size: 12px;
        padding: 8px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }
</style>
