@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Accordion
@endsection

@section('main-content')
    <div class="row">
        <!-- accordion style 1 start -->
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Accordion 1</h4>
                    <div class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordian-1">Collapsible Group
                                    Item #1</a>
                            </div>
                            <div id="accordian-1" class="collapse show" data-parent="#accordion1">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion-2">Collapsible
                                    Group Item #2</a>
                            </div>
                            <div id="accordion-2" class="collapse" data-parent="#accordion1">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion-3">Collapsible
                                    Group Item #3</a>
                            </div>
                            <div id="accordion-3" class="collapse" data-parent="#accordion1">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- accordion style 2 start -->
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Accordion 2</h4>
                    <div class="accordion accordion-style-2">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion-4">Collapsible Group
                                    Item #1</a>
                            </div>
                            <div id="accordion-4" class="collapse show" data-parent="#accordion2">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion-5">Collapsible
                                    Group Item #2</a>
                            </div>
                            <div id="accordion-5" class="collapse" data-parent="#accordion2">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion6">Collapsible
                                    Group Item #3</a>
                            </div>
                            <div id="accordion6" class="collapse" data-parent="#accordion2">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- accordion style 3 start -->
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Accordion 3</h4>
                    <div id="accordion3" class="accordion accordion-style-3">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion-7">Collapsible Group
                                    Item #1</a>
                            </div>
                            <div id="accordion-7" class="collapse show" data-parent="#accordion3">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion-8">Collapsible
                                    Group Item #2</a>
                            </div>
                            <div id="accordion-8" class="collapse" data-parent="#accordion3">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion-9">Collapsible
                                    Group Item #3</a>
                            </div>
                            <div id="accordion-9" class="collapse" data-parent="#accordion3">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- accordion style 4 start -->
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Accordion 4</h4>
                    <div id="accordion4" class="accordion accordion-style-3 primary-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion-10">Collapsible Group
                                    Item #1</a>
                            </div>
                            <div id="accordion-10" class="collapse show" data-parent="#accordion4">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion-11">Collapsible
                                    Group Item #2</a>
                            </div>
                            <div id="accordion-11" class="collapse" data-parent="#accordion4">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion-12">Collapsible
                                    Group Item #3</a>
                            </div>
                            <div id="accordion-12" class="collapse" data-parent="#accordion4">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
