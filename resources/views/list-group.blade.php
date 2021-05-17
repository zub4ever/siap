@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    List Group
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
        <!-- Basic List Group -->
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic List Group</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Basic List Group -->
        <!-- Active Items -->
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Active Items</h4>
                    <ul class="list-group">
                        <li class="list-group-item active">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Active Items -->
    </div>
    <div class="row">
        <!-- Links And Buttons -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Links And Buttons</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Links And Buttons -->
        <!-- Disabled Items -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Disabled Items</h4>
                    <ul class="list-group">
                        <li class="list-group-item disabled">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Disabled Items -->
    </div>
    <div class="row">
        <!-- Buttons Items -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Buttons Items</h4>
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active">
                            Cras justo odio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                        <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" disabled="">Vestibulum at eros</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buttons Items -->
        <!-- Flush -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Flush</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Flush -->
    </div>
    <div class="row">
        <!-- Contextual Classes -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Contextual Classes</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                        <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                        <li class="list-group-item list-group-item-secondary">This is a secondary list group item
                        </li>
                        <li class="list-group-item list-group-item-success">This is a success list group item</li>
                        <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                        <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                        <li class="list-group-item list-group-item-info">This is a info list group item</li>
                        <li class="list-group-item list-group-item-light">This is a light list group item</li>
                        <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Contextual Classes -->
        <!-- Contextual Classes Links -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Contextual Classes Links</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-primary">This
                            is a primary list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This
                            is a secondary list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">This
                            is a success list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This
                            is a danger list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This
                            is a warning list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-info">This
                            is a info list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light">This
                            is a light list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This
                            is a dark list group item</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contextual Classes Links -->
    </div>
    <div class="row">
        <!-- With Badges -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">With Badges</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cras justo odio
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dapibus ac facilisis in
                            <span class="badge badge-secondary badge-pill">24</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-success badge-pill">16</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cras justo odio
                            <span class="badge badge-danger badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dapibus ac facilisis in
                            <span class="badge badge-warning badge-pill">21</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-dark badge-pill">18</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-light badge-pill">14</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- With Badges -->
        <!-- Custom Content -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Custom Content</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom Content -->
    </div>
@endsection
