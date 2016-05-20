<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
        $this->middleware('setnewpassword');
        $this->middleware('protectactivitylog');
	}

    /**
     * Show all users for logging
     */
    public function index()
    {
    	$users = User::paginate(10);

    	return view('activitylog.index', compact('users'));
    }

    /**
     * Show Activity Log for a specific view
     */
    public function show($id)
    {
    	$users = User::find($id);
    	$activitylog = Activity::where('user_id', '=', $id)->latest()->limit(100)->paginate(10);

    	return view('activitylog.show', compact('users', 'activitylog'));
    }
}
