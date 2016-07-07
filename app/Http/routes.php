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

//CSR routes
Route::get('/mystats', 'StatsController@mystats');
Route::get('/teamstats', 'StatsController@teamstats');

//Manager routes
Route::get('/allteamstats', 'ManagerStatsController@allteamstats');
Route::get('/allteamstats/{team}', 'ManagerStatsController@allteamdirectory');
Route::get('/allteamstats/{team}/{id}', 'ManagerStatsController@viewstats');

//Sidebar change state
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

Route::get('/funfacts', 'HomeController@funfacts');