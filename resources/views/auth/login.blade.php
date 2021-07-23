<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>SISA</title>

    <!-- Vendor css -->
    <link rel="stylesheet" href="{{asset('assets/css/auth-materialdesignicons.min.css')}}">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="{{asset('assets/css/auth-miri-ui-kit-free.css')}}">

    <!-- Stylesheet for demo page specific css -->
    <link rel="stylesheet" href="{{asset('assets/css/auth-demo.css')}}">

</head>
<style>
    body {
    background-color: #0d0d0d;
}
</style>

<body>

    <br><br><br><br><br><br>
    <div class="card login-card">
        <div class="card-body">
      <center>  <img src="{{asset('assets/images/rbprev-2-logo.png')}}" alt="" class="img-fluid"> <center>
            <h3 class="text-center text-white font-weight-light mb-4"><strong><font color=red>RB</font>PREV</strong></h3>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                <label for="email" class="text-white d-flex justify-content-between mt-4"><p><strong>{{ __('E-Mail Address') }}</p></strong></label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                </div>
                <div class="form-group">
                <label for="password" class="text-white d-flex justify-content-between mt-4"><p><strong>{{ __('Password') }}</p></strong></label>

                            
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                </div>
               <button type="submit" value="Login" class="btn btn-danger btn-block mb-3">
                                        {{ __('Login') }}
                </button>        
            </form>
        </div>
    </div>

</body>


<footer>
</footer>
    <script src="../src/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../src/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../src/vendors/bootstrap/dist/js/bootstrap.min.js"></script>