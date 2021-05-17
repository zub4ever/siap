@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Carousels
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Simple Slider</div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide3.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Slider with Controls</h4>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide3.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Slider with Indicators</h4>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/images/slider/slide3.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Slider with Caption</h4>

                    <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaption" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaption" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaption" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/images/slider/slide1.jpg')}}" alt="Slider Image">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-light">Caption Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/images/slider/slide2.jpg')}}" alt="Slider Image">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-light">Caption Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/images/slider/slide3.jpg')}}" alt="Slider Image">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-light">Caption Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
