@extends('master')

@section('title', 'Show ads by category')

@section('content')

	<h1>Adverts by category</h1>
	
	<?php
	/*  
		foreach ($adverts as $key => $advert) {
			echo "<h3> $key :: $advert";
			echo '<h3>'. $advert->id .'</h3>';
			echo '<h4>'. $advert->title .'</h4>';
			echo '<p>'. $advert->description .'</p>';
		}
		*/
	?>

	@foreach($adverts as $ad)
		<h3>{!! $ad->id !!}</h3>
		<h3>{!! $ad->title !!}</h3>
		<h3>{!! $ad->description !!}</p>		
	@endforeach

@endsection