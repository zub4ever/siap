@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Form Layouts
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Inline form</h4>
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="inlineFormInputName">Name</label>
                                <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                            </div>
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <div class="form-check">
                                    <div class="custom-control custom-checkbox primary-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Input Rounded</h4>
                    <input class="form-control form-control-lg input-rounded mb-4" type="text" placeholder=".form-control-lg">
                    <input class="form-control mb-4 input-rounded" type="text" placeholder="Default input">
                    <input class="form-control form-control-sm input-rounded" type="text" placeholder=".form-control-sm">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Disabled forms start -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Disabled forms</h4>
                    <form>
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="disabledTextInput">Disabled input</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                            <div class="form-group">
                                <label for="disabledSelect">Disabled select menu</label>
                                <select id="disabledSelect" class="form-control">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                <label class="form-check-label" for="disabledFieldsetCheck">
                                    Can't check this
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pl-4 pr-4">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- Disabled forms end -->
        <!-- Server side start -->
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card_title">Server side</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required="">
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">State</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required="">
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required="">
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Server side end -->
    </div>
@endsection
