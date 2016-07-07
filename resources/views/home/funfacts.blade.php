@extends('master')

@section('title')
Fun Facts
@endsection

@section('pagetitle')
Fun Facts
<small>Because what application is really complete without an easter egg?</small>
@endsection

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li class="active"><i class="fa fa-users"></i> Fun Facts</a></li>
@endsection

@section('content')
    <!-- Your Page Content Here -->
	  <div class="row">
		<div class="col-md-6 col-md-offset-3">
	    	<h3>{{ $fact->title }}</h3>
	    	<blockquote>
	    		{{ $fact->body }}
	    	</blockquote>
	    	<br>
	    	<button class="btn btn-primary" id="goAgain">Go Again!</button>
      	</div>
    </div>
@endsection

@section('page_scripts')
    <script type="text/javascript">
    	$(document).ready(function() {
    		$("#goAgain").click(function() {
    			location.reload(true);
    		});
    	});
    </script>
@endsection