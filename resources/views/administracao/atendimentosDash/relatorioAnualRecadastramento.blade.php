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

        <title>Recadastramentos</title>
    </head>
    <body>
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV<br>
            <strong>RELATÓRIO GERAL DE COMPARECIMENTO DO RECADASTRAMENTO 2023</strong>
        </div><br>



        <table class="table">
            @foreach (range(1, 12) as $monthNumber)
            <tr>
                <th colspan="3">{{ strftime("%B", strtotime(\Carbon\Carbon::createFromDate(2023, $monthNumber))) }}
                </th>
            </tr>
            <tr>
                <th>Nome do Assegurado</th>
                <th>Matrícula</th>
                <th>CPF</th>
            </tr>
            @foreach ($atendimentos as $atendimento)
            @if (\Carbon\Carbon::parse($atendimento->month)->month == $monthNumber)
            <tr>
                <td>{{ $atendimento->nm_assegurado }}</td>
                <td>{{ $atendimento->matricula }}</td>
                <td>{{ $atendimento->cpf }}</td>
            </tr>
            @endif
            @endforeach
            <tr><td colspan="3"></td></tr> {{-- Linha vazia --}}
            @endforeach
        </table>
        <style>
            .table {
                width: 100%;
                text-align: center;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            .table th, .table td {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .table th {
                background-color: #ddd;
                text-transform: uppercase;
            }
        </style>


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












