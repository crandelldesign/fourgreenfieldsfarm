<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Old Site Redirects */
Route::get('index.html', function()
{
	return Redirect::to('/', 301);
});
Route::get('directions.html', function()
{
	return Redirect::to('/directions', 301);
});
Route::get('farm-history.html', function()
{
	return Redirect::to('/farm-history', 301);
});
Route::get('maple-syrup.html', function()
{
	return Redirect::to('/maple-syrup', 301);
});
Route::get('honey.html', function()
{
	return Redirect::to('/honey', 301);
});
Route::get('pumpkin_patch.html', function()
{
	return Redirect::to('/pumpkin-patch', 301);
});
Route::get('maze.html', function()
{
	return Redirect::to('/maze', 301);
});
Route::get('building_maze.html', function()
{
	return Redirect::to('/building-the-maze', 301);
});
Route::get('haunted_maze.html', function()
{
	return Redirect::to('/haunted-maze', 301);
});
Route::get('rides.php', function()
{
	return Redirect::to('/rides', 301);
});
Route::get('/events/index.php', function()
{
	return Redirect::to('/events', 301);
});
Route::get('/events/admin/index.php', function()
{
	return Redirect::to('/events/admin', 301);
});
Route::get('mail.php', function()
{
	return Redirect::to('/', 301);
});

Route::controller('/api', 'ApiController');
Route::controller('/events/admin', 'AdminController');
Route::controller('/', 'HomeController');

App::missing(function($exception)
{
	return Response::view('home.404', array(), 404);
});