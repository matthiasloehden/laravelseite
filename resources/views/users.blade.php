@extends('layout')
@section('content')

    <section class="container">
        <div>


            @if(isset($search))
                <h2>Gefundene Benutzer mit: {{$q}}</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($search as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif


            <h1>Registrierte Benutzer</h1>
                <form action="users" method="POST" class="form-control">
                    @csrf
                    <input type="text" class="" name="q" placeholder="Benutzer durchsuchen">
                    <input type="submit" value="Suchen" class="btn btn-secondary">
                </form>
            @forelse ($users as $t)

                <br><div>


                    <h3>{{$t->name}}</h3>
                    <div>{{$t->email}}</div>
                    <div><i>Mitglied seit: {{($t->created_at)}}</i></div>

                </div>
            @empty
                <h6>Keine Benutzer Registriert.</h6>
            @endforelse
        </div>


    </section>

@endsection

