@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Toastr
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Toastr Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/toastr/css/toastr.min.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Success Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in from the top right of the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-success mt-2 toastr_success">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Error Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in from the top right of the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-danger mt-2 toastr_error">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Warning Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in from the top right of the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-warning mt-2 toastr_warning">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Info Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in from the top right of the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-info mt-2 toastr_info">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Top Position Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in from the top of the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-primary mt-2 mr-2 toastr_top_left_btn">Top Left Demo</button>
                    <button type="button" class="btn btn-primary mt-2 mr-2 toastr_top_center_btn">Top Center Demo</button>
                    <button type="button" class="btn btn-primary mt-2 mr-2 toastr_top_right_btn">Top Right Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Bottom Position Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in from the bottom of the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-primary mt-2 mr-1 toastr_bottom_left_btn">Bottom Left Demo</button>
                    <button type="button" class="btn btn-primary mt-2 mr-1 toastr_bottom_center_btn">Bottom Center Demo</button>
                    <button type="button" class="btn btn-primary mt-2 mr-1 toastr_bottom_right_btn">Bottom Right Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Close Button Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-primary mt-2 mr-1 toast_close_btn">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Toastr with Progress Bar</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-primary mt-2 mr-1 toast_progress_btn">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Toastr only with Text</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-primary mt-2 mr-1 toast_notification_btn">Launch Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Toastr with Clear Button</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-primary mt-2 mr-1 toast_clear_btn">Launch Demo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Show and Remove Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 toast_show_btn">Show Toastr</button>
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 toast_remove_btn">Remove Demo</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Show and Clear Toastr</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 toast_show_btn">Launch Demo</button>
                    <button type="button" class="btn btn-outline-primary mt-2 mr-1 toast_clear_toastr_btn">Clear Toastr</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Toastr with Fade Effect</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-success mt-2 mr-1 toast_fade_btn">Fade Toastr</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Toastr with Slide Effect</h4>
                    <p>Toggle a working demo by clicking the button below. It will fade in to the page.</p>
                    <!-- Button trigger -->
                    <button type="button" class="btn btn-outline-danger mt-2 mr-1 toast_slide_btn">Slide Demo</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Toastr Js -->
    <script src="{{asset('assets/vendors/toastr/js/toastr.min.js')}}"></script>
    <!-- Toastr Init -->
    <script src="{{asset('assets/js/init/toastr.js')}}"></script>
@endsection
