@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Pricing Page
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Pricing</h4>
                    <div id="mt_pricing">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="main_pricing_conatiner wow fadeInLeftBig" data-wow-delay="0.3">
                                        <div class="price">
                                            <h2>
                                                <span class="price_icon">
                                                    <i class="icon-wallet"></i>
                                                </span>
                                                Standard
                                            </h2>
                                            <span class="price_tag">
                                                <span class="currency">$</span>0
                                            </span>
                                            <span class="per_month">/Month</span>
                                        </div>
                                        <div class="price_listing">
                                            <ul>
                                                <li>Latin words, consectetur.</li>
                                                <li>All the Lorem Ipsum.</li>
                                                <li>It has survived not only</li>
                                                <li>Labore et dolore magna ali.</li>
                                                <li>Nor again is there anyone.</li>
                                            </ul>
                                        </div>
                                        <div class="choose_plan_btn">
                                            <a href="#" class="btn btn-primary">CHOOSE PLAN</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="main_pricing_conatiner highlight_pricing wow fadeInUpBig" data-wow-delay="0.6s">
                                        <div class="price">
                                            <h2>
                                                <span class="price_icon">
                                                    <i class="icon-briefcase"></i>
                                                </span>Bussiness
                                            </h2>
                                            <span class="price_tag">
                                                        <span class="currency">$</span>90
                                                    </span>
                                            <span class="per_month">/Month</span>
                                        </div>
                                        <div class="price_listing">
                                            <ul>
                                                <li>Latin words, consectetur.</li>
                                                <li>All the Lorem Ipsum.</li>
                                                <li>It has survived not only</li>
                                                <li>Labore et dolore magna ali.</li>
                                                <li>Nor again is there anyone.</li>
                                            </ul>
                                        </div>
                                        <div class="choose_plan_btn">
                                            <a href="#" class="btn btn-light">CHOOSE PLAN</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="main_pricing_conatiner wow fadeInRightBig" data-wow-delay="0.9s">
                                        <div class="price">
                                            <h2>
                                                <span class="price_icon">
                                                    <i class="icon-genius"></i>
                                                </span>Enterprise
                                            </h2>
                                            <span class="price_tag">
                                                        <span class="currency">$</span>120
                                                    </span>
                                            <span class="per_month">/Month</span>
                                        </div>
                                        <div class="price_listing">
                                            <ul>
                                                <li>Latin words, consectetur.</li>
                                                <li>All the Lorem Ipsum.</li>
                                                <li>It has survived not only</li>
                                                <li>Labore et dolore magna ali.</li>
                                                <li>Nor again is there anyone.</li>
                                            </ul>
                                        </div>
                                        <div class="choose_plan_btn">
                                            <a href="#" class="btn btn-primary">CHOOSE PLAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
