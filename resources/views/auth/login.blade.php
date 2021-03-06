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
        text-align: center;
        align-items: center;
    }

    input {
        background-color: black;
        width: 300px;
        height: 60px;
    }
</style>
<body>
    <div class="text-center">
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

                                    <button type="submit" class="btn btn-primary" style="width: 300px; border-radius: 22px; height: 45px;">
                                        {{ __('Login') }}
                                    </button>
                                        <br><br>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                        •
                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            {{ __('Sign up for Twitter') }}
                                        </a>
                                    @endif
                        </form>
                    </div>
</body>

</html>