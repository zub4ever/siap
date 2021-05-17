@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Popover
@endsection

@section('main-content')
    <div class="row">
        <!-- click popover -->
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Click Toggle Popover</h4>
                    <button type="button" class="btn btn-primary mb-3 mr-1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                    <button type="button" class="btn btn-success mb-3 mr-1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                    <button type="button" class="btn btn-danger mb-3" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                </div>
            </div>
        </div>
        <!-- click popover -->
        <!-- click popover -->
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Click Toggle Flat</h4>
                    <button type="button" class="btn btn-primary btn-flat mb-3 mr-1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                    <button type="button" class="btn btn-success btn-flat mb-3 mr-1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                    <button type="button" class="btn btn-danger btn-flat mb-3" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                </div>
            </div>
        </div>
        <!-- click popover -->
    </div>
    <div class="row">
        <!-- Top directions -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Top directions</h4>
                    <button type="button" class="btn btn-primary mb-3 mr-1" data-container="body" data-toggle="popover" title="Popover title" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                    <button type="button" class="btn btn-success mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                    <button type="button" class="btn btn-dark mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                    <button type="button" class="btn btn-warning mb-3" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                </div>
            </div>
        </div>
        <!-- Top directions -->
        <!-- Right directions -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Right directions</h4>
                    <button type="button" class="btn btn-primary mb-3 mr-1" data-container="body" data-toggle="popover" title="Popover title" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Right</button>
                    <button type="button" class="btn btn-success mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Right</button>
                    <button type="button" class="btn btn-warning mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Right</button>
                    <button type="button" class="btn btn-danger mb-3" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Right</button>
                </div>
            </div>
        </div>
        <!-- Right directions -->
    </div>
    <div class="row">
        <!-- Bottom directions -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Bottom directions</h4>
                    <button type="button" class="btn btn-primary mb-3 mr-1" data-container="body" data-toggle="popover" title="Popover title" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover Bottom
                    </button>
                    <button type="button" class="btn btn-success mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover Bottom
                    </button>
                    <button type="button" class="btn btn-info mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover Bottom
                    </button>
                    <button type="button" class="btn btn-dark mb-3" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover Bottom
                    </button>
                </div>
            </div>
        </div>
        <!-- Bottom directions -->
        <!-- Left directions -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Left directions</h4>
                    <button type="button" class="btn btn-primary mb-3 mr-1" data-container="body" data-toggle="popover" title="Popover title" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Left</button>
                    <button type="button" class="btn btn-success mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Left</button>
                    <button type="button" class="btn btn-warning mb-3 mr-1" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Left</button>
                    <button type="button" class="btn btn-danger mb-3" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Left</button>
                </div>
            </div>
        </div>
        <!-- Left directions -->
    </div>
    <div class="row">
        <!-- Dismissable -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Dismissable Popover</h4>
                    <a tabindex="0" class="btn btn-primary mb-3 mr-1" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                        popover
                    </a>
                    <a tabindex="0" class="btn btn-success mb-3 mr-1" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                        popover
                    </a>
                    <a tabindex="0" class="btn btn-danger mb-3 mr-1" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                        popover
                    </a>
                </div>
            </div>
        </div>
        <!-- Dismissable -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Disabled Popover</h4>
                    <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
                                <button class="btn btn-primary mb-3 mr-1" type="button" disabled>Disabled
                                    button
                                </button>
                            </span>
                    <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
                                <button class="btn btn-success mb-3 mr-1" type="button" disabled>Disabled
                                    button
                                </button>
                            </span>
                    <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
                                <button class="btn btn-danger mb-3 mr-1" type="button" disabled>Disabled
                                    button
                                </button>
                            </span>
                    <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
                                <button class="btn btn-dark mb-3" type="button" disabled>Disabled
                                    button
                                </button>
                            </span>
                </div>
            </div>
        </div>
    </div>
@endsection
