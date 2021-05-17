@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    C3 Chart Js
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               C3 Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/charts/c3charts/c3.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xl-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Area Chart</h4>
                    <div id="c3chart_area"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Spline Chart</h4>
                    <div id="c3chart_spline"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Zoom Chart</h4>
                    <div id="c3chart_zoom"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Scatter Plot</h4>
                    <div id="c3chart_scatter"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Stacked Bar</h4>
                    <div id="c3chart_stacked"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Combination Chart</h4>
                    <div id="c3chart_combine"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Pie Chart</h4>
                    <div id="c3chart_pie"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Donut Chart</h4>
                    <div id="c3chart_donut"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Script
    *===========================-->
    <script src="{{asset('assets/vendors/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('assets/vendors/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('assets/js/init/C3chart-js.js')}}"></script>
@endsection
