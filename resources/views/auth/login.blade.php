<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Área restrita</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="{{asset('assets/images/rbprev-2.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/ligin.css')}}">

</head>

<body>
<section class="login">
    <div class="login_box">
        <div class="left">
            <div class="top_link"><a href="http://www.rbprev.riobranco.ac.gov.br/"><img
                        src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download"
                        alt="">Retornar</a></div>
            <div class="contact">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3>Área de acesso</h3>
                    <input type="text" id="email" placeholder="Email" name="email" value="" required autofocus>
                    <input type="password" id="password" placeholder="Senha" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <button class="submit" value="Login">Efetuar login</button>

                </form>
            </div>
        </div>
        <div class="right">

            <div class="right-inductor"><img src="" alt=""></div>
        </div>
    </div>
</section>
</body>
</html>
