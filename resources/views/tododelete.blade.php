@extends('layout')
@section('content')

    <section class="container">
        <div><h1>Aufgabe Löschen</h1>
            <form action="/todo/delete/{{$todo->id}}" >
                @csrf

                <label>Aufgabe</label><br>
                <input type="text"name="aufgabe" disabled value="{{$todo->aufgabe}}"><br>
                <label>Beschreibung</label><br>
                <textarea  name="beschreibung" disabled >{{$todo->beschreibung}}</textarea><br>
                <label>Abgabetermin</label><br>
                <input type="date" name="abgabetermin"><br><br>
                <form action="/todo/delete/{{$todo->id}}/delete" method="post"><input type="submit" value="Löschen"></form>
            </form>
            <br>
            @if($errors->has("aufgabe"))
                <p>Die Aufgabe muss mindetens 3 Buchstaben haben.</p>
            @endif
            <br><br>
        </div>

        <div></div>
    </section>

@endsection

