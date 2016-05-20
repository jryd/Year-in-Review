@extends('master')

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li class="active">Set new password</li>
@endsection

@section('content')
<!-- Your Page Content Here -->
  <div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div style="text-align: center; vertical-align: center;">
			<h3>Pick a new password</h3>
			<p>To keep things safe and secure, please pick your own password.</p>
			@if (count($errors) > 0)
	            <div class="alert alert-danger">
	                <p><b>There was a problem:</b></p>
	                <ul>
	                    @foreach ($errors->all() as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                </ul>
	            </div>
	        @endif
		</div>
		{!! Form::open(['url' => '/setnewpassword', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('password', 'New Password') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirm New Password') !!}
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Update', ['class' => 'btn btn-warning']) !!}
	</div>
  </div>
@endsection