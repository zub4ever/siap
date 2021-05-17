@extends('layouts.app')

{{-- Page Title --}}
@section('page-title')
    Grids
@endsection

@section('main-content')
    <div class="row">
        <!-- Bootstrap Grid -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Bootstrap Grid System</div>
                    <!-- Start 1 column grid system -->
                    <div class="row">
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-3 col-sm-6">
                            <div class="grid-col">.col-1</div>
                        </div>
                    </div>
                    <!-- Start 2 column grid system -->
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="grid-col">.col-2</div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="grid-col">.col-2</div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="grid-col">.col-2</div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="grid-col">.col-2</div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="grid-col">.col-2</div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="grid-col">.col-2</div>
                        </div>
                    </div>
                    <!-- Start 3 column grid system -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="grid-col">.col-3</div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="grid-col">.col-3</div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="grid-col">.col-3</div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="grid-col">.col-3</div>
                        </div>
                    </div>
                    <!-- Start 4 column grid system -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="grid-col">.col-4</div>
                        </div>
                        <div class="col-md-4">
                            <div class="grid-col">.col-4</div>
                        </div>
                        <div class="col-md-4">
                            <div class="grid-col">.col-4</div>
                        </div>
                    </div>
                    <!-- Start 6 column grid system -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="grid-col">.col-6</div>
                        </div>
                        <div class="col-md-6">
                            <div class="grid-col">.col-6</div>
                        </div>
                    </div>
                    <!-- Start 12 column grid system -->
                    <div class="row">
                        <div class="col-12">
                            <div class="grid-col">.col-12</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap Grid -->
        <!-- No gutters -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">No gutters</div>
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            <div class="grid-col">
                                .col-sm-5
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="grid-col">
                                .col-sm-7
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="grid-col">
                                .col-sm-3
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="grid-col">
                                .col-sm-3
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="grid-col">
                                .col-sm-3
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="grid-col">
                                .col-sm-3
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="grid-col">
                                .col-sm-4
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="grid-col">
                                .col-sm-8
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- No gutters -->
        <!-- Variable width content -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Variable width content</div>
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-2">
                            <div class="grid-col">
                                1 of 3
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="grid-col">
                                Variable width content
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <div class="grid-col">
                                3 of 3
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="grid-col">
                                1 of 3
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="grid-col">
                                Variable width content
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <div class="grid-col">
                                3 of 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Variable width content -->
        <!-- Order classes -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Order classes</div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="grid-col">
                                First, but unordered
                            </div>
                        </div>
                        <div class="col-sm-4 order-12">
                            <div class="grid-col">
                                Second, but last
                            </div>
                        </div>
                        <div class="col-sm-4 order-1">
                            <div class="grid-col">
                                Third, but first
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Order classes -->
    </div>
@endsection
