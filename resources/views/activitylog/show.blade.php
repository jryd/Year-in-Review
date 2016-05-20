@extends('master')

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li><a href="{{ url('/activitylog') }}">Activity Log</a></li>
<li class="active">{{ $users->first_name }} {{ $users->last_name }}</li>
@endsection

@section('content')
<!-- Your Page Content Here -->
  <div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h3><i class="fa fa-users"></i> Activity Log - {{ $users->first_name }} {{ $users->last_name }}</h3>
	    <div class="table-responsive">
	        <table class="table table-bordered table-striped">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>User ID</th>
	                    <th>Text</th>
	                    <th>IP Address</th>
	                    <th>Logged At</th>
	                </tr>
	            </thead>
	 
	            <tbody>
	                @foreach ($activitylog as $activity)
	                <tr>
	                	<td>{{ $activity->id }}</td>
	                    <td>{{ $activity->user_id }}</td>
	                    <td>{{ $activity->text }}</td>
	                    <td>{{ $activity->ip_address }}</td>
	                    <td>{{ $activity->created_at }}</td>
	                </tr>
	                @endforeach
	            </tbody>
	 
	        </table>
	    </div>
	    {!! $activitylog->render() !!}
	</div>
  </div>
@endsection