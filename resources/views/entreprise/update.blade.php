@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mise à jour</h1>

        <form action="{{ action('EntreprisesController@update', ['id' => $entreprise->id]) }}" method="POST">
            <div class="form-group">
                <label>Nom de l'entreprise</label>
                <input class="form-control" type="text" name="nom" value="{{$entreprise->nom}}" require>
                <br>
                <label>Rue</label>
                <input class="form-control" type="text" name="rue" value="{{$entreprise->rue}}" required>
                <br>
                <label>Code Postal</label>
                <input class="form-control" type="number" name="code_postal" value="{{$entreprise->code_postal}}" required>
                <br>
                <label>Ville</label>
                <input class="form-control" type="text" name="ville" value="{{$entreprise->ville}} "required>
                <br>
                <label>Téléphone</label>
                <!-- Appliquer une condition de format de numéro de téléphone Francais ici -->
                <input class="form-control" type="number" name="telephone" value="{{$entreprise->telephone}}">
                <br>
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="{{$entreprise->email}}" required>
                <br>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
            @method('PUT')
            @csrf
        </form>
    </div>
@endsection