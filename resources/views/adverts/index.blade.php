@extends('master')


@section('title', 'View all adverts')


@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Adverts</h2>
			</div>
			@if($adverts->isEmpty()) 
				<p>No ads</p>
			@else 
			@if(session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>						
						</tr>	
					</thead>
					<tbody>
						@foreach($adverts as $advert)
						<tr>
							<td>{!! $advert->id !!}</td>
							<td>
								<!-- <a href="/advert/{!! $advert->id !!}">  -->
								<a href="{!! action('AdvertsController@show', $advert->id) !!}">
									{!! $advert->ad_title !!} 
								</a>
							</td>
							<!-- TO DO:: fetch excerpt from description -->							
						</tr>
						@endforeach
					</tbody>
					
				</table>
			@endif

		</div>
	</div>

@endsection