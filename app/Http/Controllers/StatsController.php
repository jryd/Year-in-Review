<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Activity;

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
}
