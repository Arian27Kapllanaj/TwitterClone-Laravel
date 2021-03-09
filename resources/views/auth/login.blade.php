<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login on Twitter / Twitter</title>
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<style>
    body {
        background-color: black;
    }

    .login {
        text-align: center;
    }

    input {
        background-color: black;
        width: 350px;
        height: 65px;
        color: white;
    }

    #loginBtn {
        background-color: #26a3c9;
    }

    ::-webkit-input-placeholder {
         color: #999; 
    }

    :-moz-placeholder { 
        color: #999; 
    }

    :focus::-webkit-input-placeholder { 
        color: #26a3c9;

    }

    :focus:-moz-placeholder { 
        color: #26a3c9;
    }​

    a:link {
        color: #26a3c9;
    }

    a:visited, a:link, a:active
    {
        color: #26a3c9;
        text-decoration: none;
    }

    a:hover {
        color: #26a3c9;
        text-decoration: underline;
    }

</style>
<body>

<div class="login">
    <br>
    <img src="images/logo.png" alt="logo" width="40px">
    <br><br>
                    <div style="color: white;"><h2>Log in to Twitter</h2></div>
                        <br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                    <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Phone, email, or username">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <br><br>

                                    <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <br><br>

                                    <button id="loginBtn" type="submit" class="btn btn-primary" style="width: 350px; border-radius: 22px; height: 45px;">
                                        {{ __('Log in') }}
                                    </button>
                                        <br><br>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        •
                                        <a href="{{ route('register') }}">Sign up for Twitter</a>
                                    @endif
                        </form>
                    </div>
                    </div>
                    </div>
                    
</body>

</html>