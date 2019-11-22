@extends('layout')
@section('content')

    <section class="container">
        <div><h1>Serien</h1>

        </div>
        @forelse ($serien as $t)
            <div>


                <h1>{{$t->titel}}</h1>
                <div>{{$t->beschreibung}}</div>
                <div><i>hinzugefügt von: {{\App\serien::idToName($t->user_id)}}</i></div>
                @foreach($t->tags as $tag)
                    <div><a href="{{route("serien",["tag" => $tag->name])}}">{{$tag->name}}</a></div>
                @endforeach
                <form action="{{route("serien.edit", $t)}}"><input type="submit" value="Bearbeiten"></form>
            </div>
        @empty
            <h1>Keine Serien mit dem Tag.</h1>
        @endforelse
        <div><a href="{{route("serien.add")}}">Serie hinzufügen</a></div>
        <div></div>
    </section>


@endsection
