@extends('header.header')

@section('content')
	<div class="container pt-4" style="padding-top: 5%;">
		@if($message = Session::get('error'))

				<div class="alert alert-danger">
					<p>{{ $message }}</p>
					
				</div>
				@endif

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" style="background:#00adff96;padding: 20px;padding-top: 0;">
				<h1 class="text-center">Login</h1>
				<form action="{{ route('Login.signin')}}" method="POST" style="padding-top:20px;">
					{{ csrf_field() }}
					<div class="">
						<label>Username</label>
						<input type="text" name="name" id="user" required="" class="form-control" />
					</div>
					<div class="">
						<label>Password</label>
						<input type="password" id="pw" name="password" required="" class="form-control" />
					</div>					

					<div class="">						
						<input class="btn btn-success pl-2 pr-2" type="submit" value="Login" class="form-control" />
						<a style="float:right;margin-top:10px" href="{{ route('Login.login') }}" class="btn btn-primary">Sign Up</a>
					</div>
					
				</form>

			</div>
			
		</div>
		
	</div>

@endsection
@push('css')
<style type="text/css">
.header, .footer_center{display: none}
</style>

@endpush