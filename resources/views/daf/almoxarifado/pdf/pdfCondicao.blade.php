
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Condição</title>
    </head>
    <body>
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV<br>
            <strong>Relatório de Itens de Almoxarifado - Condição</strong>
        </div> <br>
        <br>
        @foreach ($lista as $nm_condicao => $patrimonios)
        <table  style="width:100%; border: 1px solid black;background-color: #C0C0C0;">
            <td align="center">{{ $nm_condicao }}</td>      
        </table>  
        
        <table  style="width:100%; border: 1px solid black;" >
            <thead>
                <tr>
                    <th style="width:40%; border: 1px solid black;">Número de Patrimônio</th>
                    <th style="width:20%; border: 1px solid black;">Condição</th>
                    <th style="width:40%; border: 1px solid black;">Localização</th>
                </tr>
            </thead>
            <tbody>
                
               @foreach ($patrimonios as $patrimonio)
                <tr>
                    <td style="border: 1px solid black;">{{ $patrimonio['nm_patrimonio'] }}</td>
                    <td style="border: 1px solid black;">{{ $patrimonio['condicao'] }}</td>
                    <td style="border: 1px solid black;">{{ $patrimonio['localizacao'] }}</td>
                </tr>
               @endforeach  
            
            </tbody>
            
        </table>
      @endforeach  


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