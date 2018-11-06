@extends('master')

@section('name', 'Register')


@section('content')
	<div class="container">
		<div class="col-3">
			
		</div>
		<div class="col-6">
			<form class="form-horizontal" method="post">	
				
				@foreach ($errors->all() as $error)
					<p class="alert alert-danger"> {{ $error }} </p>
				@endforeach

				{!! csrf_field() !!}	

				<fieldset>
					<legend> Register an account</legend>
					<div class="form-group">
						<label for="name" class="col-3 control-label">Name</label>
						<div class="col-9">
							<input type="text" name="name" class="form-control" id="name" 
							placeholder="Name" value="{{ old('name') }}">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-3 control-label">Email</label>
						<div class="col-9">
							<input type="email" name="email" class="form-control" id="email" 
							placeholder="Email" value="{{ old('email') }}">
						</div>												
					</div>
					
					<div class="form-group">
						<label for="Password" class="col-3 control-label">Password</label>
						<div class="col-9">
							<input type="password" name="password" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-3 control-label">Confirm Passoword</label>
						<div class="col-9">
							<input type="password" name="password_confirmation" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="col-10">
							<button type="submit" class="btn btn-custom">Submit </button>
						</div>
					</div>

				</fieldset>

			</form>
		</div>
		<div class="col-3">
			
		</div>
		
	</div>
@endsection