@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Css Loaders
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
        <div class="col-xl-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Ring Loader</h4>
                    <div class="ring_loader primary_ring_loader">
                        <div></div><div></div><div></div><div></div>
                    </div>
                    <div class="ring_loader secondary_ring_loader">
                        <div></div><div></div><div></div><div></div>
                    </div>
                    <div class="ring_loader warning_ring_loader">
                        <div></div><div></div><div></div><div></div>
                    </div>
                    <div class="ring_loader danger_ring_loader">
                        <div></div><div></div><div></div><div></div>
                    </div>
                    <div class="ring_loader success_ring_loader">
                        <div></div><div></div><div></div><div></div>
                    </div>
                    <div class="ring_loader dark_ring_loader">
                        <div></div><div></div><div></div><div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Default Loader</h4>
                    <div class="default_loader">
                        <div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div>
                    </div>
                    <div class="default_loader">
                        <div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div><div class="bg-secondary"></div>
                    </div>
                    <div class="default_loader">
                        <div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div><div class="bg-danger"></div>
                    </div>
                    <div class="default_loader">
                        <div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div><div class="bg-success"></div>
                    </div>
                    <div class="default_loader">
                        <div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div><div class="bg-warning"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Circle Loader</h4>
                    <div class="loader_dual primary_dual_loader mr-2"></div>
                    <div class="loader_dual secondary_dual_loader mr-2"></div>
                    <div class="loader_dual warning_dual_loader mr-2"></div>
                    <div class="loader_dual danger_dual_loader mr-2"></div>
                    <div class="loader_dual success_dual_loader mr-2"></div>
                    <div class="loader_dual dark_dual_loader mr-2"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Roller Loader</h4>
                    <div class="roller_loader primary_roller_loader">
                        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                    </div>
                    <div class="roller_loader secondary_roller_loader">
                        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                    </div>
                    <div class="roller_loader danger_roller_loader">
                        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                    </div>
                    <div class="roller_loader warning_roller_loader">
                        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                    </div>
                    <div class="roller_loader dark_roller_loader">
                        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Ripple Loader</h4>
                    <div class="loader_rippler primary_ripple_loader"><div></div><div></div></div>
                    <div class="loader_rippler secondary_ripple_loader"><div></div><div></div></div>
                    <div class="loader_rippler danger_ripple_loader"><div></div><div></div></div>
                    <div class="loader_rippler warning_ripple_loader"><div></div><div></div></div>
                    <div class="loader_rippler success_ripple_loader"><div></div><div></div></div>
                    <div class="loader_rippler dark_ripple_loader"><div></div><div></div></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Spinner Loader</h4>
                    <div class="spinner_loader primary_spinner_loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <div class="spinner_loader secondary_spinner_loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <div class="spinner_loader danger_spinner_loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <div class="spinner_loader warning_spinner_loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <div class="spinner_loader success_spinner_loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <div class="spinner_loader dark_spinner_loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
        </div>
    </div>
@endsection
