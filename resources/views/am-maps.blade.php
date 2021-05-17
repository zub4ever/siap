@extends('layouts.app')

{{-- Page Title --}}
@section('page-title')
    AM Chart Maps
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               AM Chart
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/am-charts/css/am-charts.css')}}" type="text/css" media="all" />
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xl-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Animations along lines</h4>
                    <div id="animated_chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Map with curved lines</h4>
                    <div id="curved_chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Zooming to Countries Map</h4>
                    <div id="zoom_country_chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Map With Patterns</h4>
                    <div id="pattern_map"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Capitals map</h4>
                    <div id="capitals_map"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Map with dynamic Pie charts</h4>
                    <div id="pie_map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- start amchart js -->
    <script src="{{asset('assets/vendors/am-charts/js/ammap.js')}}"></script>
    <script src="{{asset('assets/vendors/am-charts/js/worldLow.js')}}"></script>
    <script src="{{asset('assets/vendors/am-charts/js/continentsLow.js')}}"></script>
    <script src="{{asset('assets/vendors/am-charts/js/light.js')}}"></script>
    <!-- maps js -->
    <script src="{{asset('assets/js/am-maps.js')}}"></script>
@endsection
