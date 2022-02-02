@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Página inicial
@endsection
{{-- This Page Css --}}
@section('css')
<!--=========================*
               AM Chart
    *===========================-->
<link rel="stylesheet" href="{{ asset('assets/vendors/am-charts/css/am-charts.css') }}" type="text/css" media="all" />
<!--=========================*
               Morris Css
    *===========================-->
<link rel="stylesheet" href="{{ asset('assets/vendors/charts/morris-bundle/morris.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--=========================*
               Datatable
    *===========================-->
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css"
      href="{{ asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">
@endsection
@section('main-content')


<div class="row">
       <div class="col-lg-4">  
       <div id="container"></div>





    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var atendimentos =  <?php echo json_encode($atendimentos) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'New User Records - 2021'
        },
        subtitle: {
            text: 'Source: websolutionstuff.com'
        },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Números de atendimentos'
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: atendimentos
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>


@endsection
@section('js')
<!-- start amchart js -->
<script src="{{asset('assets/vendors/am-charts/js/ammap.js')}}"></script>
<script src="{{asset('assets/vendors/am-charts/js/worldLow.js')}}"></script>
<script src="{{asset('assets/vendors/am-charts/js/continentsLow.js')}}"></script>
<script src="{{asset('assets/vendors/am-charts/js/light.js')}}"></script>
<!--Morris Chart-->
<script src="{{asset('assets/vendors/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('assets/vendors/charts/morris-bundle/morris.js')}}"></script>
<!--Chart Js-->
<script src="{{asset('assets/vendors/charts/charts-bundle/Chart.bundle.js')}}"></script>
<!-- C3 Chart -->
<script src="{{asset('assets/vendors/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('assets/vendors/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<!--Home Script-->
@endsection
