@extends('master')

@section('breadcrumb')
<li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
@endsection

@section('content')
<!-- Your Page Content Here -->
	  <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>We do some amazing stuff here in CS.</h3>
			<p>Just take a look:</p>
			<br/>
			<ul class="timeline">

				<!-- timeline time label -->
				<!-- <li class="time-label">
					<span class="bg-red">
						July 2015
					</span>
				</li> -->
				<!-- /.timeline-label -->

				<!-- timeline item -->
				<li>
					<!-- timeline icon -->
					<i class="fa fa-envelope bg-yellow"></i>
					<div class="timeline-item">

						<h3 class="timeline-header">Emails</h3>

						<div class="timeline-body">
							Over the course of the last year, we have received <b>{{ number_format($emails) }}</b> emails - of which <b>{{ $cs_email_avg }}%</b> were personally dealt with by us here in Core CS.
							<br/><br/>
							With each person answering <b>{{ number_format($emails_pp_avg) }}</b> on average.
						</div>

					</div>
				</li>
				<!-- END timeline item -->
				
				<!-- timeline item -->
				<li>
					<!-- timeline icon -->
					<i class="fa fa-phone bg-yellow"></i>
					<div class="timeline-item">

						<h3 class="timeline-header">Calls</h3>

						<div class="timeline-body">
							Over the course of the last year, we have received <b>{{ number_format($calls) }}</b> calls here in to Core CS.
							<br/><br/>
							With each person answering <b>{{ number_format($calls_pp_avg) }}</b> on average.
						</div>

					</div>
				</li>
				<!-- END timeline item -->
				
				<!-- timeline item -->
				<li>
					<!-- timeline icon -->
					<i class="fa fa-clock-o bg-yellow"></i>
					<div class="timeline-item">

						<h3 class="timeline-header">Development and Extra Tasks</h3>

						<div class="timeline-body">
							Hiring and growing great people is part of what we do here at Trade Me.
							<br/><br/>
							Over the last year we have spent a total of <b>{{ number_format($development + $extra_tasks) }}</b> hours supporting your development (WIPs, training, courses etc) and extra tasks (TMCS, Call Backs, STA etc).
						</div>

					</div>
				</li>
				<!-- END timeline item -->
				
				<!-- timeline item -->
				<li>
					<!-- timeline icon -->
					<i class="fa fa-user bg-yellow"></i>
					<div class="timeline-item">

						<h3 class="timeline-header">How did you fit in?</h3>

						<div class="timeline-body">
							We each play a part in the bigger picture, Rome wasn't built in a day and nor was it built by one man.
						</div>
						
						<div class="timeline-footer">
							<a class="btn btn-primary btn-xs" href="{{ url('/mystats') }}">Have a look at what you did</a>
						</div>

					</div>
					
				</li>
				
				<!-- END timeline item -->

				<!-- timeline time label -->
				<!-- <li class="time-label">
					<span class="bg-red">
						June 2016
					</span>
				</li> -->
				<!-- /.timeline-label -->

			</ul>
		</div>
	  </div>
@endsection