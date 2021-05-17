@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Basic Elements Form
@endsection

@section('main-content')
    <div class="row">
        <!-- Textual inputs -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic Form inputs</h4>
                    <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Name</label>
                        <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                    </div>
                    <div class="form-group">
                        <label for="example-email-input" class="col-form-label">Email</label>
                        <input class="form-control" type="email" value="name@example.com" id="example-email-input">
                    </div>
                    <div class="form-group">
                        <label for="example-tel-input" class="col-form-label">Telephone</label>
                        <input class="form-control" type="tel" value="+880-1233456789" id="example-tel-input">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="">Password</label>
                        <input type="password" class="form-control" id="inputPassword" value="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="example-datetime-local-input" class="col-form-label">Date and time</label>
                        <input class="form-control" type="datetime-local" value="2018-07-19T15:30:00" id="example-datetime-local-input">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Select</label>
                        <select class="form-control">
                            <option>Select</option>
                            <option>Large select</option>
                            <option>Small select</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Custom Select</label>
                        <select class="custom-select">
                            <option selected="selected">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Textual inputs -->
    </div>
    <div class="row">
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Input Sizes</h4>
                    <div class="form-group">
                        <label for="example-text-input-lg" class="col-form-label">Large</label>
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input-sm" class="col-form-label">Small</label>
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Form Control Feedback</h4>
                    <div class="form-group has-primary">
                        <label for="inputHorizontalPrimary" class="col-form-label">Email</label>
                        <input type="email" class="form-control form-control-primary" id="inputHorizontalPrimary" placeholder="name@example.com">
                        <div class="form-control-feedback">Primary! You've done it.</div>
                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                    </div>
                    <div class="form-group mb-0 has-danger">
                        <label for="inputHorizontalDnger" class="col-form-label">Email</label>
                        <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                        <div class="form-control-feedback">Sorry, that username's taken. Try another?</div><small class="form-text text-muted">Example help text that remains unchanged.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Radios start -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Radios</h4>
                    <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                    <form action="#">
                        <b class="text-muted mb-3 d-block">Radios:</b>
                        <div class="custom-control custom-radio primary-radio">
                            <input type="radio" checked id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Checked Radios</label>
                        </div>
                        <div class="custom-control custom-radio primary-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Unchecked Radios</label>
                        </div>
                        <div class="custom-control custom-radio primary-radio">
                            <input type="radio" checked disabled id="customRadio3" name="customRadio33" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Disabled Radios</label>
                        </div>
                        <b class="text-muted mb-3 mt-4 d-block">Inline Radios:</b>
                        <div class="custom-control custom-radio primary-radio custom-control-inline">
                            <input type="radio" checked id="customRadio4" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Checked Radios</label>
                        </div>
                        <div class="custom-control custom-radio primary-radio custom-control-inline">
                            <input type="radio" id="customRadio5" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">Unchecked Radios</label>
                        </div>
                        <div class="custom-control custom-radio primary-radio custom-control-inline">
                            <input type="radio" checked disabled id="customRadio6" name="customRadio3" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio6">Disabled Radios</label>
                        </div>

                        <b class="text-muted mb-3 mt-4 d-block">Colored Radios:</b>
                        <div class="custom-control custom-radio primary-radio custom-control-inline mb-2">
                            <input type="radio" checked id="customRadio42" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Checked Radios</label>
                        </div>
                        <div class="custom-control custom-radio secondary-radio custom-control-inline mb-2">
                            <input type="radio" checked id="customRadio21" name="customRadio21" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio21">Checked Radios</label>
                        </div>
                        <div class="custom-control custom-radio danger-radio custom-control-inline mb-2">
                            <input type="radio" checked id="customRadio22" name="customRadio22" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio22">Checked Radios</label>
                        </div>
                        <div class="custom-control custom-radio success-radio custom-control-inline mb-2">
                            <input type="radio" checked id="customRadio23" name="customRadio23" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio23">Checked Radios</label>
                        </div>
                        <div class="custom-control custom-radio warning-radio custom-control-inline">
                            <input type="radio" checked id="customRadio24" name="customRadio24" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio24">Checked Radios</label>
                        </div>
                        <div class="custom-control custom-radio dark-radio custom-control-inline">
                            <input type="radio" checked id="customRadio25" name="customRadio25" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio25">Checked Radios</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Radios end -->
        <!-- Checkboxes start -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Checkboxes</h4>
                    <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                    <form action="#">
                        <b class="text-muted mb-3 d-block">Checkbox:</b>
                        <div class="custom-control custom-checkbox primary-checkbox">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox primary-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Unchecked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox primary-checkbox">
                            <input type="checkbox" checked disabled class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">checked Checkbox</label>
                        </div>
                        <b class="text-muted mb-3 mt-4 d-block">Inline Checkbox:</b>
                        <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">Unchecked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                            <input type="checkbox" checked disabled class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                            <input type="checkbox" disabled class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">Unchecked Checkbox</label>
                        </div>
                        <b class="text-muted mb-3 mt-4 d-block">Colored Checkbox:</b>
                        <div class="custom-control custom-checkbox primary-checkbox custom-control-inline mb-2">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck51">
                            <label class="custom-control-label" for="customCheck5">Checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox secondary-checkbox custom-control-inline mb-2">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck52">
                            <label class="custom-control-label" for="customCheck5">Checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox danger-checkbox custom-control-inline mb-2">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck53">
                            <label class="custom-control-label" for="customCheck5">Checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox success-checkbox custom-control-inline mb-2">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck54">
                            <label class="custom-control-label" for="customCheck5">Checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox warning-checkbox custom-control-inline mb-2">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck55">
                            <label class="custom-control-label" for="customCheck5">Checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox dark-checkbox custom-control-inline mb-2">
                            <input type="checkbox" checked class="custom-control-input" id="customCheck56">
                            <label class="custom-control-label" for="customCheck5">Checked Checkbox</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Checkboxes end -->
    </div>
@endsection
