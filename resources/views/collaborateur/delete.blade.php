@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Supprimer</h1>

        <form action="{{ action('CollaborateursController@destroy', ['id' => $collaborateur->id]) }}" method="POST">
            <div class="text-center">
                <p>Êtes vous sur de vouloir supprimer {{$collaborateur->nom}} {{$collaborateur->prenom}} ? Cette action est définitive !</p>
                <button type="submit" class="btn btn-danger">Supprimer</button>
                <a href="/collaborateur" class="btn btn-primary">Annuler</a>
            </div>
            @method('DELETE')
            @csrf
        </form>
    </div>
@endsection