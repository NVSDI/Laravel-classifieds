@extends('master')

@section('title', 'Admin control Panel')


@section('content')
	
	<div class="container">
		<div  class="col-12">
			
			<a href="/admin/roles/create">Create A Role</a> <br/>			
			<a href="/admin/createnew/category">Crete New Category</a><br/>
			<a href="/admin/roles">All Roles</a><br/>
			<a href="/admin/users">All users</a><br/>

			<a href="/categories">View Categories</a> <br/>
		</div>
	</div>
@endsection