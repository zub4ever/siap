@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Buttons
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">General Buttons</h4>
                    <button type="button" class="btn btn-primary btn-fixed-w mb-3">Primary</button>
                    <button type="button" class="btn btn-secondary btn-fixed-w mb-3">Secondary</button>
                    <button type="button" class="btn btn-success btn-fixed-w mb-3">Success</button>
                    <button type="button" class="btn btn-danger btn-fixed-w mb-3">Danger</button>
                    <button type="button" class="btn btn-warning btn-fixed-w mb-3">Warning</button>
                    <button type="button" class="btn btn-info btn-fixed-w mb-3">Info</button>
                    <button type="button" class="btn btn-dark btn-fixed-w mb-3">Dark</button>
                    <button type="button" class="btn btn-light btn-fixed-w mb-3">Light</button>
                </div>
            </div>
        </div>
        <!-- Falt button -->
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Falt Buttons</h4>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-primary mb-3">Primary</button>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-secondary mb-3">Secondary</button>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-success mb-3">Success</button>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-danger mb-3">Danger</button>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-warning mb-3">Warning</button>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-info mb-3">Info</button>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-dark mb-3">Dark</button>
                    <button type="button" class="btn btn-flat btn-fixed-w btn-light mb-3">Light</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- rounded button -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Rounded Buttons</h4>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-primary mb-3">Primary</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-success mb-3">Success</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-danger mb-3">Danger</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-warning mb-3">Warning</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-info mb-3">Info</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-dark mb-3">Dark</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-light mb-3">Light</button>
                </div>
            </div>
        </div>
        <!-- tags button -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Button tags</h4>
                    <a class="btn btn-primary btn-fixed-w mb-3" href="#" role="button">Link</a>
                    <input class="btn btn-secondary btn-fixed-w mb-3" type="reset" value="Reset">
                    <button class="btn btn-success btn-fixed-w mb-3" type="submit">Button</button>
                    <input class="btn btn-warning btn-fixed-w mb-3" type="button" value="Input">
                    <input class="btn btn-info btn-fixed-w mb-3" type="submit" value="Submit">
                    <input class="btn btn-danger btn-fixed-w mb-3" type="reset" value="Reset">
                    <input class="btn btn-dark btn-fixed-w mb-3" type="reset" value="Reset">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Outline buttons -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Outline buttons</h4>
                    <button type="button" class="btn btn-fixed-w btn-outline-primary mb-3">Primary</button>
                    <button type="button" class="btn btn-fixed-w btn-outline-secondary mb-3">Secondary</button>
                    <button type="button" class="btn btn-fixed-w btn-outline-success mb-3">Success</button>
                    <button type="button" class="btn btn-fixed-w btn-outline-danger mb-3">Danger</button>
                    <button type="button" class="btn btn-fixed-w btn-outline-warning mb-3">Warning</button>
                    <button type="button" class="btn btn-fixed-w btn-outline-info mb-3">Info</button>
                    <button type="button" class="btn btn-fixed-w btn-outline-dark mb-3">Dark</button>
                    <button type="button" class="btn btn-fixed-w btn-outline-light mb-3">Light</button>
                </div>
            </div>
        </div>
        <!-- Outline Flat buttons -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Outline buttons Flat</h4>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-primary mb-3">Primary</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-secondary mb-3">Secondary</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-success mb-3">Success</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-danger mb-3">Danger</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-warning mb-3">Warning</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-info mb-3">Info</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-dark mb-3">Dark</button>
                    <button type="button" class="btn btn-rounded btn-fixed-w btn-outline-light mb-3">Light</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Sizes buttons -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Sizes buttons</h4>
                    <button type="button" class="btn btn-info btn-xl mb-3">Large button</button>
                    <button type="button" class="btn btn-primary btn-lg mb-3">Large button</button>
                    <button type="button" class="btn btn-success btn-md mb-3">Small button</button>
                    <button type="button" class="btn btn-warning btn-sm mb-3">Small button</button>
                    <button type="button" class="btn btn-danger btn-xs mb-3">Small button</button>
                </div>
            </div>
        </div>
        <!-- block buttons -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">block buttons</h4>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Inverse buttons -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Inverse Buttons</h4>
                    <button type="button" class="btn btn-inverse-primary btn-fixed-w mb-3">Primary</button>
                    <button type="button" class="btn btn-inverse-secondary btn-fixed-w mb-3">Secondary</button>
                    <button type="button" class="btn btn-inverse-success btn-fixed-w mb-3">Success</button>
                    <button type="button" class="btn btn-inverse-danger btn-fixed-w mb-3">Danger</button>
                    <button type="button" class="btn btn-inverse-warning btn-fixed-w mb-3">Warning</button>
                    <button type="button" class="btn btn-inverse-info btn-fixed-w mb-3">Info</button>
                    <button type="button" class="btn btn-inverse-dark btn-fixed-w mb-3">Dark</button>
                    <button type="button" class="btn btn-inverse-light btn-fixed-w mb-3">Light</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Inverse Rounded Buttons</h4>
                    <button type="button" class="btn btn-rounded btn-inverse-primary btn-fixed-w mb-3">Primary</button>
                    <button type="button" class="btn btn-rounded btn-inverse-secondary btn-fixed-w mb-3">Secondary</button>
                    <button type="button" class="btn btn-rounded btn-inverse-success btn-fixed-w mb-3">Success</button>
                    <button type="button" class="btn btn-rounded btn-inverse-danger btn-fixed-w mb-3">Danger</button>
                    <button type="button" class="btn btn-rounded btn-inverse-warning btn-fixed-w mb-3">Warning</button>
                    <button type="button" class="btn btn-rounded btn-inverse-info btn-fixed-w mb-3">Info</button>
                    <button type="button" class="btn btn-rounded btn-inverse-dark btn-fixed-w mb-3">Dark</button>
                    <button type="button" class="btn btn-rounded btn-inverse-light btn-fixed-w mb-3">Light</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Social Media Buttons</h4>
                    <button type="button" class="btn btn-social btn-social-fb mb-3"><i class="ti-facebook"></i></button>
                    <button type="button" class="btn btn-social btn-social-tw mb-3"><i class="ti-twitter"></i></button>
                    <button type="button" class="btn btn-social btn-social-in mb-3"><i class="ti-instagram"></i></button>
                    <button type="button" class="btn btn-social btn-social-li mb-3"><i class="ti-linkedin"></i></button>
                    <button type="button" class="btn btn-social btn-social-pi mb-3"><i class="ti-pinterest"></i></button>
                    <br>
                    <button type="button" class="btn btn-social btn-social-outline-fb mb-3"><i class="ti-facebook"></i></button>
                    <button type="button" class="btn btn-social btn-social-outline-tw mb-3"><i class="ti-twitter"></i></button>
                    <button type="button" class="btn btn-social btn-social-outline-in mb-3"><i class="ti-instagram"></i></button>
                    <button type="button" class="btn btn-social btn-social-outline-li mb-3"><i class="ti-linkedin"></i></button>
                    <button type="button" class="btn btn-social btn-social-outline-pi mb-3"><i class="ti-pinterest"></i></button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Social Media Buttons</h4>
                    <button type="button" class="btn btn-social btn-rounded btn-social-fb mb-3"><i class="ti-facebook"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-tw mb-3"><i class="ti-twitter"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-in mb-3"><i class="ti-instagram"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-li mb-3"><i class="ti-linkedin"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-pi mb-3"><i class="ti-pinterest"></i></button>
                    <br>
                    <button type="button" class="btn btn-social btn-rounded btn-social-outline-fb mb-3"><i class="ti-facebook"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-outline-tw mb-3"><i class="ti-twitter"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-outline-in mb-3"><i class="ti-instagram"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-outline-li mb-3"><i class="ti-linkedin"></i></button>
                    <button type="button" class="btn btn-social btn-rounded btn-social-outline-pi mb-3"><i class="ti-pinterest"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic Button Group</h4>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success">Left</button>
                        <button type="button" class="btn btn-success">Middle</button>
                        <button type="button" class="btn btn-success">Right</button>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-danger">Left</button>
                        <button type="button" class="btn btn-danger">Middle</button>
                        <button type="button" class="btn btn-danger">Right</button>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning">Left</button>
                        <button type="button" class="btn btn-warning">Middle</button>
                        <button type="button" class="btn btn-warning">Right</button>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-info">Left</button>
                        <button type="button" class="btn btn-info">Middle</button>
                        <button type="button" class="btn btn-info">Right</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic toolbar</h4>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-heart"></i></button>
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-settings"></i></button>
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-reload"></i></button>
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-paint-bucket"></i></button>
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-shine"></i></button>
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-timer"></i></button>
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-world"></i></button>
                        <button type="button" class="btn btn-primary mb-3"><i class="ti-power-off"></i></button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary mb-3"><i class="ti-heart"></i></button>
                        <button type="button" class="btn btn-secondary mb-3"><i class="ti-settings"></i></button>
                        <button type="button" class="btn btn-secondary mb-3"><i class="ti-reload"></i></button>
                        <button type="button" class="btn btn-secondary mb-3"><i class="ti-power-off"></i></button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-info mb-3">12</button>
                        <button type="button" class="btn btn-info mb-3">10</button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-warning mb-3"><i class="ti-heart"></i></button>
                        <button type="button" class="btn btn-warning mb-3"><i class="ti-settings"></i></button>
                        <button type="button" class="btn btn-warning mb-3"><i class="ti-reload"></i></button>
                        <button type="button" class="btn btn-warning mb-3"><i class="ti-paint-bucket"></i></button>
                        <button type="button" class="btn btn-warning mb-3"><i class="ti-power-off"></i></button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-primary mb-3"><i class="ti-heart"></i></button>
                        <button type="button" class="btn btn-outline-primary mb-3"><i class="ti-settings"></i></button>
                        <button type="button" class="btn btn-outline-primary mb-3"><i class="ti-reload"></i></button>
                        <button type="button" class="btn btn-outline-primary mb-3"><i class="ti-paint-bucket"></i></button>
                        <button type="button" class="btn btn-outline-primary mb-3"><i class="ti-power-off"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Button Group Sizing</h4>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-lg btn-primary">Left</button>
                        <button type="button" class="btn btn-lg btn-primary">Middle</button>
                        <button type="button" class="btn btn-lg btn-primary">Right</button>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn btn-md btn-secondary">Left</button>
                        <button type="button" class="btn btn btn-md btn-secondary">Middle</button>
                        <button type="button" class="btn btn btn-md btn-secondary">Right</button>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-success">Left</button>
                        <button type="button" class="btn btn-sm btn-success">Middle</button>
                        <button type="button" class="btn btn-sm btn-success">Right</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Button Nesting</h4>
                    <div class="btn-group mb-3" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-success">1</button>
                        <button type="button" class="btn btn-success">2</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-danger">1</button>
                        <button type="button" class="btn btn-danger">2</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop3" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Buttons with Icons</h4>
                    <button type="button" class="btn btn-primary mb-3"><i class="ti-heart"></i> Primary</button>
                    <button type="button" class="btn btn-secondary mb-3"><i class="ti-settings"></i> Secondary</button>
                    <button type="button" class="btn btn-success mb-3"><i class="ti-reload"></i> Success</button>
                    <button type="button" class="btn btn-danger mb-3"><i class="ti-paint-bucket"></i> Danger</button>
                    <button type="button" class="btn btn-warning mb-3"><i class="ti-shine"></i> Warning</button>
                    <button type="button" class="btn btn-info mb-3"><i class="ti-world"></i> Info</button>
                    <button type="button" class="btn btn-dark mb-3"><i class="ti-timer"></i> Dark</button>
                    <button type="button" class="btn btn-light mb-3"><i class="ti-power-off"></i> Light</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Buttons with Icons</h4>
                    <button type="button" class="btn btn-outline-primary mb-3"><i class="ti-heart"></i> Primary</button>
                    <button type="button" class="btn btn-outline-secondary mb-3"><i class="ti-settings"></i> Secondary</button>
                    <button type="button" class="btn btn-outline-success mb-3"><i class="ti-reload"></i> Success</button>
                    <button type="button" class="btn btn-outline-danger mb-3"><i class="ti-paint-bucket"></i> Danger</button>
                    <button type="button" class="btn btn-outline-warning mb-3"><i class="ti-shine"></i> Warning</button>
                    <button type="button" class="btn btn-outline-info mb-3"><i class="ti-world"></i> Info</button>
                    <button type="button" class="btn btn-outline-dark mb-3"><i class="ti-timer"></i> Dark</button>
                    <button type="button" class="btn btn-outline-light mb-3"><i class="ti-power-off"></i> Light</button>
                </div>
            </div>
        </div>
    </div>
@endsection
