@extends('master')

@section('title')
Activity Log
@endsection

@section('pagetitle')
Activity log
<small>What's everyone been up to?</small>
@endsection

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li class="active">Activity Log</li>
@endsection

@section('content')
<!-- Your Page Content Here -->
  <div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="table-responsive">
	        <table class="table table-bordered table-striped">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>Username</th>
	                    <th></th>
	                </tr>
	            </thead>
	 
	            <tbody>
	                @foreach ($users as $user)
	                <tr>
	                	<td>{{ $user->id }}</td>
	                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
	                    <td><a href="activitylog/{{ $user->id }}" class="btn btn-info pull-right" style="margin-right: 3px;">Show</a></td>
	                </tr>
	                @endforeach
	            </tbody>
	 
	        </table>
	    </div>
	    {!! $users->render() !!}
	</div>
  </div>
@endsection