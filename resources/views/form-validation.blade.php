@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Form Validation
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic Form Validation</h4>
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
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Form Validation Tooltip</h4>
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Last name</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip03">City</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04">State</label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip05">Zip</label>
                                <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
        This Page Scripts
*===========================-->
    <!-- Validation Script -->
    <script>
        //  Form Validation
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    </script>
@endsection
