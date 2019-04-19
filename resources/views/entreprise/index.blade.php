@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Entreprises</h1>
	<div>
	@if(Auth::user()->getAuthIdentifier() == 1 || Auth::user()->getAuthIdentifier() == 2)
		<div class="row justify-content-center">
			<a href="/entreprise/create" class="btn btn-primary">Ajouter une entreprise</a>
		</div>
		<br>
	@endif
	<form action="/entreprise" method="GET">
		<div class="input-group row justify-content-center">
			<input type="search" name="search" class="col-5 form-control">
			<button type="submit" class="btn btn-primary col-2">Rechercher</button>
		</div>
	</form>
	<br>
	@if(count($entreprises) >= 1)
		@foreach($entreprises as $entreprise)
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
       					<div class="card-header"><a href="/entreprise/{{$entreprise->id}}">{{$entreprise->nom}}</a></div>
     						<div class="card-body">
								<div class="well">
									<ul>
										<li>{{$entreprise->rue}}</li>
										<li>{{$entreprise->code_postal}}</li>
										<li>{{$entreprise->ville}}</li>
										@if ($entreprise->telephone != NULL)
											<li>{{$entreprise->telephone}}</li>
										@endif
										<li>{{$entreprise->email}}</li>
									</ul>
	      						</div>
							</div>
					</div>
				</div>
			</div>
			<br>
		@endforeach
		<div class="row justify-content-center">
			{{ $entreprises->links() }}
		</div>
	@else
		<div class="well text-center">
			<p>Il n'y a pas d'entreprises dans la base de données</p>
		</div>
	@endif
</div>
@endsection