@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Pagination
@endsection

@section('main-content')
    <div class="row">
        <!-- Pagination Icons -->
        <div class="col-lg-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Working With Icons</div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span class="ti-angle-left"></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="ti-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Pagination Icons -->
        <!-- Color pagination start -->
        <div class="col-lg-4 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Color pagination</div>
                    <nav aria-label="...">
                        <ul class="pagination pg-color-border">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="ti-angle-left"></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <span class="ti-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Color pagination -->
        <!-- Disabled and active states -->
        <div class="col-lg-4 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Disabled and active</div>
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="ti-angle-left"></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <span class="ti-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Disabled and active states -->
    </div>
    <div class="row">
        <!-- Small Pagination -->
        <div class="col-lg-4 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Small Pagination</div>
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Small Pagination -->
        <!-- Medium Pagination -->
        <div class="col-lg-4 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Medium Pagination</div>
                    <nav aria-label="...">
                        <ul class="pagination pagination-md">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Medium Pagination -->
        <!-- Large Pagination -->
        <div class="col-lg-4 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Large Pagination</div>
                    <nav aria-label="...">
                        <ul class="pagination pagination-lg">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Large Pagination -->
    </div>
    <div class="row">
        <!-- Alignment -->
        <div class="col-lg-4 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Justify Start</div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-start">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="ti-angle-left"></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <span class="ti-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Alignment -->
        <!-- Alignment -->
        <div class="col-lg-4 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Justify Center</div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="ti-angle-left"></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <span class="ti-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Alignment -->
        <!-- Alignment start -->
        <div class="col-lg-4 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Justify End</div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="ti-angle-left"></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <span class="ti-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Alignment end -->
    </div>
@endsection
