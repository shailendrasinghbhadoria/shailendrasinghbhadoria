@extends('header.header')



@section('content')
	<div class="container pt-4">

		<div class="row">
			<div class="col-sm-6">
				<h1>User Information</h1>
			</div>
			<div class="col-sm-6 text-right">
				<a style="margin-top:20px;margin-right: 20px;" href="{{ route('Login.login') }}" class="btn btn-primary">Sign Up</a>

				<a style="float:right;margin-top:20px" href="{{ route('Login.signin') }}" class="btn btn-success">Login</a>
				
			</div>
			
		</div>

		<div class="row" style="padding:20px 0">
			<div class="col-sm-12">
				@if($message = Session::get('success'))

				<div class="alert alert-success">
					<p>{{ $message }}</p>
					
				</div>
				@endif				

				<table style="width:100%">
					<thead>
						<tr>
						<th width="15%">Id</th>						
						<th width="15%">Username</th>
						<th width="20%">Email</th>
						<th width="15%">State</th>
						<th width="15%">City</th>
						<th width="20%">Action</th>
						</tr>
					</thead>
					@php

					$i=1;

					@endphp					
					@foreach($results as $result)
					<tr>

						<td>{{ $i++ }}</td>
						<td>{{ $result->name }}</td>
						<td>{{ $result->email}}</td>
						<td>{{ $result->state}}</td>
						<td>{{ $result->city}}</td>
						<td>
							<a href="{{ route('Login.userinfo',$result->id)}}" class="btn btn-info"  style="color:#fff">Show</a>&nbsp;&nbsp;<a href="{{ route('Login.edit',$result->id)}}" class="btn btn-primary"  style="color:#fff">Edit</a>&nbsp;&nbsp;
							<a href="{{ route('Login.destroy',$result->id)}}" class="btn btn-danger"  style="color:#fff">Delete</a>

							
					</tr>
					@endforeach
					
				</table>


				

			</div>
			
		</div>
		
	</div>

@endsection

{{--@extends('foooter.footer')--}}
@push('script')
	<script type="text/javascript">
		
		function statename(data){			

			var req = new XMLHttpRequest();
			req.open("Get","http://localhost:8080/checkmailtest/checkmail.php?datavalue="+data,true);
			req.send();

			req.onreadystatechange=function(){

				if (req.readyState==4 && req.status==200) {
					document.getElementById('city').innerHTML = req.responseText;
				}
			}

		}
	</script>
@endpush
