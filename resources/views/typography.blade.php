@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Typography
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Toastr Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/toastr/css/toastr.min.css')}}">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Headings</h4>
                    <h1>h1. Heading</h1>
                    <hr>
                    <h2>h2. Heading</h2>
                    <hr>
                    <h3>h3. Heading</h3>
                    <hr>
                    <h4>h4. Heading</h4>
                    <hr>
                    <h5>h5. Heading</h5>
                    <hr>
                    <h6>h6. Heading</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-mob-4">
            <!-- Customizing Headings area -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Customizing Headings</h4>
                    <h1>
                        Fancy display heading
                        <small class="text-muted d-block mt-2">With faded secondary text</small>
                    </h1>
                    <hr>
                    <h2>
                        Fancy display heading
                        <small class="text-muted d-block mt-2">With faded secondary text</small>
                    </h2>
                    <hr>
                    <h3>
                        Fancy display heading
                        <small class="text-muted d-block mt-2">With faded secondary text</small>
                    </h3>
                    <hr>
                    <h4>
                        Fancy display heading
                        <small class="text-muted d-block mt-2">With faded secondary text</small>
                    </h4>
                    <hr>
                    <h5>
                        Fancy display heading
                        <small class="text-muted d-block mt-2">With faded secondary text</small>
                    </h5>
                    <hr>
                    <h6>
                        Fancy display heading
                        <small class="text-muted d-block mt-2">With faded secondary text</small>
                    </h6>
                </div>
            </div>
            <!-- Customizing Headings area -->
        </div>
    </div>
    <div class="row">
        <!-- Blockquotes area -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Blockquotes</h4>
                    <blockquote class="blockquote">
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius illo fuga sunt nobis possimus incidunt dolor ratione aspernatur doloremque amet, quisquam porro esse distinctio error. Delectus vitae obcaecati, suscipit velit vero illo maxime illum perferendis magnam tenetur praesentium non eligendi.</p>
                        <footer class="blockquote-footer">Someone famous in
                            <cite title="Source Title">Source Title
                            </cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- Blockquotes area -->
        <!-- heading class area -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Headings Class</h4>
                    <p class="h1">h1. Heading 1</p>
                    <hr>
                    <p class="h2">h2. Heading 2</p>
                    <hr>
                    <p class="h3">h3. Heading 3</p>
                    <hr>
                    <p class="h4">h4. Heading 4</p>
                    <hr>
                    <p class="h5">h5. Heading 5</p>
                    <hr>
                    <p class="h6">h6. Heading 6</p>
                </div>
            </div>
        </div>
        <!-- heading class area -->
    </div>
    <div class="row">
        <!-- Inline Text Elements area -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Inline Text Elements</h4>
                    <p>You can use the mark tag to
                        <mark>highlight</mark> text.</p>
                    <hr>
                    <p>
                        <del>This line of text is meant to be treated as deleted text.</del>
                    </p>
                    <hr>
                    <p>
                        <s>This line of text is meant to be treated as no longer accurate.</s>
                    </p>
                    <hr>
                    <p>
                        <ins>This line of text is meant to be treated as an addition to the document.</ins>
                    </p>
                    <hr>
                    <p><u>This line of text will render as underlined</u></p>
                    <hr>
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                    <hr>
                    <p><strong>This line rendered as bold text.</strong></p>
                    <hr>
                    <p><em>This line rendered as italicized text.</em></p>
                </div>
            </div>
        </div>
        <!-- Inline Text Elements area -->
        <!-- Text Color area -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Text Color</h4>
                    <p class="text-primary">You can use the mark tag to highlight text.</p>
                    <hr>
                    <p class="text-secondary">This line of text is meant to be treated as deleted text.</p>
                    <hr>
                    <p class="text-success">This line of text is meant to be treated as no longer accurate.</p>
                    <hr>
                    <p class="text-danger">This line of text is meant to be treated as an addition to the document.</p>
                    <hr>
                    <p class="text-warning">This line of text will render as underlined</p>
                    <hr>
                    <p class="text-info">This line of text is meant to be treated as fine print.</p>
                    <hr>
                    <p class="text-dark">This line rendered as italicized text.</p>
                </div>
            </div>
        </div>
        <!-- Text Color area -->
    </div>
@endsection
