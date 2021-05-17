@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Sweet Alert
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Sweet Alert Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/sweetalert2/css/sweetalert2.min.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Success Sweet Alert</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-success mt-2 sweet_success_btn">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Error Sweet Alert</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-danger mt-2 sweet_danger_btn">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Warning Sweet Alert</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-warning mt-2 sweet_warning_btn">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Info Sweet Alert</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-info mt-2 sweet_info_btn">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic Sweet Alert</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-2 sweet_basic_btn">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sweet Alert with Title</h4>
                    <p>Toggle a working demo by clicking the button below. </p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 alert_title">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sweet Alert with Timer</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 sweet_alert_timer">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sweet Alert with Confirmation</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 sweet_alert_confirm">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sweet Alert with RTL Text</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 alert_rtl">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sweet Alert with Ajax Request</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 alert_ajax">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sweet Alert with Questionnaire</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 alert_question">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sweet Alert with Custom Image</h4>
                    <p>Toggle a working demo by clicking the button below.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 alert_image">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Sweet Alert Js -->
    <script src="{{asset('assets/vendors/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
    <!-- Sweet Alert Init -->
    <script src="{{asset('assets/js/init/sweet-alert.js')}}"></script>
@endsection
