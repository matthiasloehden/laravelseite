@extends('layout')
@section('content')

<section class="container">
    <div><h1>Aufgabe Bearbeiten</h1>
        <form action="/todo/edit/{{$todo->id}}"  method="post">
            @csrf
            @method('put')

            <label>Aufgabe</label><br>
            <input type="text"name="aufgabe" required value="{{$todo->aufgabe}}"><br>
            <label>Beschreibung</label><br>
            <textarea  name="beschreibung" required >{{$todo->beschreibung}}</textarea><br>
            <label>Abgabetermin</label><br>
            <input type="date" name="abgabetermin"><br><br>
            <input type="submit" value="Speichern">
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
