@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Js Grid Table
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Js Grid
    *===========================-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/js-grid/css/jsgrid.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/js-grid/css/jsgrid-theme.min.css')}}"/>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Js Grid Basic Table</h4>
                    <div id="js-grid-basic"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Js Grid Static Table</h4>
                    <div id="js-grid-static"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Js Grid Sortable table</h4>
                    <div class="sort-panel">
                                <span class="d-flex justify-content-start mb-3">
                                  Sorting Field:
                                  <select id="sortingField" class="form-control form-control-sm mr-2 ml-2 w-25">
                                      <option>Name</option>
                                      <option>Age</option>
                                      <option>Address</option>
                                      <option>Country</option>
                                      <option>Married</option>
                                  </select>
                                  <button type="button" id="sort" class="btn btn-primary btn-sm">Sort</button>
                                </span>
                    </div>
                    <div id="js-grid-sortable"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- JS Grid js -->
    <script src="{{asset('assets/vendors/js-grid/js/jsgrid.min.js')}}"></script>

    <!-- This Page Js -->
    <script src="{{asset('assets/js/init/js-grid.js')}}"></script>
    <script src="{{asset('assets/js/init/jsGrid-db.js')}}"></script>

@endsection
