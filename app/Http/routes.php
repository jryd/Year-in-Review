<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/setnewpassword', 'SetNewPasswordController@index');
Route::post('/setnewpassword', 'SetNewPasswordController@savePassword');

Route::get('/activitylog', 'ActivityLogController@index');
Route::get('/activitylog/{id}', 'ActivityLogController@show');

Route::get('/mystats', 'StatsController@mystats');
Route::get('/teamstats', 'StatsController@teamstats');

Route::post('/sidebar/changestate', function() {
	$user = \App\User::find(\Auth::user()->id);
	if ($user->sidebar_min == 0)
	{
		$user->sidebar_min = 1;
		$user->save();
		return "success";
	}
	else
	{
		$user->sidebar_min = 0;
		$user->save();
		return "success";
	}
});

Route::get('/test', function() {
	$first_name = 'James';
	$email = 'blah';
	$password = 'lolcats';
	return view('auth.emails.account', compact('first_name', 'email', 'password'));
});