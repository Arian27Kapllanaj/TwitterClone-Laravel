<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Twitter. It's what's happening/ Twitter</title>

    <!-- Fonts -->
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: black;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
        }

        .position-ref {
            position: relative;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #text {
            font-weight: 900;
            font-style: serif;
        }

        .btn {
            border-radius: 12px;
            width: 350px;
            height: 40px;
        }

        #loginBtn {
            background-color: black;
            color: #0ec6f0;
            font-weight: bolder;
        }

        #loginBtn:hover {
            background-color: rgba(35, 230, 244, 0.10);
            
        }

        .footer {
            color: #898f8e;
            text-align: center;
            font-size: 75%;
        }

        .footer a {
            color: inherit;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>

    <div class="row">
        <div class="col-md-4">
            <img src="images/twitter1.png" alt="twitter picture" style="max-width: 185%; max-height: 90%">
        </div>
        <div class="col-md-5 ms-auto">
            <br><br><br><br><br><br>
            <img src="images/logo.png" alt="logo" style="max-width: 8%;">
            <br><br><br><br>
            <h1 id="text" class="display-1" style="color: white;">Happening now</h1>
            <br>
            <h2 id="text" style="color: white;">Join Twitter Today.</h2>
            <br>
            <div class="position-ref">
                @if (Route::has('register'))
                <a href="{{ route('register') }}"><button class="btn btn-primary" style="background-color: #0ec6f0; font-weight: bolder;">Sign up</button></a>
                @endif
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <br><br>
                <div class="btn btn-primary" id="loginBtn">
                    <a href="{{ route('login') }}" style="text-decoration: none;">Log in</a>
                </div>
                @endauth
                @endif
            </div>

        </div>
    </div>

    <!-- Footer 17-->
    
        <div class="footer">
            <thead>
                <tr>
                    <th scope="col"><a href="{{ route('about') }}">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Help Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Terns of Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Privacy Policy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Cookie Policy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Ads info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Careers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Brand Resources&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Advertising&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Marketing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Twiiter for Business&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Developers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Directory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Settings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">&copy; 2021 Twitter, Inc,</th>
                </tr>
            </thead>
        </div>
    </div>
<br>
</body>

</html>