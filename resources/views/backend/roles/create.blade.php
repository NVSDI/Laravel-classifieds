@extends('master')

@section('title', 'Create a new role')


@section('content')

<div class="container">
	<div class="col-12">
		<form class="form" method="post">
			@foreach($errors->all() as $error)
				<p class="alert alert-danger"> {{ $error }} </p>
			@endforeach

			@if(session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif

			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			
			<fieldset>
				<legend>Create a new role</legend>
				<div class="form-group">
					<label for="name" class="col-2">Name</label>
					<div class="col-10">
						<input type="text" name="name" id="name">
					</div>
				</div>

				<div class="form-group">
					<div class="col-10">
						<button type="submit" class="btn btn-primary"> Submit </button>
					</div>
				</div>
			</fieldset>

		</form>
	</div>
</div>
@endsection