<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Activity;
use App\User;
use App\CumulativeStats;
use App\RawStats;

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
        Activity::log('Page View: Team Stats');
        return view('stats.teamstats');
    }
}
