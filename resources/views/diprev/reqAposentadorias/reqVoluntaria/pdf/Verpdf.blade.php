<html lang="pt-br">

<head>
    <!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Atendimento PDF</title>
    


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
                <center><strong>Solicitação de Aposentadoria Voluntária</strong></center>
            </th>
        </tr>
    </table>
    <br>
    <table>
       
        <tr>
            <td>Nome requerente: <a>{{$reqApVoluntaria->nm_requerente}}</a></td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
        <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
        </tr>
        <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
        </tr>
        <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
        </tr>
        <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
        </tr>
    </table>





    <div class="footer" align="center"><img width="100" height="100" src="../public/imagem/pfrb.jpg">
    </div>

</body>

</html>

<style>
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
        width: 100px;
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
        width: 120px;
        height: 90px;
        alignment: center;
    }

    .imgrodape {
        width: 740px;
        height: 40px;
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
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    th .tg-0pky {
        background-color: #dddddd;
    }
</style>