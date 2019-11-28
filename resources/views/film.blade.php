@extends("layout")
@section("content")

    <section class="container">
        <h1>Filme</h1>

        @forelse($film as $t)
            <br>
            <div>
                <h3>{{$t->titel}}</h3>
                <div>{{$t->beschreibung}}</div>
                <div><small><i>hinzugefügt von: {{\App\serien::idToName($t->user_id)}}</i></small></div>
            </div>
            @foreach($t->tags as $tags)
                <a href="{{filme/$tag->name}}"><button class="btn-dark btn-sm">{{$tag->name}}</button></a>
            @endforeach
            @empty
            <h1>TEST</h1>
            @endforelse


    </section>

@endsection
