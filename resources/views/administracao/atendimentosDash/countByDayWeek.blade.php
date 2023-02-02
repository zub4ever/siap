@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Dash Atendimentos
@endsection
@section('css')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/jquery.dataTables.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/responsive.bootstrap.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/responsive.jqueryui.min.css")}}">
<!-- Sweet Alert Css -->
<link rel="stylesheet" href="{{asset("assets/vendors/sweetalert2/css/sweetalert2.min.css")}}">
<link rel="stylesheet" href="{{asset("css/admin.css")}}">
@endsection
@section('main-content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
              <div class="pull-right">
                <a class="ti-printer mr-1 btn btn-danger" href="{{route('atendimentos.pdfGeralRecadastramento')}}" target="_blank">Imprimir relatório Recadastramento</a>               
            </div>    
             <div class="pull-right">
                <a class="ti-printer mr-1 btn btn-danger" href="{{route('atendimentos.pdfGeral')}}" target="_blank">Imprimir relatório</a>               
            </div>               
            </div>           
        </div>       
    </div>  
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<div class="row">
    <div class="col-4 mb-4">
        <canvas id="barChart"></canvas>
    </div>
    <div class="col-4 mb-4">
        <canvas id="pieCharts"></canvas>
    </div>
    <div class="col-4 mb-4">
        <canvas id="pieChart"></canvas>
    </div>
</div>

<!--
<div class="row"> 
    <div class="col-12 mb-4">
        <table>
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
        </table>


    </div>
</div>
-->
<style>
#semanaTabela th {
  background-color: #41BCFF;
}


</style>




<!--
<table id="semanaTabela">
    <thead>
        <tr>
            <th style="background-color: #3B70A2; border: 1px solid black;">Dia da Semana</th>
            @foreach ($typeOfAttendance as $typeName)
            <th style="background-color: #3B70A2; border: 1px solid black;">{{ $typeName }}</th>
            @endforeach

        </tr>
    </thead>
    <tbody>
        @foreach ($data as $dayName => $attendanceData)
        <tr>
            <th style="border: 1px solid black;">{{ $dayName }}</th>
            @foreach ($typeOfAttendance as $typeName)
            <td style="border: 1px solid black;">{{ $attendanceData[$typeName] ?? 0 }}</td>
            @endforeach
        </tr>

        @endforeach
    </tbody>
</table> -->
Total de Registros na Semana: {{ array_sum($results) }}
<br>
<br>
<br>
<!-- Inicio -->


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="containerG" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">

var data = <?php echo json_encode($data); ?>;
var days = <?php echo json_encode(array_values($dayOfWeek)); ?>;
var attendanceTypes = <?php echo json_encode(array_values($typeOfAttendance)); ?>;

var chartData = [];

attendanceTypes.forEach(function (attendanceType) {
    var dataArray = [];

    days.forEach(function (day) {
        dataArray.push(data[day][attendanceType] || 0);
    });

    chartData.push({
        name: attendanceType,
        data: dataArray
    });
});

Highcharts.chart('containerG', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Atendimentos por dia da semana'
    },
    xAxis: {
        categories: days,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Quantidade de atendimentos'
        }
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: chartData
});
</script>







<!-- FIm -->

<!-- inicio Grafico evolutivo -->
<script src="https://code.highcharts.com/highcharts.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script>
var dados = {!! json_encode($dados->toArray()) !!};
var series = [];
var categorias = [];
var tipos = [
    {id: 1, nome: 'Consultar pagamento'},
    {id: 2, nome: 'Consultar consignado'},
    {id: 3, nome: 'Imprimir Contracheque'},
    {id: 4, nome: 'Tirar dúvidas'},
    {id: 5, nome: 'Solicitar alteração cadastral'},
    {id: 6, nome: 'Abertura de Processo de aposentadoria'},
    {id: 7, nome: 'Abertura de Processo de Pensão'},
    {id: 8, nome: 'Abertura de processo para Emissão de CTC'},
    {id: 9, nome: 'Recadastramento'},
    {id: 10, nome: 'Contracheque'},
    {id: 11, nome: 'Abertura de Processo de Imposto de Renda'},
    {id: 12, nome: 'Abertura de processo de 13º Salário'},
    {id: 13, nome: 'Cédula C'},
];

for (var i = 0; i < tipos.length; i++) {
    var serie = {
        name: tipos[i].nome,
        data: []
    };

    for (var j = 0; j < dados.length; j++) {
        if (dados[j].atendimento_assunto_id == tipos[i].id) {
            serie.data.push(dados[j].quantidade);
            if (categorias.indexOf(dados[j].mes) == -1) {
                categorias.push(dados[j].mes);
            }
        }
    }

    series.push(serie);
}

Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Evolução dos Atendimentos'
    },
    xAxis: {
        categories: categorias
    },
    yAxis: {
        title: {
            text: 'Quantidade de Atendimentos'
        }
    },
    series: series
});
</script>

<script>
var ctx = document.getElementById('pieChart').getContext('2d');
var data = {
labels: [
        @foreach ($results as $weekday => $count)
        '{{ $weekday }}',
        @endforeach
        ],
        datasets: [{
        data: [
                @foreach ($results as $count)
        {{ $count }},
                @endforeach
        ],
                backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
        }]
};
var options = {
legend: {
display: true,
        position: 'bottom'
        }
};
var chart = new Chart(ctx, {
type: 'pie',
        data: data,
        options: options
});</script>

<script>
    var ctx = document.getElementById('pieCharts').getContext('2d');
    var data = {
    labels: [
            @foreach ($results as $weekday => $count)
            '{{ $weekday }}',
            @endforeach
    ],
            datasets: [{
            data: [
                    @foreach ($results as $count)
            {{ $count }},
                    @endforeach
            ],
                    backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
            }]
    };
    var options = {
    legend: {
    position: 'right'
    }
    };
    var chart = new Chart(ctx, {
    type: 'pie',
            data: data,
            options: options
    });</script>


<script>
    var ctx = document.getElementById('barChart').getContext('2d');
    var data = {
    labels: [
            @foreach ($results as $weekday => $count)
            '{{ $weekday }}',
            @endforeach
    ],
            datasets: [{
            label: 'Contagem de Registros',
                    data: [
                            @foreach ($results as $count)
                    {{ $count }},
                            @endforeach
                    ],
                    backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
            }]
    };
    var options = {
    scales: {
    xAxes: [{
    ticks: {
    beginAtZero: true
    }
    }]
    },
            legend: {
            display: false
            }
    };
    var chart = new Chart(ctx, {
    type: 'horizontalBar',
            data: data,
            options: options
    });</script>














@endsection
@section('js')
<!-- Data Table js -->
<script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/responsive.bootstrap.min.js")}}"></script>
<!-- Data table Init -->
<script src="{{asset("assets/js/init/data-table.js")}}"></script>
<!-- Sweet Alert Js -->
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
<script src="{{asset('js/delete.js')}}"></script>

@endsection


