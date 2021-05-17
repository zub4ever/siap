@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Alert
@endsection

@section('main-content')
    <div class="row">
        <!-- Alert -->
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">alerts</h4>
                    <div class="alert alert-primary" role="alert">
                        <strong>Heads up!</strong> This alert needs your attention, but it's not super.
                    </div>
                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                    </div>
                    <div class="alert alert-info" role="alert">
                        <strong>Notice!</strong> Your info message text is here.
                    </div>
                </div>
            </div>
        </div>
        <!-- Link alert area -->
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">alert link</h4>
                    <div class="alert alert-primary" role="alert">
                        <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your
                            attention,
                        </a>but it's not super.
                    </div>
                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> You <a href="#" class="alert-link">successfully read
                            this important</a> alert message.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong> Change a few things up and try <a href="#" class="alert-link">submitting
                            again.
                        </a>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <strong>Warning!</strong> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                    </div>
                    <div class="alert alert-info" role="alert">
                        <strong>Notice!</strong> Your info message text is <a href="#" class="alert-link">here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Additional content area -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Additional Content</h4>
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- dismiss alert area -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Dismissing</h4>
                    <div class="alert-dismiss">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-light alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="ti-close"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
