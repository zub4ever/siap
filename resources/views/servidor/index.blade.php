@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Servidor
@endsection

@section('main-content')
    <div class="row">
        <!-- Notifications Badges -->
        <div class="col-xl-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Notifications Badges</h4>
                    <button type="button" class="btn btn-primary mb-3">
                        Notifications <span class="badge badge-light">4</span>
                    </button>
                    <button type="button" class="btn btn-success mb-3">
                        Notifications <span class="badge badge-light">4</span>
                    </button>
                    <button type="button" class="btn btn-warning mb-3">
                        Notifications <span class="badge badge-light">4</span>
                    </button>
                    <button type="button" class="btn btn-info mb-3">
                        Notifications <span class="badge badge-light">4</span>
                    </button>
                    <button type="button" class="btn btn-danger mb-3">
                        Notifications <span class="badge badge-light">4</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Profile Badges -->
        <div class="col-xl-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Profile Badges</h4>
                    <button type="button" class="btn btn-primary mb-3">Profile <span class="badge badge-light">9</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                    <button type="button" class="btn btn-success mb-3">Profile <span class="badge badge-light">9</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                    <button type="button" class="btn btn-warning mb-3">Profile <span class="badge badge-light">9</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                    <button type="button" class="btn btn-info mb-3">Profile <span class="badge badge-light">9</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                    <button type="button" class="btn btn-danger mb-3">Profile <span class="badge badge-light">9</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                    <button type="button" class="btn btn-dark mb-3">Profile <span class="badge badge-light">9</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Contextual variations -->
        <div class="col-xl-4 col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Contextual variations</h4>
                    <span class="badge badge-primary mb-3">Primary</span>
                    <span class="badge badge-secondary mb-3">Secondary</span>
                    <span class="badge badge-success mb-3">Success</span>
                    <span class="badge badge-danger mb-3">Danger</span>
                    <span class="badge badge-warning mb-3">Warning</span>
                    <span class="badge badge-info mb-3">Info</span>
                    <span class="badge badge-light mb-3">Light</span>
                    <span class="badge badge-dark mb-3">Dark</span>
                </div>
            </div>
        </div>
        <!-- Pill badges -->
        <div class="col-xl-4 col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Pill badges</h4>
                    <span class="badge badge-pill mb-3 badge-primary">Primary</span>
                    <span class="badge badge-pill mb-3 badge-secondary">Secondary</span>
                    <span class="badge badge-pill mb-3 badge-success">Success</span>
                    <span class="badge badge-pill mb-3 badge-danger">Danger</span>
                    <span class="badge badge-pill mb-3 badge-info">Info</span>
                    <span class="badge badge-pill mb-3 badge-light">Light</span>
                    <span class="badge badge-pill mb-3 badge-dark">Dark</span>
                </div>
            </div>
        </div>
        <!-- Links badges -->
        <div class="col-xl-4 stretched_card col-lg-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Links badges</h4>
                    <a href="#" class="badge badge-primary mb-3">Primary</a>
                    <a href="#" class="badge badge-secondary mb-3">Secondary</a>
                    <a href="#" class="badge badge-success mb-3">Success</a>
                    <a href="#" class="badge badge-danger mb-3">Danger</a>
                    <a href="#" class="badge badge-info mb-3">Info</a>
                    <a href="#" class="badge badge-light mb-3">Light</a>
                    <a href="#" class="badge badge-dark mb-3">Dark</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Nav Pills -->
        <div class="col-xl-5 stretched_card col-lg-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Nav Pills</h4>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Fill and justify -->
        <div class="col-lg-7 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Fill and justify</h4>
                    <nav class="nav nav-pills nav-fill">
                        <a class="nav-item nav-link active" href="#">Active</a>
                        <a class="nav-item nav-link" href="#">Link</a>
                        <a class="nav-item nav-link" href="#">Link</a>
                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
