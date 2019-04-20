@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un collaborateur</h1>

        <form action="{{ action('CollaborateursController@store') }}" method="POST">
            <div class="form-group">
                <label>Nom</label>
                <input class="form-control" type="text" name="nom" required>
                <br>
                <label>Prénom</label>
                <input class="form-control" type="text" name="prenom" required>
                <br>
                <label>Civilité</label>
                <br>
                <input type="radio" name="civilite" value="homme" checked> Homme
                <input type="radio" name="civilite" value="femme"> Femme
                <input type="radio" name="civilite" value="other"> Non binaire
                <br>
                <label>Rue</label>
                <input class="form-control" type="text" name="rue" required>
                <br>
                <label>Code Postal</label>
                <input class="form-control" type="number" name="code_postal" required>
                <br>
                <label>Ville</label>
                <input class="form-control" type="text" name="ville" required>
                <br>
                <label>Téléphone</label>
                <input class="form-control" type="tel" name="telephone">
                <br>
                <label>Email</label>
                <input class="form-control" type="email" name="email" required>
                <br>
                <label for="entreprise">Entreprise</label>
                <select id="entreprise" name="entreprise_id">
                    @foreach($entreprises as $entreprise)
                    <option value="{{$entreprise->id}}">{{$entreprise->nom}}</option>
                    @endforeach
                </select>
                <br>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
            @csrf
        </form>
    </div>
@endsection