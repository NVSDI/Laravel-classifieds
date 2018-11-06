@extends('master')

@section('title', 'All categories')


@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Show all categories here</h1>

            @if($categories->isEmpty()) 
                <p>No category</p>
            @endif
            
            @foreach($categories as $category)

                <a href="{!! action('CategoriesController@show', $category->id) !!}">
                    {!! $category->id !!} 
                </a> 
                <p>{!! $category->title !!}</p>         
                
            @endforeach
        </div>
    </div>

@endsection