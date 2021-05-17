@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    App Tour
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Hopscotch
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/hop-scotch/css/hopscotch.min.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Application Tour</h4>
                    <p>
                        Hopscotch is a framework to make it easy for developers to add product tours to their pages. Hopscotch accepts a tour JSON object as input and provides an API for the developer to control rendering the tour display and managing the tour progress.
                    </p>
                    <p>To learn more about Hopscotch and the API, check out <a href="http://linkedin.github.io/hopscotch/">linkedin.github.io/hopscotch</a></p>
                    <button id="startTourBtn" class="btn btn-primary">Start Tour</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Hopscotch Js -->
    <script src="{{asset('assets/vendors/hop-scotch/js/hopscotch.min.js')}}"></script>

    <!-- Hopscotch init Js -->
    <script src="{{asset('assets/js/init/hop-scotch.js')}}"></script>
@endsection
