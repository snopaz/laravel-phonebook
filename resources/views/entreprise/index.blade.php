@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row justify-content-center">
     	  <div class="col-md-8">
	       <div class="card">
	       	    <div class="card-header">Entreprises</div>
		    	 <div class="card-body">
               		      @if(count($entreprises) > 1)
			        @foreach($entreprises as $entreprise)
					<div class="well">
					     <h3><a href="/entreprise/{{$entreprise->id}}">{{$entreprise->nom}}</a></h3>
	      				</div>
				@endforeach
			      @else
				<p>Il n'y a pas d'entreprises dans la base de données</p>
			      @endif
			 </div>
		    </div>
	       </div>
	   </div>
</div>
@endsection