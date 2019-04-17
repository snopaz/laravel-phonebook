@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter une entreprise</h1>

        <form action="{{ action('EntreprisesController@store') }}" method="POST">
            <div class="form-group">
                <label>Nom de l'entreprise</label>
                <input class="form-control" type="text" name="nom" required>
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
                <!-- Appliquer une condition de format de numéro de téléphone Francais ici -->
                <input class="form-control" type="number" name="telephone">
                <br>
                <label>Email</label>
                <input class="form-control" type="email" name="email" required>
                <br>
            <button type="submit" class="btn btn-primary">Ajouter</button>
           </div>
        @csrf
        </form>
    </div>
@endsection