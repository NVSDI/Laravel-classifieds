<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;

use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function index() 
    {
    	$users = User::all();
    	return view('backend.users.index', compact('users') );
    }


    public function edit($id) 
    {
    	$user = User::whereId($id)->firstOrFail();

    	$roles = Role::all();

    	$selectedRoles = $user->roles()->pluck('name')->toArray(); // get current role's names of users

    	return view('backend.users.edit', compact('user', 'roles', 'selectedRoles'));

    }


    public function update($id, UserEditFormRequest $request) 
    {
    	$user = User::whereId($id)->firstOrFail();
    	$user->name = $request->get('name');
    	$user->email = $request->get('email');
    	$password = $request->get('password');

    	if($password != "") { // Save the password only if user has entered a new passowrd
    		$user->password = Has::make($password);
    	}
    	
    	$user->save();

    	// SyncRoles() is "laravel-permission package" methd which can be used to automatically sync(attach and detach) multiple roles.
    	// It will retrieve the $role array, which contains roles' ID, and attach the appropriate roles to the user. 
    	// if not role, it will detach the role from the user
    	$user->syncRoles($request->get('role'));

    	return redirect(
    		action('Admin\UsersController@edit', $user->id) )->with('status', 'The user has been updated');

    }


}
