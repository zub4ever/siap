<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Processos TCE</title>
    </head>
    <body>
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV<br>
            <strong>RELATÓRIO GERAL DE PROCESSOS HOMOLOGADOS PELO TCE</strong>
        </div><br>


        <table class="table" style="width:100%; border: 1px solid black; font-size: 10px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mês</th>
                    <th>Ano</th>
                    <th>Nome</th>
                    <th>Aposentadoria</th>
                    <th>Pensão</th>
                    <th>Cargo</th>
                    <th>Data Notificação</th>
                    <th>Acordão</th>
                    <th>Data Diario Eletrônico TCE</th>
                </tr>
            </thead>
            <tbody>
                @php
                $mesAnterior = '';
                $anoAnterior = '';
                $count = 0;
                @endphp
                <?php $contador = 1; ?>
                @foreach ($processos as $processo)
                @php
                $mesAtual = $processo->nm_mes;
                $anoAtual = $processo->nm_ano;
                @endphp

                @if ($mesAnterior != $mesAtual || $anoAnterior != $anoAtual)
                @if ($count > 0)
                <tr>
                    <th colspan="11">Total: {{ $count }}</th>
                </tr>
                @endif
                <tr>
                    <th colspan="11">{{ $mesAtual }} {{ $anoAtual }}</th>
                </tr>
                @php
                $mesAnterior = $mesAtual;
                $anoAnterior = $anoAtual;
                $count = 0;
                @endphp
                @endif

                <tr>
                    <td>{{ $contador++ }}</td>
                    <td>{{ $processo->nm_mes }}</td>
                    <td>{{ $processo->nm_ano }}</td>
                    <td>{{ $processo->nm_assegurado }}</td>
                    <td>{{ $processo->nm_aposentadoria }}</td>
                    <td>{{ $processo->nm_pensao }}</td>
                    <td>{{ $processo->nm_funcao }}</td>
                    <td>{{ date('d/m/Y', strtotime($processo->data_notificacao)) }}</td>
                    <td>{{ $processo->nr_acordao }}</td>                  
                    <td>{{ date('d/m/Y', strtotime($processo->data_diario_eletronico)) }}</td>                         
                </tr>
                @php
                $count++;
                @endphp
                @endforeach

                <tr>
                    <th colspan="11">Total: {{ $count }}</th>
                </tr>
            </tbody>
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