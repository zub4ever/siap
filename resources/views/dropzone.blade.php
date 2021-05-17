@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Dropzone
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Dropzone
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/dropzone/css/dropzone.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="alert alert-info">
                This is just a demo dropzone. Selected files are <STRONG>not</STRONG> actually uploaded.
            </div>
        </div>
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic File Upload</h4>
                    <form action="#" class="dropzone dropzone-light" id="basic-dropzone-upload">
                        <div class="dz-default dz-message">
                            <span><i class="ti-image"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Multiple Upload</h4>
                    <form action="#" class="dropzone dropzone-primary" id="multple-file-upload">
                        <div class="dz-default dz-message">
                            <span><i class="ti-gallery"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">File Type Validation Upload</h4>
                    <form action="#" class="dropzone dropzone-success" id="file-validation">
                        <div class="dz-default dz-message">
                            <span><i class="ti-image"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Limit Files to Upload</h4>
                    <form action="#" class="dropzone dropzone-light" id="single-upload-dropzone">
                        <div class="dz-default dz-message">
                            <span><i class="ti-image"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Dropzone Js -->
    <script src="{{asset('assets/vendors/dropzone/js/dropzone.js')}}"></script>

    <!-- Dropzone init Js -->
    <script src="{{asset('assets/js/init/dropzone.js')}}"></script>
@endsection
