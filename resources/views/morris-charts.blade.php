@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Morris Js
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Morris Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/charts/morris-bundle/morris.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xl-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Area Chart</h4>
                    <div id="morris_area"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Line Chart</h4>
                    <div id="morris_line"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Bar Chart</h4>
                    <div id="morris_bar"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Stacked Chart</h4>
                    <div id="morris_stacked"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Updating data</h4>
                    <div id="morris_udateing"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Donut Chart</h4>
                    <div id="morris_donut"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <script src="{{asset('assets/vendors/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('assets/vendors/charts/morris-bundle/morris.js')}}"></script>
    <script src="{{asset('assets/js/init/morris-js.js')}}"></script>
@endsection
