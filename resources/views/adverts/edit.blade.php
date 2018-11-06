@extends('master')

@section('title', 'create an ad')

@section('content')
<div class="container col-md-8 col-md-offset-2">
	<div class="well well bs-component">

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
				<legend>Edit an advert</legend>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="ad_title" id="title" placeholder="Title" c
						value="{!! $advert->ad_title !!}" lass="form-controle">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="ad_description" class="form-controle" rows="3" id="ad_description">
						{!! $advert->ad_description !!}
					</textarea>
				</div>

				<!--
				<div class="form-group">
					<label for="image">Image</label>
					<input type="text" name="img"> 
				</div>
				 
				<div class="form-group">
					<label for="category id">Category id</label>
					<input type="text" name="category_id">  
					<select name="category_id">
					  <option value="1">Is Ilanlari/Jobs</option>
					  <option value="2">Kiralik/For Rent</option>
					  <option value="3">Hizmetler/Services</option>
					  <option value="4">Genel Ilanlar</option>
					</select>

				</div> 
				-->
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset">
						<button class="btn btn-default">Cancel</button>
						<button class="btn btn-primary" type="submit">Update</button>
					</div>				
				</div>
			</fieldset>
		</form>
	</div>
</div>
@endsection