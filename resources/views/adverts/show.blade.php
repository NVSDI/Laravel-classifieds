@extends('master')

@section('title', 'View details of single adverts')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">

			<div class="">
				<h2>{!! $advert->ad_title !!}</h2>
				<p>{!! $advert->ad_description !!}</p>
			</div>			
			<?php 
				//var_dump($advert);
				echo '<h3>'. $advert->id .'</h3>';
			?>
			<a href="{!! action('AdvertsController@edit', $advert->id) !!}" class="btn btn-info"> Edit </a>
			
			<form method="post" action="{{ action('AdvertsController@destroy', $advert->id) }}" class="float-left">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div>
					<button type="submit" class="btn btn-warning">Delete</button>
				</div>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>

@endsection