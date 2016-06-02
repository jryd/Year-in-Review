<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Activity;
use App\User;

class StatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('setnewpassword');
    }
    
    /**
     * Show the stats dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function mystats()
    {
        Activity::log('Page View: My Stats');
        return view('stats.individualstats');
    }
    
    /**
     * Show the team stats dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function teamstats()
    {
        Activity::log('Page View: Team Stats');
        return view('stats.teamstats');
    }

    /**
     * Show all team stats dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function allteamstats()
    {
        Activity::log('Page View: All Team Stats index');
        return view('stats.allteamstats.index');
    }

    /**
     * Show team stats directory.
     *
     * @return \Illuminate\Http\Response
     */
    public function allteamdirectory($team)
    {
        if ($team == 'daycrew')
        {
            $users = User::where('role_id', '=', 1)->get();
        }
        elseif ($team == 'eveningcrewone')
        {
            $users = User::where('role_id', '=', 2)->get();
        }
        elseif ($team == 'eveningcrewtwo')
        {
            $users = User::where('role_id', '=', 3)->get();
        }
        elseif ($team == 'nightwalkers')
        {
            $users = User::where('role_id', '=', 4)->get();
        }
        else
        {
            flash()->error('Invalid team name.');
            \Redirect::back();
        }

        Activity::log('Page View: All Team Stats directory for ' . $team);
        return view('stats.allteamstats.directory', compact('users', 'team'));
    }

    /**
     * Show the stats for the chosen person/team
     *
     * @return \Illuminate\Http\Response
     */
    public function viewstats($team, $id)
    {
        $user = User::find($id);

        if (is_null($user))
        {
            if($id == 'all')
            {
                //aggregate team stats
            }
            else
            {
                flash()->error('Invalid user.');
                \Redirect::back();
            }
        }
        else
        {
            Activity::log('Page View: ' . $user->first_name . ' ' . $user->last_name . ' through All Team Stats');
            return view('stats.allteamstats.individual', compact('user'));
        }
        Activity::log('Page View: All Team Stats index');
        return view('stats.allteamstats.index');
    }
}
