@extends('header.header')

@section('content')
	<div class="container pt-4">

		<div class="row">
			<div class="col-sm-12">
				<h1>Create Your Profile</h1>
				<form action="{{ route('Login.login')}}" method="POST" style="padding-top:20px;">
					{{ csrf_field() }}
					<div class="">
						<label>Username</label>
						<input type="text" name="name" id="user" class="form-control" required />
					</div>
					<div class="">
						<label>Password</label>
						<input type="password" id="pw" name="password" class="form-control" required/>
					</div>

					<div class="">
						<label>Email</label>
						<input type="email" id="pw" name="email" class="form-control" required/>
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
						<input class="btn btn-success pl-2 pr-2" type="submit" value="Submit" class="form-control" />
						<a class="btn btn-danger pl-2 pr-2" style="float:right;margin-top:10px" href="{{ route('cancel')}}">Cancel</a>
					</div>
					
				</form>

			</div>
			
		</div>
		
	</div>

@endsection