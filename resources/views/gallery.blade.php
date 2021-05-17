@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Gallery
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Fancy Box
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card_title">
                        Gallery
                    </h3>
                    <!--=========================*
                              Portfolio
                    *===========================-->
                    <div id="mt_portfolio" class="gallery-section gallery-page">
                        <div class="container">
                            <div class="row portfolio_row grid-masonry">
                                <div class="isotopeContainer">
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw1.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw1.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector webdevelopment grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw2.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw2.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw3.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw3.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw4.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw4.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw5.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw5.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw6.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw6.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector webdevelopment grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw7.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw7.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector webdevelopment grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw8.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw8.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw9.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw9.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- Portfolio Item -->
                                    <div class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                        <figure class="effect-chico">
                                            <img src="{{asset('assets/images/portfolio/bw10.jpg')}}" alt="Portfolio"/>
                                            <figcaption>
                                                <h3>
                                                    <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                    <span>
                                                                <a href="{{asset('assets/images/portfolio/bw10.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                </h3>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <!--=========================*
                              End Portfolio
                    *===========================-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/init/masonary.js')}}"></script>
    <!-- Fancy Box Js -->
    <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('assets/js/init/fancy.js')}}"></script>
@endsection
