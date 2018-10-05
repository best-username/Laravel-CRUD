<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            * {
                margin:0;
                padding: 0;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
                box-shadow: 1px 1px 10px #7d7d7d;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                padding: 30px;
                height: 80vh;
                text-align: center;
                background-color: #f8fafc;
            }

            .links > a {
                color: #636b6f;
                padding: 7px 20px;
                font-size: 12px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 1px solid #636b6f;
                border-radius: 7px;
                margin: 0 7px;
                transition: 0.2s;
            }
            .links > a:hover {
                color: white;
                background-color: #636b6f;
                transition: 0.2s;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            ul > li > a {
                text-decoration: none;
                color: #fb0303;
            }
            ul {

            }
            li {
                margin: 5px;
    list-style-type: none; /* Убираем маркеры */
        display: inline;

   }
   ul {
    margin-left: 0; /* Отступ слева в браузере IE и Opera */
    padding-left: 0; /* Отступ слева в браузере Firefox, Safari, Chrome */
   }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>
    <div class="content">
        <h1>Laravel App</h1>
        <ul >
            <li><a href="{{route('book.index')}}">Books</a></li>
            <li><a href="{{route('size.index')}}">Sizes</a></li>
            <li><a href="{{route('genre.index')}}">Genres</a></li>
        </ul>
    </div>
    </body>
</html>
