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
	return View::make('hello');
});

Route::get('test', function()
{
    return 'testnow!';
});

Route::get('gouda', 'HomeController@showGouda');

Route::get('boards', 'TestController@getBoards');
Route::post('boards/add', 'TestController@addBoards');