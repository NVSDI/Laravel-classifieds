@extends('master')

@section('title', 'create an ad')

@section('content')
<div class="container">
	<div class="col-6">

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
				<legend>Submit an advert</legend>
				<div class="form-group">
					<label for="title" class="sr-only">Title</label>
					<input type="text" name="ad_title" id="title" placeholder="Title" class="form-controle">
				</div>
				<div class="form-group">
					<label for="description" class="sr-only">Description</label>
					<textarea name="ad_description" class="form-controle" rows="3" id="ad_description"></textarea>
				</div>
				 
				  
				<div class="form-group">
					<input type="hidden" name="img" value="no-image.png"> 
				</div> 

				

				<div class="form-group">
					<!-- 
					<label for="category id">Category id</label>
					<input type="text" name="category_id"> 
					-->
					<select name="category_id">
					  <option value="1">Is Ilanlari/Jobs</option>
					  <option value="2">Kiralik/For Rent</option>
					  <option value="3">Hizmetler/Services</option>
					</select>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>				
				</div>
			</fieldset>
		</form>
	</div>
</div>
@endsection