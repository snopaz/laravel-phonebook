@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Supprimer</h1>

        <form action="{{ action('EntreprisesController@destroy', ['id' => $entreprise->id]) }}" method="POST">
            <div class="text-center">
                <p>Êtes vous sur de vouloir supprimer {{$entreprise->nom}} ? Cette action est définitive !</p>
                <button type="submit" class="btn btn-danger">Supprimer</button>
                <a href="/entreprise" class="btn btn-primary">Annuler</a>
            </div>
            @method('DELETE')
            @csrf
        </form>
    </div>
@endsection