@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Accueil</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="/entreprise">Consulter la liste des entreprises</a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <a href="/collaborateur">Consulter la liste des collaborateurs</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
