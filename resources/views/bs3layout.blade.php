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
        <li class="{{ Request::path() === "/todo" ? "active" : "" }}"><a href="{{route("todo")}}">TODO Liste</a></li>
        <li><a href="{{route("serien")}}">Serien</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        auth()
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


