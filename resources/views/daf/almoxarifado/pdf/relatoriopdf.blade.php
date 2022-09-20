<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <style>
        html,
        h3,
        body {
            display: block;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        #left {
            float: left;
            width: 100px;
        }
    </style>

    <style>
        /** Define the margins of your page **/
        @page {
            margin: 100px 25px;
        }

        header {
            position: fixed;
            top: -95px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/


        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/


        }
    </style>

</head>

<body>
<!-- CSS Descricao -->
<header>
    <center><img width="70" height="55" src="/images/rbPrev-logo.png">
        <center>
            <center><strong>
                    <font size='1'>PREFEITURA MUNICIPAL DE RIO BRANCO</font>
                </strong></center>
            <center><strong>
                    <font size='1'>Instituto De previdência do municipip de Rio Branco</font>
                </strong></center>

</header>

<footer>
    <p><img width="120" height="55">
        <strong>Data: </strong>{{\Carbon\Carbon::now()->format('d/m/Y')}} <strong>às</strong> {{\Carbon\Carbon::now()->format('H:i')}} <strong> Feito por: </strong>{{auth()->user()->name}}
    </p>

</footer>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
        border-color: #ccc;
    }

    .tg td {
        font-family: Arial, sans-serif;
        font-size: 15px;
        padding: 10px 10px;
        border-style: solid;
        border-width: 2px;
        overflow: hidden;
        word-break: normal;
        border-color: #ccc;
        color: #333;
        background-color: #fff;
    }

    .tg th {
        font-family: Arial, sans-serif;
        font-size: 15px;
        font-weight: normal;
        padding: 9px 10px;
        border-style: solid;
        border-width: 2px;
        overflow: hidden;
        word-break: normal;
        border-color: #ccc;
        color: #333;
        background-color: #f0f0f0;
    }

    .tg .tg-fkpb {
        background-color: #f0f0f0;
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-7od5 {
        background-color: #9aff99;
        border-color: inherit;
        text-align: left;
        vertical-align: top
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
</style>



@if ($almo_tipo==1)
    <?php $i = 0; ?>
    @foreach($almo_tipo as $mnc)
        @if($fcn->almoxarifado_tipo_id == $mnc->id)
            <td class="text-center">{{$mnc->nm_tipo}}</td>
            <?php $i = 1 + $i; ?>
        @endif
    @endforeach
@endif







</body>
</html>
