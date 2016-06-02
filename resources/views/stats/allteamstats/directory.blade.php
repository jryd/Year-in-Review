@extends('master')

@section('title')
Pick a team member
@endsection

@section('pagetitle')
Pick a team member
<small>Who's stats do you want to view?</small>
@endsection

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li><a href="{{ url('/allteamstats') }}"><i class="fa fa-line-chart"></i> All Team Stats</a></li>
<li class="active"><i class="fa fa-user"></i> Pick a team member</a></li>
@endsection

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Team Members</h3>

              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Team Member</th>
                  <th></th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                  <td><a href="{{ url('/allteamstats/' . $team . '/' . $user->id) }}" class="btn btn-primary pull-right">View</a></td>
                </tr>
             	@endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <a href="{{ url('/allteamstats/' . $team . '/all') }}" class="btn btn-primary">View full team stats</a>
	</div>
</div>
@endsection