@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Collaborateurs</h1>
        @if(count($collaborateurs) >= 1)
            @foreach($collaborateurs as $collaborateur)
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"><a href="/collaborateur/{{$collaborateur->id}}">{{$collaborateur->nom}} {{$collaborateur->prenom}}</a></div>
                            <div class="card-body">
                                <div class="well">
                                    <ul>
                                        <li>{{$collaborateur->telephone}}</li>
                                        <li>{{$collaborateur->email}}</li>
                                        <li>{{$collaborateur->entreprise['nom']}}</li>
                                        <li>{{$collaborateur->entreprise_id}}</li>
                                    </ul>
                                </div>
                                <div class="text-center">
                                    <a href="/collaborateur/update/{{$collaborateur->id}}" class="btn btn-primary">Editer</a>
                                    <a href="/collaborateur/delete/{{$collaborateur->id}}" class="btn btn-danger">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Il n'y a pas de collaborateurs dans la base de données</p>
        @endif
    </div>
@endsection