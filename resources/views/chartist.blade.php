@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Chartist Js
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Chartist Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/charts/chartist-bundle/chartist.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xl-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Simple Line Chart</h4>
                    <div class="ct-chart-line ct-golden-section"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Add Peak Circles Using The Draw Events</h4>
                    <div class="ct-chart-events ct-golden-section"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Whole Numbers</h4>
                    <div class="ct-chart-wnumbers ct-golden-section"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Line Scatter Diagram With Responsive Settings</h4>
                    <div class="ct-chart-scatter ct-golden-section"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Line Chart With Area</h4>
                    <div class="ct-chart-area ct-golden-section"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Bi-polar Line Chart With Area Only</h4>
                    <div class="ct-chart-polar ct-golden-section"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Stacked Bar Chart</h4>
                    <div class="ct-chart-scatter-bar ct-golden-section"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Multi-line Labels</h4>
                    <div class="ct-chart-bipolar ct-golden-section"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Script
    *===========================-->
    <script src="{{asset('assets/vendors/charts/chartist-bundle/chartist.min.js')}}"></script>
    <script src="{{asset('assets/js/init/chartist.js')}}"></script>
@endsection
