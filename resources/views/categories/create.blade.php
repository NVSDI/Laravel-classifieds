@extends('master')

@section('title', 'create an ad')

@section('content')
<div class="container">
	<div class="col-6">		
		<!--
			Show the form for creating new category
		 -->
		<form class="form-horizontal" method="post">
			<!-- if validation fails, Laravel will store all errors in the session. $errors OBJECT -->
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{ $error }} </p>
			@endforeach
			
			@if(session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif

			<input type="hidden" name="_token" value="{!! csrf_token() !!}">

			<fieldset>
				<legend>Crate a category</legend>
				<div class="form-group">
					<label for="title" class="sr-only">Title</label>
					<input type="text" name="title" id="title" placeholder="Title" class="form-controle">
				</div>
				<div class="form-group">
					<label for="description" class="sr-only">Description</label>
					<textarea name="description" class="form-controle" rows="3" id="description" placeholder="Description"></textarea>
				</div>
				<!-- 
				<div>
					<label for="image">Image</label>
					<input type="text" name="img"> 
				</div> 

				<div class="form-group">
					<label for="image">Parent Category Id</label>
					<input type="text" name="parent_cat_id"> 
				</div>
				-->
				
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>				
				</div>
			</fieldset>
		</form>
	</div>

	<div class="col-6">
		
	</div>
</div>
		
@endsection