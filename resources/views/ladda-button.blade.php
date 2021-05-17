@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Ladda Button
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Ladda Button
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/ladda-button/css/ladda-themeless.min.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Left Expanded Button</h4>
                    <p>Click the following button to check the Demo. Follwoing is the Ladda Button Example</p>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="expand-left">
                        <span class="ladda-label">Submit</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Right Expanded Button</h4>
                    <p>Click the following button to check the Demo. Follwoing is the Ladda Button Example</p>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Top Expanded Button</h4>
                    <p>Click the following button to check the Demo. Follwoing is the Ladda Button Example</p>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="expand-up">
                        <span class="ladda-label">Submit</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Bottom Expanded Button</h4>
                    <p>Click the following button to check the Demo. Follwoing is the Ladda Button Example</p>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="expand-down">
                        <span class="ladda-label">Submit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card stretched_card mt-4">
                <div class="card-body">
                    <h4 class="card_title">Zoom Button</h4>
                    <p>Click the following button to check the Demo. Follwoing is the Ladda Button Example</p>

                    <button class="btn btn-primary ladda-button ladda_btn" data-style="zoom-out">
                        <span class="ladda-label">Zoom Out</span>
                    </button>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="zoom-in">
                        <span class="ladda-label">Zoom In</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card stretched_card mt-4">
                <div class="card-body">
                    <h4 class="card_title">Slide Button</h4>
                    <p>Click the following button to check the Demo. Follwoing is the Ladda Button Example</p>

                    <button class="btn btn-primary ladda-button ladda_btn" data-style="slide-left">
                        <span class="ladda-label">Slide Left</span>
                    </button>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="slide-right">
                        <span class="ladda-label">Slide Right</span>
                    </button>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="slide-up">
                        <span class="ladda-label">Slide Up</span>
                    </button>
                    <button class="btn btn-primary ladda-button ladda_btn" data-style="slide-down">
                        <span class="ladda-label">Slide Down</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card stretched_card mt-4">
                <div class="card-body">
                    <h4 class="card_title">Colored Buttons</h4>
                    <p>Click the following button to check the Demo. Follwoing is the Ladda Button Example</p>

                    <button class="btn btn-primary ladda-button ladda_btn mb-3 mr-1" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                    <button class="btn btn-secondary ladda-button ladda_btn mb-3 mr-1" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                    <button class="btn btn-danger ladda-button ladda_btn mb-3 mr-1" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                    <button class="btn btn-success ladda-button ladda_btn mb-3 mr-1" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                    <button class="btn btn-warning ladda-button ladda_btn mb-3 mr-1" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                    <button class="btn btn-dark ladda-button ladda_btn mb-3 mr-1" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                    <button class="btn btn-light ladda-button ladda_btn mb-3 mr-1" data-style="expand-right">
                        <span class="ladda-label">Submit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Ladda Button Js -->
    <script src="{{asset('assets/vendors/ladda-button/js/spin.min.js')}}"></script>
    <script src="{{asset('assets/vendors/ladda-button/js/ladda.jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendors/ladda-button/js/ladda.min.js')}}"></script>

    <!-- Ladda Button init Js -->
    <script src="{{asset('assets/js/init/ladda-button.js')}}"></script>

@endsection
