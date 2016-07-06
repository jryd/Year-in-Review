<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Activity;
use App\User;
use App\CumulativeStats;
use App\RawStats;
use Auth;
use App\TeamStats;

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
        $cumulativestats = CumulativeStats::find(1);
        Activity::log('Page View: My Stats');
        return view('stats.individualstats', compact('cumulativestats'));
    }
    
    /**
     * Show the team stats dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function teamstats()
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 5)
        {
            //Day Crew
            $team = TeamStats::where('role_id',1)->first();
        }
        elseif (Auth::user()->role_id == 2 || Auth::user()->role_id == 6)
        {
            //Evening Crew One
            $team = TeamStats::where('role_id',2)->first();
        }
        elseif (Auth::user()->role_id == 3 || Auth::user()->role_id == 7)
        {
            //Evening Crew Two
            $team = TeamStats::where('role_id',3)->first();
        }
        elseif (Auth::user()->role_id == 4 || Auth::user()->role_id == 8)
        {
            //Nightwalker
            $team = TeamStats::where('role_id',4)->first();
        }
        else
        {
            flash()->error("You don't manage a team directly, please access team stats via 'All Team Stats' on the left.");
            return redirect('/');
        }

        $cumulative = CumulativeStats::find(1);
        Activity::log('Page View: Team Stats');
        return view('stats.teamstats', compact('team', 'cumulative'));
    }
}
