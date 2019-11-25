<!DOCTYPE html>
<html>
<head>
    <title>Matthias Löhden</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>


    </style>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href={{route("home")}} class="navbar-brand">Matthias Löhden </a>
    <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Bildung<span class="caret"></span></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href=schule.html>Schule</a>
                <a class="dropdown-item" href=lebenslauf.html>Lebenslauf</a>
                <a class="dropdown-item" href=arbeit.html>Arbeitserfahrung</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Hobbys</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href=gaming.html>Gaming</a>
                <a class="dropdown-item" href="{{route("serien")}}">Serien</a>
                <a class="dropdown-item" href=filme.html>Filme</a>
            </div>
        </li>
            </div>
        <li class="nav-item"><a class="nav-link" href=kontakt.html>Kontakt</a></li>
        <li class="nav-item {{ Request::path() === "/todo" ? "active" : "" }}">
            <a class="nav-link" href="{{route("todo")}}">TODO Liste</a></li>
        <li class="nav-item"><a class="nav-link" href="/users">Benutzer Index</a> </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
<br>
@yield('content')
<footer class="page-footer font-small teal pt-4">
    <hr>
    <div class="text-center">
        <br>
        <strong>Kontakt</strong><br>
        Matthias Löhden<br>
        Hauptstraße 19<br>
        27419 Groß Meckelsen<br>
        0157 72004074<br>
        m.loehden@yahoo.de<br><br>
    </div>
</footer>
</body>
</html>

