<!DOCTYPE html>
<html>
<head>
    <title>TODO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>


    </style>

</head>
<body>
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="dropdown"><a href=# class="navbar-brand">Matthias Löhden </a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bildung<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href=schule.html>Schule</a>
                <li><a href=lebenslauf.html>Lebenslauf</a>
                <li><a href=arbeit.html>Arbeitserfahrung</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=hobbys.html>Hobbys</a>
            <ul class="dropdown-menu">
                <li><a href=gaming.html>Gaming</a>
                <li><a href=serien.html>Serien</a>
                <li><a href=filme.html>Filme</a></li>
            </ul>
        <li><a href=kontakt.html>Kontakt</a></li>
        <li class="{{ Request::path() === "todo" ? "active" : "" }}"><a href="{{route("todo")}}">TODO Liste</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

            @if (Route::has('login'))
                <li>

                    @auth
                        <a href="{{ url('/home') }}"> Home  </a><li><a></a></li>
                </li>
                    @else
                <li>
                    <a href="{{ route('login') }}">
                        <span class="glyphicon glyphicon-log-in"></span> Login </a>
                </li>

                        @if (Route::has('register'))
                <li><a href="{{ route('register') }}">
                        <span class="glyphicon glyphicon-user"></span> Register </a></li><li><a></a></li>
                        @endif
                    @endauth

            @endif

    </ul>
</nav>
@yield('content')
<footer class="page-footer font-small teal pt-4">
    <hr>
    <div class="container-fluid text-center text-md-left">
        <br>
        <strong>Kontakt</strong><br>
        Matthias Löhden<br>
        Hauptstraße 19<br>
        27419 Groß Meckelsen<br>
        01577/2004074<br>
        m.loehden@yahoo.de<br><br>
    </div>
</footer>
</body>
</html>

