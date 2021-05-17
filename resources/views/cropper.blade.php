@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Image Cropper
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Cropper
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/cropper/css/cropper.min.css')}}">
@endsection

@section('main-content')
    <div class="stretched_card">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Image Cropper</h4>
                <div class="row">
                    <div class="col-md-9">
                        <div class="img-container o-hidden">
                            <img class="cropper-main-img img-fluid cropper-hidden" src="{{asset('assets/images/blog-listing/03.jpg')}}" alt="Picture">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="docs-preview clearfix">
                                <div class="img-preview preview-lg img-fluid"></div>
                                <div class="img-preview preview-md img-fluid"></div>
                                <div class="img-preview preview-sm img-fluid"></div>
                                <div class="img-preview preview-xs img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Cropper Js -->
    <script src="{{asset('assets/vendors/cropper/js/cropper.min.js')}}"></script>
    <!-- Cropper Init Js -->
    <script src="{{asset('assets/js/init/cropper.js')}}"></script>
@endsection
