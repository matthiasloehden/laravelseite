@extends('layout')
@section('content')

    <section class="container">

        @if(isset($search))
            <h2>Gefundene Serien mit: {{$q}}</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Titel</th>
                    <th>Beschreibung</th>
                </tr>
                </thead>
                <tbody>
                @foreach($search as $search)
                    <tr>
                        <td>{{$search->titel}}</td>
                        <td>{{$search->beschreibung}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif


        <h1>{{request("tag")}}
            Serien</h1>
        <form action="{{route("serien.search")}}" method="POST" class="form-control">
            @csrf
            <input type="text" class="" name="q" placeholder="Serien durchsuchen">
            <input type="submit" value="Suchen" class="btn btn-secondary">
        </form>
        </div>
        @forelse ($serien as $t)
            <br>
            <div>
                <h3>{{$t->titel}}</h3>
                <div>{{$t->beschreibung}}</div>
                <div><small><i>hinzugefügt von: {{\App\serien::idToName($t->user_id)}}</i></small></div>
                @foreach($t->tags as $tag)
                    <a href="{{route("serien",["tag" => $tag->name])}}">
                        <button class="btn-dark btn-sm">{{$tag->name}}</button>
                    </a>
                @endforeach
            </div>
        @empty
            <h1>Keine Serien mit dem Tag.</h1>
        @endforelse
        <br>
        <div><a href="{{route("serien.add")}}" class="btn btn-dark">Serie hinzufügen</a></div>
        <div></div>
    </section>


@endsection
