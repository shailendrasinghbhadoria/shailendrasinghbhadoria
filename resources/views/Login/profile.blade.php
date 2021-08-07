@extends('header.header')

@section('content')
	<div class="container pt-4">

		<div class="row">
			<div class="col-sm-12">
				<h1>Create Your Profile</h1>
				<form action="{{ route('Login.profile')}}" method="POST" style="padding-top:20px;">
					{{ csrf_field() }}
					<div class="">
						<label>Full Name</label>
						<input type="text" name="name" class="form-control" required />
					</div>					

					<div class="">
						<label>Address</label>
						<input type="text"  name="address" class="form-control" required/>
					</div>

					<div class="">
						<label>State</label>
						<select name="state" class="form-control" id="state" required onchange="statename(this.value)">
							<option selected="">Please Select</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="UP">UP</option>
						</select>
					</div>

					<div class="">
						<label>City</label>
						<select name="city" class="form-control" required id="city">
							<option >Please Select</option>
							<option value="Lukhnow">Lukhnow</option>
							<option value="jhansi">jhansi</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Pune">Pune</option>
							
						</select>
					</div>
					<div class="">
						<label>Zip Code</label>
						<input type="number"  name="zip" class="form-control" required/>
					</div>

					<div class="">						
						<input class="btn btn-success pl-2 pr-2" type="submit" value="Submit" class="form-control" />
						<a class="btn btn-danger pl-2 pr-2" style="float:right;margin-top:10px" href="{{ route('cancel')}}">Cancel</a>
					</div>
					
				</form>

			</div>
			
		</div>
		
	</div>

@endsection