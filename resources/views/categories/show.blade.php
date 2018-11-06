@extends('master')

@section('title', 'Show ads by category')

@section('content')


<div class="container"> 
		
	<div class="col-7 bg">		
			<?php 
			/*
			echo $category; 
			
			{
				"id":1,
				"title":"jobs",
				"description":"lovely jobs for lovely",
				"img":"example.jpg",
				"parent_category_id":null,
				"created_at":"2018-10-21 18:12:16",
				"updated_at":"2018-10-21 18:12:16"
			}
			*/
			// echo '<h1>'. $category->title .'</h1>';
		?>

		<h1>{!! $category->title !!}</h1>		

		@foreach($adverts as $ad)
			<!-- <p>{!! $ad->id !!}</p> -->
			<h3>{!! $ad->ad_title !!}</h3>
			<p>{!! $ad->ad_description !!}</p>		
			<hr/>
		@endforeach		
	</div>	
	<div class="col-2">
			<!-- {{ asset('img/no-image.png') }} 
				<img src="<?php ///echo asset("storage/app/$myTheory->image")?>"></img>
			-->

			<!-- <img src="{{ asset('img/no-image.png') }} " class="img-responsive"></img> --> 
	</div>
	<div class="col-3">
			
	</div>
</div>
@endsection