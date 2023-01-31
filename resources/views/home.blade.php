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
                        <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                        <figure class="highcharts-figure">
                            <div id="containerAlmo">
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
            } ],
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
    Highcharts.chart('containerAlmo', {
        chart: {
            type: 'variablepie'
        },
        title: {
            text: 'Itens de Almoxarifado.'
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                    'Itens Totais: <b>{point.y}</b><br/>' +
                    'Item descrito: <b>{point.z}</b><br/>'
        },
        series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                name: 'countries',
                data: [{
                        name: 'Informática',
                        y: 505370,
                        z: 92.9
                    }, {
                        name: 'Mobiliário',
                        y: 78867,
                        z: 137.5
                    }, {
                        name: 'Material',
                        y: 41277,
                        z: 214.5
                    }, {
                        name: 'Itens totais',
                        y: 357022,
                        z: 235.6
                    }]
            }]
    });
</script>


@endsection
@section('js')

@endsection
