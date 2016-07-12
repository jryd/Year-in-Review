@extends('master')

@section('title')
@if($team->role_id == 1) Day Crew @elseif($team->role_id == 2) Evening Crew One @elseif($team->role_id == 3) Evening Crew Two @else Nightwalker @endif Stats
@endsection

@section('pagetitle')
@if($team->role_id == 1) Day Crew @elseif($team->role_id == 2) Evening Crew One @elseif($team->role_id == 3) Evening Crew Two @else Nightwalker @endif stats
<small>What did they do in playing their part?</small>
@endsection

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li><a href="{{ url('/allteamstats') }}"><i class="fa fa-users"></i> All Team Stats</a></li>
<li><a href="{{ URL::previous() }}"><i class="fa fa-user"></i> Team Directory</a></li>
<li class="active"><i class="fa fa-line-chart"></i> @if($team->role_id == 1) Day Crew @elseif($team->role_id == 2) Evening Crew One @elseif($team->role_id == 3) Evening Crew Two @else Nightwalker @endif Stats</a></li>
@endsection

@section('content')
    <!-- Your Page Content Here -->
	  <div class="row">
		<div class="col-md-8">
			<div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Emails and Calls over the year</h3>
        
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <canvas id="emailsandcallsByMonth"></canvas>
                </div>
                <!-- /.box-body -->
            </div>
		</div>
		<div class="col-md-4">
			<!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="ion ion-ios-email-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Emails</span>
            <span class="info-box-number">{{ number_format($team->emails) }}</span>
          <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
        </div>
	  
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-telephone-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Calls</span>
            <span class="info-box-number">{{ number_format($team->calls_inbound + $team->calls_outbound) }}</span>
    			</div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    		  
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Development</span>
          <span class="info-box-number">{{ $team->development }} hours</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
		</div>
		
	  </div>
    <div class="row">
    <div class="col-md-4">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Emails vs calls</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <canvas id="emailsvscalls"></canvas>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Your emails to all emails</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <canvas id="emailsvsallemails"></canvas>
        </div>
        <!-- /.box-body -->
      </div>
      </div>
      <div class="col-md-4">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Your calls to all calls</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <canvas id="callsvsallcalls"></canvas>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Highest Email Month</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_email_month }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Highest Email Quarter</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_email_quarter }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Highest Call Month</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_call_month }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Highest Call Quarter</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_call_quarter }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Best Output Month</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_output_month }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Best Output Quarter</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_output_quarter }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Best Quality Month</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_quality_month }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Best Quality Quarter</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>{{ $team->best_quality_quarter }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      </div>

@endsection

@section('page_scripts')
<script type="text/javascript">
  var emailsvscallsData = {
    labels: ['Emails', 'Calls'],
    datasets: [
      {
        data: [{{ $team->emails }}, {{ $team->calls_inbound + $team->calls_outbound }}],
        backgroundColor: [
          "#ffa500",
          "#6495ed"
        ],
        hoverBackgroundColor: [
          "#ffae19",
          "#739fee"
        ]
      }
    ]
  };

  var emailsvsallemailsData = {
    labels: ['Team Emails', 'All Emails'],
    datasets: [
      {
        data: [{{ $team->emails }}, {{ $cumulative->emails }}],
        backgroundColor: [
          "#ffa500",
          "#6495ed"
        ],
        hoverBackgroundColor: [
          "#ffae19",
          "#739fee"
        ]
      }
    ]
  };

  var callsvsallcallsData = {
    labels: ['Team Calls', 'All Calls'],
    datasets: [
      {
        data: [{{ $team->calls_inbound + $team->calls_outbound }}, {{ $cumulative->calls }}],
        backgroundColor: [
          "#ffa500",
          "#6495ed"
        ],
        hoverBackgroundColor: [
          "#ffae19",
          "#739fee"
        ]
      }
    ]
  };
  
  var emailsandcallsByMonthData = {
      labels: ['July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [
          {
              label: 'Emails',
              backgroundColor : 'rgba(243, 156, 18, 0.3)',
                borderColor : '#da8c10',
                pointBackgroundColor : '#F39C12',
                pointBorderColor : '#da8c10',
              data: [{{ $team->emails_july }}, {{ $team->emails_august }}, {{ $team->emails_september }}, {{ $team->emails_october }}, {{ $team->emails_november }}, {{ $team->emails_december }}, {{ $team->emails_january }}, {{ $team->emails_february }}, {{ $team->emails_march }}, {{ $team->emails_april }}, {{ $team->emails_may }}, {{ $team->emails_june }}]
          },
          {
              label: 'Calls',
              backgroundColor : 'rgba(0, 166, 90, 0.3)',
                borderColor : '#008548',
                pointBackgroundColor : '#00A65A',
                pointBorderColor : '#008548',
              data: [{{ $team->calls_inbound_july }}, {{ $team->calls_inbound_august }}, {{ $team->calls_inbound_september }}, {{ $team->calls_inbound_october }}, {{ $team->calls_inbound_november }}, {{ $team->calls_inbound_december }}, {{ $team->calls_inbound_january }}, {{ $team->calls_inbound_february }}, {{ $team->calls_inbound_march }}, {{ $team->calls_inbound_april }}, {{ $team->calls_inbound_may }}, {{ $team->calls_inbound_june }}]
          }
      ]
  };

  var emailsvscalls = document.querySelector('#emailsvscalls').getContext('2d');
  var emailsvsallemails = document.querySelector('#emailsvsallemails').getContext('2d');
  var callsvsallcalls = document.querySelector('#callsvsallcalls').getContext('2d');
  var emailsandcallsByMonth = document.querySelector('#emailsandcallsByMonth').getContext('2d');

  new Chart(emailsvscalls, {
    type: 'doughnut',
    data: emailsvscallsData,
  });

  new Chart(emailsvsallemails, {
    type: 'doughnut',
    data: emailsvsallemailsData,
  });

  new Chart(callsvsallcalls, {
    type: 'doughnut',
    data: callsvsallcallsData,
  });
  
  new Chart(emailsandcallsByMonth, {
      type: 'line',
      data: emailsandcallsByMonthData,
  });

</script>
@endsection