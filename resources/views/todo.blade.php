@extends('layout')
@section('content')

    <section class="container">
        <div><h1>TODO LISTE</h1>
            <form action="/todo"  method="post">
                @csrf

                <label>Aufgabe</label><br><input type="text"name="aufgabe" required><br>
                <label>Beschreibung</label><br><textarea  name="beschreibung" required></textarea><br>
                <label>Abgabetermin</label><br><input type="date" name="abgabetermin"><br><br>
                <input type="submit" value="Speichern">
            </form>
            <br>
            @if($errors->has("aufgabe"))
                <p>Die Aufgabe muss mindetens 3 Buchstaben haben.</p>
            @endif
            <br><br>
        </div>
        @foreach ($todos as $t)
            <div>


                <h1>{{$t->aufgabe}}</h1>
                <div>{{$t->beschreibung}}</div>
                <div>Eingereicht: {{$t->eingereicht}}</div>
                <div>Abgabetermin: {{substr($t->abgabetermin, 0, 10)}}</div>
                <div><form action="{{route("todo.edit", $t)}}"><input type="submit" value="Bearbeiten"></form>
                     <form action="{{route("todo.delete", $t)}}"><input type="submit" value="Löschen"></form>
            </div>
        @endforeach
        <div></div>
    </section>

@endsection
