@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Collaborateurs</h1>
        <div>
        @if(Auth::user()->getAuthIdentifier() == 1 || Auth::user()->getAuthIdentifier() == 2)
            <div class="row justify-content-center">
                <a href="/collaborateur/create" class="btn btn-primary">Ajouter un collaborateur</a>
            </div>
            <br>
            @endif
            <form action="/collaborateur" method="GET">
                <div class="input-group row justify-content-center">
                    <input type="search" name="search" class="col-5 form-control">
                    <button type="submit" class="btn btn-primary col-2">Rechercher</button>
                </div>
            </form>
        </div>
        <br>
        @if(count($collaborateurs) >= 1)
            @foreach($collaborateurs as $collaborateur)
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{$collaborateur->nom}} {{$collaborateur->prenom}}</div>
                            <div class="card-body">
                                <div class="well">
                                    <ul>
                                        @if ($collaborateur->telephone != NULL)
                                            <li>{{$collaborateur->telephone}}</li>
                                        @endif
                                        <li>{{$collaborateur->email}}</li>
                                        <li>{{$collaborateur->entreprise['nom']}}</li>
                                        <li>Numéro de l'entreprise : {{$collaborateur->entreprise_id}}</li>
                                    </ul>
                                </div>
                                <div class="text-center">
                                    @if(Auth::user()->getAuthIdentifier() == 1 || Auth::user()->getAuthIdentifier() == 2)
                                        <a href="/collaborateur/update/{{$collaborateur->id}}" class="btn btn-primary">Editer</a>
                                    @endif
                                    @if(Auth::user()->getAuthIdentifier() == 1)
                                        <a href="/collaborateur/delete/{{$collaborateur->id}}" class="btn btn-danger">Supprimer</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
                {{ $collaborateurs->links() }}
        @else
            <div class="row justify-content-center">
                <p>Il n'y a pas de collaborateurs dans la base de données</p>
            </div>
        @endif
    </div>
@endsection