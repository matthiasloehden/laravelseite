@extends('layout')
@section('content')

    <section class="container">
        <div><h1>Serie hinzufügen</h1>
            <form action="/serien/edit/{{$serien->id}}"  method="post">
                @csrf
                @method('put')


                <label>Aufgabe</label><br>
                    <input type="text"name="titel" required value="{{$serien->titel}}">
                <br>
                <label>Beschreibung</label><br>
                <textarea  name="beschreibung" required >{{$serien->beschreibung}}</textarea><br>
                <label>Tags</label><br>
                <select name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

                <br><br>
                <input type="submit" value="Speichern">
            </form>
            <form action="{{route("serien.delete", $serien)}}"><input type="submit" value="Löschen"></form>
            <br>

            @if($errors->has("titel", "beschreibung"))
                <p>Fehler. Nichts bearbeitet.</p>
            @endif
            <br><br>
        </div>

        <div></div>


@endsection
