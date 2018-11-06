@extends('master')

@section('title', 'Edit a users')

@section('content')

<div class="container">
	<div class="col-12">

		<form class="form" method="post">
			@foreach($errors->all() as $error )
				<p class="alert alert-danger">
					{{ $error }}
				</p>
			@endforeach

			@if(session('status') )
				<div class="alert alert-success">
					{{ session('status') }}
				</div>				
			@endif

			{!! csrf_field() !!}

			<fieldset>
				<legend>Edit user</legend>

				<div class="form-group">
					<label for="name" class="col-2">Name</label>
					<div class="col-10">
						<input type="text" class="form-control" name="name" value="{{ $user->name }}">
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-2" control-label>Email</label>
					<div class="col-10">
						<input type="email" class="form-control" name="email" value="{{ $user->email }}">
					</div>
				</div>

				<div class="form-group">
					<label for="select" class="col-2">Role</label>
					<div class="col-10">
						<select class="form-control" id="role" name="role[]" multiple>
							@foreach($roles as $role)
								<option value="{!! $role->name !!}" 
									@if(in_array($role->name, $selectedRoles)) selected="selected" 
									@endif>
									
									{!! $role->name !!}
								</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-2">Password</label>
					<div class="col-10">
						<input type="password" class="form-control" name="password">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-2">Confirm Password</label>
					<div class="col-10">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">					
					<div class="col-10">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>

				
			</fieldset>
		</form>
		
	</div>	
</div>
@endsection