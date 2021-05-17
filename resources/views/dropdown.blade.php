@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Dropdown
@endsection

@section('main-content')
    <div class="row">
        <!-- Single Dropdowns -->
        <div class="col-xl-4 col-ml-6 col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Single Button Dropdowns</h4>
                    <div class="drop-buttons">
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button"  data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Dropdowns -->
        <!-- Single Outline Dropdowns -->
        <div class="col-xl-4 col-ml-6 col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Outline Dropdowns</h4>
                    <div class="drop-buttons">
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn dropdown-toggle btn-outline-primary" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn dropdown-toggle btn-outline-secondary" type="button"  data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn dropdown-toggle btn-outline-success" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn dropdown-toggle btn-outline-danger" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn dropdown-toggle btn-outline-light" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn dropdown-toggle btn-outline-dark" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Outline Dropdowns -->
    </div>
    <div class="row">
        <!-- Split Dropdowns -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Split Button</h4>
                    <div class="drop-buttons">
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-primary">Dropdown</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-secondary">Dropdown</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-success">Dropdown</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-danger">Dropdown</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-warning">Dropdown</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-info">Dropdown</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-light">Dropdown</button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-1 btn-split">
                            <button type="button" class="btn btn-dark">Dropdown</button>
                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Split Dropdowns -->
        <!-- Button Dropdowns Up -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Button Dropdowns Up</h4>
                    <div class="drop-buttons">
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-primary">Dropdown</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-secondary">Dropdown</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-success">Dropdown</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-danger">Dropdown</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-warning">Dropdown</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-info">Dropdown</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-light">Dropdown</button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-dark">Dropdown</button>
                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Button Dropdowns Up -->
    </div>
    <div class="row">
        <!-- Dropdowns Flat -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Dropdowns Flat</h4>
                    <div class="drop-buttons">
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-flat btn-primary dropdown-toggle" type="button" id="dropdownMenuButton33" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton33">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-flat btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-flat btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-flat btn-danger dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-flat btn-warning dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown float-left mr-4 mb-3">
                            <button class="btn btn-flat btn-dark dropdown-toggle" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Dropdowns Flat -->
        <!-- Split Button Dropdowns Flat -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Split Button Dropdowns Flat</h4>
                    <div class="drop-buttons">
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-primary">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-secondary">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-success">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-danger">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-warning">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-info">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-light">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split mb-3 mr-1">
                            <button type="button" class="btn btn-flat btn-dark">Dropdown</button>
                            <button type="button" class="btn btn-flat btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Split Button Dropdowns Flat -->
    </div>
    <div class="row">
        <!-- Button Dropdowns Right -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Button Dropdowns Right</h4>
                    <div class="drop-buttons">
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-primary">Dropdown</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-secondary">Dropdown</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-success">Dropdown</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-danger">Dropdown</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-warning">Dropdown</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-info">Dropdown</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-light">Dropdown</button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropright mr-1 mb-3">
                            <button type="button" class="btn btn-dark">Dropdown</button>
                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Button Dropdowns Right -->
        <!-- Button Dropdowns Left -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Button Dropdowns Left</h4>
                    <div class="drop-buttons">
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-primary">Dropdown</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-secondary">Dropdown</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-success">Dropdown</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-danger">Dropdown</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-warning">Dropdown</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-info">Dropdown</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-light">Dropdown</button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group btn-split dropleft mb-3 mr-1">
                            <button type="button" class="btn btn-dark">Dropdown</button>
                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Button Dropdowns Left -->
    </div>
    <div class="row">
        <!-- Single Button Dropdowns Rounded -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Single Button Dropdowns Rounded</h4>
                    <div class="drop-buttons">
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-danger dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-warning dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-light dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-rounded float-left mr-4 mb-3 btn-dark dropdown-toggle" type="button" data-toggle="dropdown">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Button Dropdowns Rounded -->
        <!-- Split Button Dropdowns rounded start -->
        <div class="col-xl-4 col-ml-6 col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Split Button Dropdowns rounded</h4>
                    <div class="drop-buttons">
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-primary">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-secondary">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-success">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-danger">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-warning">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-info">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-light">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-3 mr-4 btn-split">
                            <button type="button" class="btn btn-rounded btn-dark">Dropdown</button>
                            <button type="button" class="btn btn-rounded btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Split Button Dropdowns rounded -->
    </div>
@endsection
