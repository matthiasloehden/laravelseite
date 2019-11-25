@extends('layout')
@section('content')

<section class="container">
    <div><h1>Serie hinzufügen</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/serien/add"  method="post" class="form-group">
                @csrf
            <label>Titel</label><br>
            <input type="text"name="titel" required ><br>
            <label>Beschreibung</label><br>
            <textarea  name="beschreibung" required class="form-control"></textarea><br>
            <label>Tags</label><br>
            <select name="tags[]" class="custom-select" multiple>
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>

            <br><br>
            <input type="submit" value="Speichern" class="btn btn-dark">
        </form>
        <br>


        <br><br>
    </div>

    <div></div>
</section>

@endsection
