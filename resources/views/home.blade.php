@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hallo {{auth()->user()->name}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        <h1>Deine Serien</h1>

                        @forelse ($serien as $t)

                            <div>
                                <h3>{{$t->titel}}</h3>
                                <div>{{$t->beschreibung}}</div>
                                <div><small><i>hinzugefügt von: {{\App\serien::idToName($t->user_id)}}</i></small></div>
                                @foreach($t->tags as $tag)
                                    <a href="{{route("serien",["tag" => $tag->name])}}">
                                        <button class="btn-dark btn-sm">{{$tag->name}}</button>
                                    </a>
                                @endforeach
                                <form action="{{route("serien.edit", $t)}}"><input type="submit" value="Bearbeiten"
                                                                                   class="btn btn-light"></form>
                            </div>
                        @empty
                            <h6>Du hast keine Serien hinzugefügt.</h6>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
