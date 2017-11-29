@extends('layouts.app')

@section('content')

<div class="container">
	
	<div class="row">

	    <div class="col-md-3 mt-5">
	       
	        <div class="card">

	            <div class="card-body">
	  
	                <img src="{{ Storage::url($profile->avatar) }}" alt="{{ $profile->name }} Username" class="img-fluid rounded-circle">
	  
	                <h3 class="text-md-center mt-4">{{ $profile->name }}</h3>
	  
	            </div>
	            
	        </div>

	        <hr>

	        <div class="card">
	        	<a href="/profile/create" class="btn btn-success">Upload Avatar</a>
	        </div>
	  
	    </div>

	</div>

</div>

@endsection