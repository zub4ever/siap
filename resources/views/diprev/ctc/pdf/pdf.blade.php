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

        <title>CTC</title>
    </head>
    <body>
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV<br>
            <strong>CERTIDÃO DE TEMPO DE CONTRIBUIÇÃO</strong>
        </div> <br>



        <div class="col-4" style="float: right; border: 1px solid black; background-color: lightgray; text-align: center; padding: 10px; font-size: 12px;">
            CTC Nº {{$ctc->ctc_numero}}
        </div><br><br>


        <table style="width:100%; border: 1px solid black; font-size: 10px;">
            <td style="width:60%; border: 1px solid black;"><strong>ORGÃO EXPEDIDOR: </strong><br>
                INSTITUTO DE PREVIDÊNCIA DO MUNICÍPIO DE RIO BRANCO
            </td>
            <td style="width:40%; border: 1px solid black;"><strong>CNPJ</strong><br>
                17.733.605/0001-94
            </td>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:50%; border: 1px solid black;"><strong>NOME DO SERVIDOR: </strong><br>
                    @foreach ($servidor as $servidor)
                    @if($ctc->serve_id == $servidor->id)
                    {{$servidor->nm_servidor}}
                </td>
                <td style="width:25%; border: 1px solid black;"><strong>MATRÍCULA:</strong><br>
                    {{$servidor->matricula}}
                </td>
                <td style="width:25%; border: 1px solid black;"><strong>SEXO:</strong><br>
                    @if($servidor->sexo_id == 1)
                    MASCULINO
                    @else
                    FEMININO
                    @endif
                </td>
            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:50%; border: 1px solid black;"><strong>RG/ÓRGÃO EXPEDIDOR: </strong><br>
                    @if($servidor->orgao_expedidor_id == 1)
                    {{$servidor->rg}} SSP/AC
                    @elseif($servidor->orgao_expedidor_id == 2)
                    {{$servidor->rg}} SEPC/AC
                    @elseif($servidor->orgao_expedidor_id == 3)
                    {{$servidor->rg}} SSP/GO
                    @endif
                </td>
                <td style="width:25%; border: 1px solid black;"><strong>CPF:</strong><br>
                    {{$servidor->cpf}}
                </td>
                <td style="width:25%; border: 1px solid black;"><strong>PIS/PASEP:</strong><br>
                    {{$servidor->pis_pasep}}
                </td>
            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:75%; border: 1px solid black;"><strong>FILIAÇÃO: </strong><br>
                    {{$servidor->nm_pai}} e {{$servidor->nm_mae}}
                </td>
                <td style="width:25%; border: 1px solid black;"><strong>DATA NASCIMENTO:</strong><br>
                    {{ date('d/m/Y', strtotime($servidor->data_nascimento)) }}
                    @endif
                    @endforeach
                </td>
            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:100%; border: 1px solid black;"><strong>Endereço:</strong><br>
                    @foreach ($address as $endereco)
                    @if($ctc->address_id == $endereco->id)
                    {{$endereco->nm_rua}},{{$endereco->nr_casa}},{{$endereco->bairro}}, @if($endereco->city_id == 16)RIO BRANCO    @endif @if($endereco->state_id == 1), ACRE    @endif
                    @endif
                    @endforeach
                </td>
            </tr>
        </table>

        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:100%; border: 1px solid black;"><strong>CARGO EFETIVO:</strong><br>
                    @foreach ($funcao as $funcao)
                    @if($ctc->funcao_id == $funcao->id)
                    {{$funcao->nm_funcao}}
                    @endif
                    @endforeach
                </td>

            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:100%; border: 1px solid black;"><strong>ORGÃO DE LOTAÇAO:</strong><br>
                    @foreach ($orgao as $orgao)
                    @if($ctc->orgao_id == $orgao->id)
                    {{$orgao->nm_orgao}}
                    @endif
                    @endforeach
                </td>
            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:50%; border: 1px solid black;"><strong>DATA DE ADMISSÃO:</strong><br>
                    {{ date('d/m/Y', strtotime($ctc->data_admissao)) }}
                </td>
                <td style="width:50%; border: 1px solid black;"><strong>DATA DE EXONERAÇÃO/DEMISSÃO:</strong><br>
                    {{ $ctc->data_exoneracao ? date('d/m/Y', strtotime($ctc->data_exoneracao)) : '' }}
                </td>
            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:100%; border: 1px solid black;"><strong>PERÍODO DE CONTRIBUIÇÃO COMPREENDIDO NESTA CERTIDÃO:</strong><br>
                    De {{ date('d/m/Y', strtotime($ctc->start_date)) }} A {{ date('d/m/Y', strtotime($ctc->end_date)) }}
                </td>
            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:100%; border: 1px solid black;"><strong>FONTE DE INFORMAÇÃO:</strong><br>
                    {{$ctc->fonte_info}}
                </td>
            </tr>
        </table>
        <table style="width:100%; border: 1px solid black;font-size: 10px;">
            <tr>
                <td style="width:100%; border: 1px solid black;"><strong>DESTINAÇÃO DO TEMPO DE CONTRIBUIÇÃO:</strong><br>
                    PERÍODO DE {{ date('d/m/Y', strtotime($ctc->start_date)) }} A {{ date('d/m/Y', strtotime($ctc->end_date)) }} {{$ctc->destinacao}}
                </td>
            </tr>
        </table>
        <div style="text-align: center;">
            <strong align="center">FREQUÊNCIA</strong>
        </div>


        <table style="width:100%; border: 1px solid black;font-size: 8px;">
            <thead>
                <tr>
                    <th style="width:40%; border: 1px solid black;">ANO</th>
                    <th style="width:40%; border: 1px solid black;">TEMPO BRUTO</th>
                    <th style="width:40%; border: 1px solid black;">FALTAS</th>
                    <th style="width:40%; border: 1px solid black;">LICENÇA</th>
                    <th style="width:40%; border: 1px solid black;">LICENÇA<br>SEM VENCIMENTO</th>
                    <th style="width:40%; border: 1px solid black;">SUSPENSÕES</th>
                    <th style="width:40%; border: 1px solid black;">DISPONIBILIDADE</th>
                    <th style="width:40%; border: 1px solid black;">OUTRAS</th>
                    <th style="width:40%; border: 1px solid black;">TOTAL LÍQUIDO</th>
                </tr>
            </thead>
            <tbody>
                @php
                $total_bruto = 0;
                $total_liquido = 0;
                $total_faltas = 0;
                @endphp

                @foreach($ctc_deducao->sortBy('ano') as $deducao)
                <tr>
                    <td style="border: 1px solid black;">{{$deducao->ano}}</td>
                    <td style="border: 1px solid black;">{{$deducao->tempo_bruto}}</td>
                    <td style="border: 1px solid black;">{{$deducao->faltas}}</td>
                    <td style="border: 1px solid black;">{{$deducao->licencas}}</td>
                    <td style="border: 1px solid black;">{{$deducao->licencas_sem_vencimento}}</td>
                    <td style="border: 1px solid black;">{{$deducao->suspensoes}}</td>
                    <td style="border: 1px solid black;">{{$deducao->disponibilidade}}</td>
                    <td style="border: 1px solid black;">{{$deducao->outras}}</td>
                    <td style="border: 1px solid black;">{{$deducao->tempo_liquido}}</td>
                </tr>
                @php
                $total_bruto += $deducao->tempo_bruto;
                $total_liquido += $deducao->tempo_liquido;
                $total_faltas += $deducao->faltas;
                @endphp
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <td>Total</td>
                    <td style="border: 1px solid black;">{{$total_bruto}} dias</td>
                    <td style="border: 1px solid black;">{{$total_faltas}} dias</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;">{{$total_liquido}} dias</td>

                </tr>
            </tfoot>
        </table>
        <br><!-- comment -->


        <?php
        $tempoCarbon = Carbon::now()->addDays($total_liquido);
        $anos = $tempoCarbon->diffInYears();
        $meses = $tempoCarbon->diffInMonths() % 12;
        $dias = $tempoCarbon->diffInDays() % 30;
        ?>


        <table style="width:100%; border: 1px solid black;line-height: 1;font-size: 10px;">

            <td style="width:100%; border: 1px solid black;">
                <p class="justificado">CERTIFICO, em face do apurado, que o interessado conta, de efetivo exercício prestado neste Órgão, o tempo de contribuição de {{$total_liquido }} dias, correspondente a {{ $anos }} anos, {{ $meses }} meses e {{ $dias }} dias</p>
                <p class="justificado">CERTIFICO que a Lei nº 1. 793, de 23 de dezembro de 2009, assegura aos servidores públicos titulares de cargo efetivo do município de
                    Rio Branco/AC os benefícios das aposentadorias voluntárias, por invalidez e compulsória, e pensão por morte, com aproveitamento de
                    tempo de contribuição para o Regime Geral de Previdência Social ou para outro Regime Próprio de Previdência Social, na forma da
                    contagem recíproca, conforme Lei Federal nº 6.226, de 14/07/75, com alteração dada pela Lei Federal nº 6.864, de 01/12/80.  </p>
            </td>

        </table>






        <!-- Essa tag quebra a pagina -->
        <div class="break-page"></div>
        <!-- Essa tag quebra a pagina -->



        <p style="text-align:right;">CTC Nº {{$ctc->ctc_numero}}</p>
        <br>


        <table style="width: 100%">
            <tr>
                <td style="width: 50%">
                    <div style="border: 1px solid black; font-size: 10px; width: 100%">
                        <p><strong>Lavrei a Certidão que não contém emendas nem rasuras</strong></p>
                        <br><br><br><!-- comment -->
                        <p style="text-align: center">Rio Branco - AC, {{ date('d/m/Y') }}</p>

                    </div>
                    <div style="border: 1px solid black;font-size: 10px; width: 100%">
                        <p style="text-align: center">Assinatura e carimbo </p>
                    </div>
                </td>
                <td style="width: 50%">
                    <div style="border: 1px solid black; font-size: 10px; width: 100%">
                        <p><strong>Visto do Dirigente do Órgão</strong></p>
                        <br><br><br><!-- comment -->
                        <p style="text-align: center">Rio Branco - AC, {{ date('d/m/Y') }}</p>

                    </div>
                    <div style="border: 1px solid black;font-size: 10px; width: 100%">
                        <p style="text-align: center">Assinatura </p>
                    </div>
                </td>
            </tr>
        </table>


        <br>
        <strong>UNIDADE GESTORA DO RPPS</strong>
        <table style="width:100%; border: 1px solid black;">
            <tr>
                <td style="width:100%; border: 1px solid black;">
                    <p class="justificado"><strong>HOMOLOGO</strong> a presente Certidão de Tempo de Contribuição e declaro que as informações nela constantes
                        correspondem com a verdade.</p>

                    <p style="text-align:left;">Rio Branco - AC, {{ date('d/m/Y') }}</p>
                </td>
            </tr>
        </table>
        <!-- Essa tag quebra a pagina -->
        <div class="break-page"></div>
        <!-- Essa tag quebra a pagina -->
        <div class="header-image-container" align="center">
            <img src="../public/imagem/azul_claro.png" align="center" alt="Imagem de cabeçalho">
        </div>
        <div class="texto-centralizado-12px">
            PREFEITURA MUNICIPAL DE RIO BRANCO<br>
            <strong>INSTITUTO DE PREVIDÊNCIA DE RIO BRANCO - RBPREV</strong>
        </div><br>
        <p style="text-align:right;"><strong>Certidão de Tempo de Contribuição Nº {{$ctc->ctc_numero}}</strong></p>

        <table  style="width:100%; border: 1px solid black;" >
            <td align="center">FREQUÊNCIA - DISCRIMINAÇÃO DAS DEDUÇÕES DO TEMPO BRUTO</td>
        </table>
        <table  style="width:100%; border: 1px solid black;" >
            <thead>
                <tr>
                    <th style="width:40%; border: 1px solid black;">Períodos</th>
                    <th style="width:20%; border: 1px solid black;">Tempo em dias</th>
                    <th style="width:40%; border: 1px solid black;">Identificação da ocorrência</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ctc_verso as $registro)
                <tr>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_bruto_inicio_1) && !empty($registro->tempo_bruto_fim_1))
                        {{ Carbon::parse($registro->tempo_bruto_inicio_1)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_1)->format('d/m/Y') }}
                        @endif</td>
                    @if (!empty($registro->tempo_bruto_dias_1))
                    <td style="border: 1px solid black;">
                        {{ $registro->tempo_bruto_dias_1 }} dias
                    </td>
                    @else
                    <td style="border: 1px solid black;">
                        {{ $registro->tempo_bruto_dias_1 }} 
                    </td>
                    @endif

                    <td style="border: 1px solid black;">{{ $registro->id_ocorrencia_1 }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_bruto_inicio_2) && !empty($registro->tempo_bruto_fim_2))
                        {{ Carbon::parse($registro->tempo_bruto_inicio_2)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_2)->format('d/m/Y') }}
                        @endif</td>
                    @if (!empty($registro->tempo_bruto_dias_2))
                    <td style="border: 1px solid black;">
                        {{ $registro->tempo_bruto_dias_2 }} dias
                    </td>
                    @else
                    <td style="border: 1px solid black;">
                        {{ $registro->tempo_bruto_dias_2 }} 
                    </td>
                    @endif
                    <td style="border: 1px solid black;">{{ $registro->id_ocorrencia_2 }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_bruto_inicio_3) && !empty($registro->tempo_bruto_fim_3))
                        {{ Carbon::parse($registro->tempo_bruto_inicio_3)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_3)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_bruto_dias_3 }}</td>
                    <td style="border: 1px solid black;">{{ $registro->id_ocorrencia_3 }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_bruto_inicio_4) && !empty($registro->tempo_bruto_fim_4))
                        {{ Carbon::parse($registro->tempo_bruto_inicio_4)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_4)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_bruto_dias_4 }}</td>
                    <td style="border: 1px solid black;">{{ $registro->id_ocorrencia_4 }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_bruto_inicio_5) && !empty($registro->tempo_bruto_fim_5))
                        {{ Carbon::parse($registro->tempo_bruto_inicio_5)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_5)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_bruto_dias_5 }}</td>
                    <td style="border: 1px solid black;">{{ $registro->id_ocorrencia_5 }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_bruto_inicio_6) && !empty($registro->tempo_bruto_fim_6))
                        {{ Carbon::parse($registro->tempo_bruto_inicio_6)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_6)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_bruto_dias_6 }}</td>
                    <td style="border: 1px solid black;">{{ $registro->id_ocorrencia_6 }}</td>
                </tr>
                @endforeach
            </tbody>
        </table><br>
        <table  style="width:100%; border: 1px solid black;">
            <td align="center">TEMPO ESPECIAL INCLUÍDO, SEM CONVERSÃO, NO PERÍODO DE CONTRIBUIÇÃO COMPREENDIDO NESTA CERTIDÃO</td>
        </table>
        <table  style="width:100%; border: 1px solid black;" >
            <thead>
                <tr>
                    <th style="width:50%; border: 1px solid black;">Especificação do exercício do tempo especial</th>
                    <th style="width:30%; border: 1px solid black;">Período</th>
                    <th style="width:20%; border: 1px solid black;">Tempo em dias</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ctc_verso as $registro)
                <tr>

                    <td colspan="3">I - Na condição de segurado com deficiência:</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">a) grave</td>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_especial_inicio_1) && !empty($registro->tempo_especial_fim_1))
                        {{ Carbon::parse($registro->tempo_especial_inicio_1)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_1)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_especial_dias_1 }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">b) moderada</td>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_especial_inicio_2) && !empty($registro->tempo_especial_fim_2))
                        {{ Carbon::parse($registro->tempo_especial_inicio_2)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_2)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_especial_dias_2 }}</td>
                </tr>

                <tr>
                    <td style="border: 1px solid black;">c) leve</td>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_especial_inicio_3) && !empty($registro->tempo_especial_fim_3))
                        {{ Carbon::parse($registro->tempo_especial_inicio_3)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_3)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_especial_dias_3 }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">II - No cargo de policial, agente penitenciário ou de agente socioeducativo.</td>
                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_especial_inicio_4) && !empty($registro->tempo_bruto_fim_4))
                        {{ Carbon::parse($registro->tempo_especial_inicio_4)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_4)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_especial_dias_4 }}</td>
                </tr>
                <tr>

                    <td colspan="2">
                        III - Em atividades sob condições especiais que prejudiquem a saúde ou a integridade física ou com efetiva exposição a agentes químicos, físicos e biológicos prejudiciais à saúde.
                    </td>
                    <td style="border: 1px solid black;"></td>
                </tr>


                <tr>
                    <td style="border: 1px solid black;">a)  com redução do tempo para 25 anos</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">b)  com redução do tempo para 20 anos</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">c)  com redução do tempo para 15 anos</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Ultima parte -->
        <br>

        <table  style="width:100%; border: 1px solid black;">
            <td align="center">TEMPO DE EFETIVO EXERCÍCIO DAS FUNÇÕES DE MAGISTÉRIO NA EDUCAÇÃO INFANTIL E NO ENSINO FUNDAMENTAL E MÉDIO NO PERÍODO DE CONTRIBUIÇÃO COMPREENDIDO NESTA CERTIDÃO</td>
        </table>
        <table  style="width:100%; border: 1px solid black;" >
            <thead>
                <tr>
                    <th style="width:50%; border: 1px solid black;">Períodos</th>
                    <th style="width:50%; border: 1px solid black;">Tempo em dias</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($ctc_verso as $registro)
                <tr>

                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_magisterio_incio_1) && !empty($registro->tempo_magisterio_fim_1))
                        {{ Carbon::parse($registro->tempo_magisterio_incio_1)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_1)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_magisterio_dias_1 }}</td>
                </tr>
                <tr>

                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_magisterio_incio_2) && !empty($registro->tempo_magisterio_fim_2))
                        {{ Carbon::parse($registro->tempo_magisterio_incio_2)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_2)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_magisterio_dias_2 }}</td>
                </tr>

                <tr>

                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_magisterio_incio_3) && !empty($registro->tempo_magisterio_fim_3))
                        {{ Carbon::parse($registro->tempo_magisterio_incio_3)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_3)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_magisterio_dias_3 }}</td>
                </tr>
                <tr>

                    <td style="border: 1px solid black;">De:  @if(!empty($registro->tempo_magisterio_incio_4) && !empty($registro->tempo_magisterio_fim_4))
                        {{ Carbon::parse($registro->tempo_magisterio_incio_4)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_4)->format('d/m/Y') }}
                        @endif</td>
                    <td style="border: 1px solid black;">{{ $registro->tempo_magisterio_dias_4 }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <table style="width:100%; border: 1px solid black;">
            <tr>
                <td style="width:100%; border: 1px solid black;">
                    <p class="justificado"><strong>Observações:</strong></p>


                </td>
            </tr>
        </table>
        <table style="width: 100%">
            <tr>
                <td style="width: 50%">
                    <div style="border: 1px solid black; font-size: 10px; width: 100%">
                        <p><strong>Servidor que lavrou a Certidão</strong></p>
                        <br><br><br><!-- comment -->
                        <p style="text-align: center">Rio Branco - AC, {{ date('d/m/Y') }}</p>
                    </div>
                </td>
                <td style="width: 50%">
                    <div style="border: 1px solid black; font-size: 10px; width: 100%">
                        <p><strong>Assinatura do Dirigente do Órgão</strong></p>
                        <br><br><br><!-- comment -->
                        <p style="text-align: center">Rio Branco - AC, {{ date('d/m/Y') }}</p>
                    </div>
                </td>
            </tr>
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
