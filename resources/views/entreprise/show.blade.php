@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row justify-content-center">
     	  <div class="col-md-8">
	       <div class="card">
	              <div class="card-header">{{$entreprise->nom}}</div>
		                    <div class="card-body">
				       @foreach($entreprises as $entreprise)
				               <div class="well">
				               </div>
				       @endforeach
				     </div>
		       </div>
		</div>
	</div>
</div>
@endsection