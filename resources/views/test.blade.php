@extends('layout')
@section('content')

<section>
    <h1>{{$post->titel}}</h1>
    <div>{{$post->beschreibung}}</div>
</section>

@endsection
