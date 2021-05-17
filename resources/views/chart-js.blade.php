@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Chart Js
@endsection

@section('main-content')
    <div class="row">
        <!-- Bar Chart -->
        <div class="col-xl-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Bar Chart</h4>
                    <div class="chart_container">
                        <canvas id="bar_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Line Chart -->
        <div class="col-xl-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Line Chart</h4>
                    <div class="chart_container">
                        <canvas id="line_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Doughnut Chart -->
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Doughnut Chart</h4>
                    <div class="chart_container">
                        <canvas id="doughnut_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Pie Chart</h4>
                    <div class="chart_container">
                        <canvas id="pie_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Polar Chart -->
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Polar Chart</h4>
                    <div class="chart_container">
                        <canvas id="polar_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Radar Chart -->
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Radar Chart</h4>
                    <div class="chart_container">
                        <canvas id="radar_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--Chart Js-->
    <script src="{{asset('assets/vendors/charts/charts-bundle/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/js/init/chart-js.js')}}"></script>

@endsection
