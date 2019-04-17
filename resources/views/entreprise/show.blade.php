@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row justify-content-center">
     	  <div class="col-md-8">
	       <div class="card">
			   <div class="card-header text-center">{{$entreprise->nom}}</div>
					<ul>
						<li>{{$entreprise->rue}}</li>
						<li>{{$entreprise->code_postal}}</li>
						<li>{{$entreprise->ville}}</li>
						@if ($entreprise->telephone != NULL)
							<li>{{$entreprise->telephone}}</li>
						@endif
						<li>{{$entreprise->email}}</li>
					</ul>
				   <div class="text-center">
					   <a href="/entreprise/update/{{$entreprise->id}}" class="btn btn-primary">Editer</a>
					   <a href="/entreprise/delete/{{$entreprise->id}}" class="btn btn-danger">Supprimer</a>
			   		</div>
			   		<br>
		       </div>
			  <br>
		  </div>
	</div>
</div>
@endsection