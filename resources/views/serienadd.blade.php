@extends('layout')
@section('content')

<section class="container">
    <div><h1>Serie hinzufügen</h1>
        <form action="/serien/add"  method="post">
                @csrf


            <label>Aufgabe</label><br>
            <input type="text"name="titel" required ><br>
            <label>Beschreibung</label><br>
            <textarea  name="beschreibung" required ></textarea><br>
            <label>Tags</label><br>
            <select name="tags[]" multiple>
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>

            <br><br>
            <input type="submit" value="Speichern">
        </form>
        //<form> action="{{route("serien.delete)}}</form>
        <br>

        @if($errors->has("titel"))
            <p>Der Titel muss mindetens 3 Buchstaben haben.</p>
        @endif
        <br><br>
    </div>

    <div></div>
</section>

@endsection
