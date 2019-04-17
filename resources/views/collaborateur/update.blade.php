@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editer un collaborateur</h1>

        <form action="{{ action('CollaborateursController@update', ['id' => $collaborateur->id]) }}" method="POST">
            <div class="form-group">
                <label>Nom</label>
                <input class="form-control" type="text" name="nom" value="{{$collaborateur->nom}}"required>
                <br>
                <label>Prénom</label>
                <input class="form-control" type="text" name="prenom" value="{{$collaborateur->prenom}}" required>
                <br>
                <label>Civilité</label>
                <br>
                <input type="radio" name="civilite" value="homme" checked> Homme
                <input type="radio" name="civilite" value="femme"> Femme
                <input type="radio" name="civilite" value="other"> Non binaire
                <br>
                <label>Rue</label>
                <input class="form-control" type="text" name="rue" value="{{$collaborateur->rue}}" required>
                <br>
                <label>Code Postal</label>
                <input class="form-control" type="number" name="code_postal" value="{{$collaborateur->code_postal}}"required>
                <br>
                <label>Ville</label>
                <input class="form-control" type="text" name="ville" value="{{$collaborateur->ville}}" required>
                <br>
                <label>Téléphone</label>
                <!-- Appliquer une condition de format de numéro de téléphone Francais ici -->
                <input class="form-control" type="number" name="telephone" value="{{$collaborateur->telephone}}">
                <br>
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="{{$collaborateur->email}}" required>
                <br>
                <label for="entreprise">Entreprise</label>
                <select id="entreprise" name="entreprise_id">
                    @foreach($entreprises as $entreprise)
                        <option value="{{$entreprise->id}}">{{$entreprise->nom}}</option>
                    @endforeach
                </select>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Editer</button>
                </div>
            </div>
            @method('PUT')
            @csrf
        </form>
    </div>
@endsection