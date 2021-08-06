@extends('header.header')


@section('content')

	<div class="container pt-4">

		<div class="row">
			<div class="col-sm-12">
				<h1>Update your Information</h1>
				@foreach($results as $result)
				<form action="{{ route('Login.edit',$result->id)}}" method="POST" style="padding-top:20px;">
						
					@csrf

					<input type="hidden" value="{{ $result->id}}" name="name"  />
					
					<div class="">
						<label>Username</label>
						<input type="text" value="{{ $result->name}}" name="name"  class="form-control" />
					</div>					

					<div class="">
						<label>Email</label>
						<input type="email" value="{{ $result->email}}" name="email" class="form-control" />
					</div>

					<div class="">
						<label>State</label>
						<select name="state" class="form-control" onchange="statename(this.value)">
							<option selected="">{{ $result->state}}</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="UP">UP</option>
						</select>
					</div>

					<div class="">
						<label>City</label>
						<select name="city" class="form-control">
							<option selected="">{{ $result->city}}</option>
							<option value="Lukhnow">Lukhnow</option>
							<option value="jhansi">jhansi</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Pune">Pune</option>
							
						</select>
					</div>

					<div class="">						
						<input type="submit" value="Submit" class="form-control" />
					</div>
					
					
				</form>
				@endforeach

			</div>
			
		</div>
		
	</div>

@endsection