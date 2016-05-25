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
    public function index()
    {
        Activity::log('Page View: My Stats');
        return view('stats.individualstats');
    }
}
