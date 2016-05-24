<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Activity;
use App\CumulativeStats;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('setnewpassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = CumulativeStats::find(1);
        $emails = $stats->emails;
        $cs_email_avg = $stats->cs_email_average;
        $emails_pp_avg = $stats->email_per_person_average;
        $calls = $stats->calls;
        $calls_pp_avg = $stats->call_per_person_average;
        $development = $stats->development;
        $extra_tasks = $stats->extra_tasks;
        
        
        Activity::log('Page View: Home');
        return view('home.home', compact('emails', 'cs_email_avg', 'emails_pp_avg', 'calls', 'calls_pp_avg', 'development', 'extra_tasks'));
    }
}
