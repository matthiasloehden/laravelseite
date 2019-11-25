@extends('layout')
@section('content')

    <section class="container">
        <div><h1>Serie bearbeiten</h1>
            <form action="/serien/edit/{{$serien->id}}"  method="post"class="form-group">
                @csrf
                @method('put')


                <label>Titel</label><br>
                    <input type="text"name="titel" required value="{{$serien->titel}}" class="form-control">
                <br>
                <label>Beschreibung</label><br>
                <textarea  name="beschreibung" required class="form-control">{{$serien->beschreibung}}</textarea><br>
                <label>Tags</label><br>
                <select name="tags[]" multiple class="custom-select">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

                <br><br>
                <input type="submit" value="Speichern" class="btn btn-secondary">
            </form><br>
            <form action="{{route("serien.delete", $serien)}}">
                <input type="submit" value="Löschen" class="btn btn-dark">
            </form>
            <br>

            @if($errors->has("titel", "beschreibung"))
                <p>Fehler. Nichts bearbeitet.</p>
            @endif
            <br><br>
        </div>

        <div></div>
    </section>


@endsection
