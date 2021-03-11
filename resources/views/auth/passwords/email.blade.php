<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    </head>
    <style>
        
        .header {
            overflow: hidden;
            height: 50px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            width: auto;
            height: 50px;
        }

        #email{
            width: 390px;
            border-radius: 24px;
        }

        .input{
            text-align: center;
        }

        #searchBtn {
            background-color: #26a3c9;
            border-radius: 24px;
            width: 80px;
        }

        #searchBtn:hover {
            background-color: #126fcc;
        }
</style>

<body>

        <div class="header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-body">
                        <p>
                            <!-- Check later to change the href to route-->
                            <a href="http://127.0.0.2/Twitter/public/"><img src="https://github.com/Arian27Kapllanaj/TwitterClone-Laravel/blob/master/public/images/favicon.png?raw=true" alt="twitter logo" width= "40px"></img></a> Password Reset
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <br>
                        <h3><strong>Find your Twitter account</strong></h3>
                        <br>
                        Enter your email, phone number, or username.
                        <br><br>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="input">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                                <button id="searchBtn" type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>