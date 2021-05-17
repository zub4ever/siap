@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Text Editors
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Summernot
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/summernote/dist/summernote-bs4.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Ck Editor</h4>
                    <textarea name="editor1" class="ck-editor">Enter Text to Edit</textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Tinymce Editor</h4>
                    <textarea class="tiny-editor">Enter Text to Edit</textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Summernote Editor</h4>
                    <textarea class="summer_note_editor">Enter Text to Edit</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Ck Editor Js -->
    <script src="{{asset('assets/vendors/ck-editor/js/ckeditor.js')}}"></script>

    <!-- Tinymce Editor Js -->
    <script src="{{asset('assets/vendors/tinymce/js/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendors/tinymce/js/themes/modern/theme.js')}}"></script>

    <!-- Summernote Editor Js -->
    <script src="{{asset('assets/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>

    <!-- Editor init Js -->
    <script src="{{asset('assets/js/init/editors.js')}}"></script>
@endsection
