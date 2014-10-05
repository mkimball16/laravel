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

Route::get('/', function()
{
	return 'Hello World!';
	//return View::make('hello');
});

Route::get('/howdy', function()
{
	return "Howdy";
});

Route::get('/books/{category}', function($category)
{
	return "Here are all the books in the category:" ".category";
});