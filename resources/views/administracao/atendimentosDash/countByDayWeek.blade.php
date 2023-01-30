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
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Atendimentos Dash</a></li>
</ol>



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
});
</script>

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
});
</script>
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
