<?php

use Carbon\Carbon;
?>



<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Atendimentos</title>
    </head>
    <body>
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV<br>
            <strong>RELATÓRIO GERAL DE ATENDIMENTOS</strong>
        </div><br>









        <div class="row">
            <table id="minhaTabela">
                <thead>
                    <tr>
                        <th>Dia da Semana</th>
                        @foreach ($typeOfAttendance as $typeName)
                        <th>{{ $typeName }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dayName => $attendanceData)
                    <tr>
                        <td>{{ $dayName }}</td>
                        @foreach ($typeOfAttendance as $typeName)
                        <td>{{ $attendanceData[$typeName] ?? 0 }}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="13">Total de registros na semana</td>

                        <td>{{ array_sum($results) }}</td>

                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Essa tag quebra a pagina -->
        <div class="break-page"></div>
        <!-- Essa tag quebra a pagina -->
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV<br>
            <strong>RELATÓRIO GERAL DE ATENDIMENTOS</strong>
        </div><br>
        <table id="minhaTabela">
            <thead>
                <tr>
                    <th scope="col">Dia da Semana</th>
                    <th scope="col" aling="center">Quantidade de Atendimentos</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $weekday => $count)
                <tr>
                    <td>{{ $weekday }}</td>
                    <td aling="center">{{ $count }}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        <!-- Essa tag quebra a pagina -->
        <div class="break-page"></div>
        <!-- Essa tag quebra a pagina -->
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV<br>
            <strong>RELATÓRIO GERAL DE ATENDIMENTOS</strong>
        </div><br>




        <table id="minhaTabela">
            <thead>
                <tr>
                    <th>Tipo de atendimento</th>
                    @foreach ($meses as $mes)
                    <th>{{ $mes }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos_atendimento as $id => $tipo)
                <tr>
                    <td>{{ $tipo }}</td>
                    @foreach ($meses as $chave => $mes)
                    <td>
                        @foreach ($dados as $dado)
                        @if ($dado->atendimento_assunto_id == $id && substr($dado->mes, -2) == $chave)
                        {{ $dado->quantidade }}
                        @endif
                        @endforeach
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>



























































        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>

<style>
    .rightsCTC {
        position: absolute;
        right: 0px;
        width: 300px;
        border: 3px solid #808080;
        padding: 10px;
    }




    .break-page {
        page-break-after: always;
    }

    .justificado {
        text-align: justify;
    }
    /* Arquivo CSS */
    .texto-centralizado-12px {
        text-align: center;
        font-size: 12px;
    }
    /* Configuração da imagem de cabeçalho */
    .header-image {
        width: 100px;
        height: 90px;
        margin: 0 auto;
        display: block;





        #minhaTabela {
            border-collapse: collapse;
            width: 100%;
        }

        #minhaTabela th, #minhaTabela td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        #minhaTabela th {
            background-color: lightgray;
        }
        #minhaTabela tfoot {
            background-color: lightgray;
        }
        #minhaTabela {
            position: relative;
            bottom: 0;
            width: 100%;
        }



        #tabela-personalizada {


            border-collapse: collapse;
            width: 30%; /* Define a largura da tabela */
            margin: 0 auto; /* Centraliza a tabela na página */
        }

        #tabela-personalizada th, #tabela-personalizada td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        #tabela-personalizada th {
            background-color: lightgray;
        }
        #tabela-personalizada tfoot {
            background-color: lightgray;
        }

        /* Define borda */
        .border {
            border: 1px solid black;
            padding: 10px;
        }
        table {
            font-size: 12px; /* tamanho da fonte */
        }
        /*table tr {
            height: 30px;
        }*/
    </style>