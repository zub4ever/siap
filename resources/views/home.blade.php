@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
    Página inicial
@endsection
{{-- This Page Css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/highcharts/css/highcharts.css') }}" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/am-charts/css/am-charts.css') }}" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/highcharts/css/highcharts.css') }}" type="text/css"
          media="all"/>
    <script src="https://code.highcharts.com/highcharts.js"></script>
@endsection
@section('main-content')

    <div class="row">
        <script src="{{asset('assets/vendors/highcharts/highcharts.js')}}"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <div class="col-sm-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <figure class="highcharts-figure">
                                <div id="containerATER">
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4">
                            <figure class="highcharts-figure">
                                <div id="containerServidores">
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4">

                            <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script src="https://code.highcharts.com/highcharts-3d.js"></script>
                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                            <script src="https://code.highcharts.com/modules/export-data.js"></script>
                            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                            <figure class="highcharts-figure">
                                <div id="containerAlmo">

                                </div>

                                <div id="sliders">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td><label for="alpha">Alpha Angle</label></td>
                                            <td><input id="alpha" type="range" min="0" max="45" value="15"> <span
                                                    id="alpha-value" class="value"></span></td>
                                        </tr>
                                        <tr>
                                            <td><label for="beta">Beta Angle</label></td>
                                            <td><input id="beta" type="range" min="-45" max="45" value="15"> <span
                                                    id="beta-value" class="value"></span></td>
                                        </tr>
                                        <tr>
                                            <td><label for="depth">Depth</label></td>
                                            <td><input id="depth" type="range" min="20" max="100" value="50"> <span
                                                    id="depth-value" class="value"></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </figure>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mb-4">
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/highcharts-3d.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <figure class="highcharts-figure">
                <div id="containerAposentadorias"></div>
                <p class="highcharts-description">

                </p>
            </figure>


        </div>
    </div>


    <script>
        Highcharts.chart('containerAposentadorias', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                }
            },
            title: {
                text: 'Requerimentos aposentadorias'
            }
            ,
            plotOptions: {
                pie: {
                    innerSize: 150,
                    depth: 60
                }
            },
            series: [{
                name: 'Quantidade',
                data: [
                    ['Requerimentos totais', 50],
                    ['Aposentadorias Voluntária', 12],
                    ['Aposentadorias Invalidez', 8],
                    ['Aposentadorias Compulsoria', 8],
                    ['Aposentadorias Especial', 8]
                ]
            }]
        });


    </script>

    <script>
        var atendimentos = <?php echo json_encode($atendimentos) ?>;
        var atendimentosAbertos = <?php echo json_encode($atendimentosAbertos) ?>;
        var atendimentosFechados = <?php echo json_encode($atendimentosFechados) ?>;
        var atendimentosAndamento = <?php echo json_encode($atendimentosAndamento) ?>;
        Highcharts.chart('containerATER', {
            chart: {
                type: 'column',
                styledMode: true
            },
            title: {
                text: 'Atendimentos Gerais'
            },
            yAxis: [{
                className: 'highcharts-color-6',
                title: {
                    text: 'Quantidade'
                }
            }],
            plotOptions: {
                column: {
                    borderRadius: 3
                }
            },
            series: [{
                name: 'Geral',
                data: [atendimentos]
            }, {
                name: 'Abertos',
                data: [atendimentosAbertos]
            }, {
                name: 'Fechados',
                data: [atendimentosFechados]
            }
                , {
                    name: 'Em Andamento',
                    data: [atendimentosAndamento]
                }
            ]
        });
    </script>

    <script>
        var serve = <?php echo json_encode($serve) ?>;
        var serveAp = <?php echo json_encode($serveAp) ?>;
        var servePs = <?php echo json_encode($servePs) ?>;

        Highcharts.chart('containerServidores', {
            chart: {
                type: 'column',
                styledMode: true
            },
            title: {
                text: 'Aposentados/Pensionistas'
            },
            yAxis: [{
                className: 'highcharts-color-3',
                title: {
                    text: 'Quantidade'
                }
            }],
            plotOptions: {
                column: {
                    borderRadius: 5
                }
            },
            series: [{
                name: 'Quantidade Geral',
                data: [serve]
            }, {
                name: 'Aposentados',
                data: [serveAp]
            }, {
                name: 'Pensionistas',
                data: [servePs]
            }
            ]
        });
    </script>
    <script>
        // Set up the chart
        var itensTotal = <?php echo json_encode($itensTotal) ?>;
        var itensEquipamento = <?php echo json_encode($itensEquipamento) ?>;
        var itensMobiliario = <?php echo json_encode($itensMobiliario) ?>;
        var itensInformatica = <?php echo json_encode($itensInformatica) ?>;
        const chart = new Highcharts.Chart({
            chart: {
                renderTo: 'containerAlmo',
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    depth: 50,
                    viewDistance: 25
                }
            },
            xAxis: {
                categories: ['Total', 'Equipamento', 'Mobiliário', 'Informática']
            },
            yAxis: {
                title: {
                    enabled: false
                }
            },
            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: 'Quantidade: {point.y}'
            },
            title: {
                text: 'Patrimônio RBPREV',
                align: 'left'
            }
            ,
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            series: [{
                data: [itensTotal, itensEquipamento, itensMobiliario, itensInformatica],
                colorByPoint: true
            }]
        });

        function showValues() {
            document.getElementById('alpha-value').innerHTML = chart.options.chart.options3d.alpha;
            document.getElementById('beta-value').innerHTML = chart.options.chart.options3d.beta;
            document.getElementById('depth-value').innerHTML = chart.options.chart.options3d.depth;
        }

        // Activate the sliders
        document.querySelectorAll('#sliders input').forEach(input => input.addEventListener('input', e => {
            chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
            showValues();
            chart.redraw(false);
        }));

        showValues();
    </script>

@endsection
@section('js')

@endsection
