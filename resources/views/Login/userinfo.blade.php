@extends('header.header')

@section('content')
<div class="container pt-4">

	<div class="row">
		<div class="col-sm-12">				

			<h1>User Information</h1>

			<table style="width:100%">					
				@foreach($results as $result)

				<tr><td>Name</td><td>{{ $result->name }}</td></tr>
				<tr><td>Email</td><td>{{ $result->email}}</td></tr>
				<tr><td>State</td><td>{{ $result->state}}</td></tr>
				<tr><td>City</td><td>{{ $result->city}}</td></tr>
				
				@endforeach
				
			</table>

		</div>
		
	</div>
	
</div>
@endsection