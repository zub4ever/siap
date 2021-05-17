@extends('layouts.app')

{{-- Page Title --}}
@section('page-title')
    Google Maps
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Google Map</h4>
                    <div id="google_map"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Google Map Custom Marker</h4>
                    <div id="rt_cutom_marker" class="google-map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Google Map Resource -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8"></script>
    <!-- Google Init Js -->
    <script src="{{asset('assets/js/google-maps.js')}}"></script>
@endsection
