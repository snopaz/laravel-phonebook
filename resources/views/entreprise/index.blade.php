@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Entreprises</h1>
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
		@endforeach
	@else
		<p>Il n'y a pas d'entreprises dans la base de données</p>
	@endif
</div>
@endsection