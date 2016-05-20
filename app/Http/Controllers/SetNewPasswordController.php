<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Redirect;
use Input;
use Activity;
use App\User;
use Flash;
use Auth;
use Hash;

class SetNewPasswordController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Return view to set new password
     */
    public function index()
    {
    	Activity::log('Page View: set new password');
    	return view('newpassword.setnewpassword');
    }

    /**
     * Return view to set new password
     */
    public function savePassword(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'password' => 'required|confirmed|min:6',
        ], [
            'password.required' => 'Please enter a new password!',
            'password.confirmed' => "Your new passwords don't match!",
            'password.min' => 'Your new password must be a minimum of 6 characters!',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator);
        }

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->password_is_admin_set = 0;
        $user->save();

        Activity::log('User set new password.');

        Flash::success('Your password was successfully updated.');

        return redirect('/');
    }
}
