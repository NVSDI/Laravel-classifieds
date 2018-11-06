<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', function () {
    // return view('welcome');
    return view('home');
}); 

Route::get('categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@show');
// STOPPED WORKING -Route::get('/categories/create', 'CategoriesController@create'); // show form
// sTOPPED WORKING - Route::post('/categories/create', 'CategoriesController@store'); // show form



Route::get('/create', 'AdvertsController@create'); // show form
Route::post('/create', 'AdvertsController@store'); // POST form for storage 

Route::get('/adverts', 'AdvertsController@index'); 		// swho all adverts
// When user clicks on advert Title <a> link, he arrives to following Route
Route::get('/advert/{id?}', 'AdvertsController@show');	// show single advert details. 

// this editing should be accessible ONLY to authenticated. For now Disable Editing Route
Route::get('/advert/{id}/edit', 'AdvertsController@edit'); // GET
Route::post('/advert/{id}/edit', 'AdvertsController@update'); // POST
Route::post('/advert/{id}/delete', 'AdvertsController@destroy');  

// ---- AUTH -----
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');

Route::get('users/logout', 'Auth\LoginController@logout');
// Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');//Laravel expects /login, not /users/login
Route::post('users/login', 'Auth\LoginController@login');

/* 
Route::group( 
	array('prefix' =>'admin', 'namespace'=>'Admin', 'middleware'=>'manager'), 
	function() {Route::get('users', 'UsersController@index'); } 
); 
*/
Route::group( 
	array('prefix' =>'admin', 'namespace'=>'Admin', 'middleware'=>'manager'), 
	function() {
		Route::get('users', ['as'=>'admin.user.index', 'uses'=> 'UsersController@index'] ); 		
		Route::get('users/{id?}/edit', 'UsersController@edit');
		Route::post('users/{id?}/edit', 'UsersController@update');

		Route::get('roles', 'RolesController@index');
		Route::get('roles/create', 'RolesController@create');
		Route::post('roles/create', 'RolesController@store');

		// Allow creation of categories only to Manager USERS
		Route::get('/createnew/category', 'CategoriesController@create'); // show form
		Route::post('/createnew/category', 'CategoriesController@store'); // show form

		Route::get('/', 'PagesController@home');
		
	}

);