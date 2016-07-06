@extends('master')

@section('title')
Pick a Team
@endsection

@section('pagetitle')
Pick a Team
<small>Which teams stats do you want to view?</small>
@endsection

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li class="active"><i class="fa fa-line-chart"></i> All Team Stats</a></li>
@endsection

@section('content')
<div class="row">
	    <div class="col-md-3">
	    	<div class="small-box bg-orange">
	            <div class="inner">
	              <h3>{{ \App\User::where('role_id', '=', 1)->count() }}<sup style="font-size: 20px"> Superstars</sup></h3>

	              <p>Day Crew</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-ios-sunny-outline"></i>
	            </div>
	            <a href="{{ url('/allteamstats/daycrew') }}" class="small-box-footer">
	              View Stats <i class="fa fa-arrow-circle-right"></i>
	            </a>
          </div>
	    </div>
	    <div class="col-md-3">
	        <div class="small-box bg-aqua">
	            <div class="inner">
	              <h3>{{ \App\User::where('role_id', '=', 2)->count() }}<sup style="font-size: 20px"> Superstars</sup></h3>

	              <p>Evening Crew One</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-ios-moon-outline"></i>
	            </div>
	            <a href="{{ url('/allteamstats/eveningcrewone') }}" class="small-box-footer">
	              View Stats <i class="fa fa-arrow-circle-right"></i>
	            </a>
          	</div>
	    </div>
	    <div class="col-md-3">
	        <div class="small-box bg-aqua">
	            <div class="inner">
	              <h3>{{ \App\User::where('role_id', '=', 3)->count() }}<sup style="font-size: 20px"> Superstars</sup></h3>

	              <p>Evening Crew Two</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-ios-moon-outline"></i>
	            </div>
	            <a href="{{ url('/allteamstats/eveningcrewtwo') }}" class="small-box-footer">
	              View Stats <i class="fa fa-arrow-circle-right"></i>
	            </a>
          	</div>
	    </div>
	    <div class="col-md-3">
	        <div class="small-box bg-blue">
	            <div class="inner">
	              <h3>{{ \App\User::where('role_id', '=', 4)->count() }}<sup style="font-size: 20px"> Superstars</sup></h3>

	              <p>Nightwalkers</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-ios-star-outline"></i>
	            </div>
	            <a href="{{ url('/allteamstats/nightwalkers') }}" class="small-box-footer">
	              View Stats <i class="fa fa-arrow-circle-right"></i>
	            </a>
          	</div>
	    </div>
	</div>
@endsection