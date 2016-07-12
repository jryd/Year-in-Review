@extends('master')

@section('title')
{{ $user->first_name }}'s Stats
@endsection

@section('pagetitle')
{{ $user->first_name }}'s stats
<small>What did {{ $user->first_name }} do in playing their part?</small>
@endsection

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li><a href="{{ url('/allteamstats') }}"><i class="fa fa-users"></i> All Team Stats</a></li>
<li><a href="{{ URL::previous() }}"><i class="fa fa-user"></i> Team Directory</a></li>
<li class="active"><i class="fa fa-line-chart"></i> {{ $user->first_name }}'s Stats</a></li>
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
            <span class="info-box-number">{{ number_format($user->processedstats->emails) }}</span>
          <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
        </div>
	  
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-telephone-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Calls</span>
            <span class="info-box-number">{{ number_format($user->processedstats->calls_total) }}</span>
    			</div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    		  
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Development</span>
          <span class="info-box-number">{{ $user->rawstats->development }} hours</span>
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
              <p>{{ $user->processedstats->best_email_month }}</p>
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
              <p>{{ $user->processedstats->best_email_quarter }}</p>
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
              <p>{{ $user->processedstats->best_call_month }}</p>
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
              <p>{{ $user->processedstats->best_call_quarter }}</p>
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
              <p>{{ $user->processedstats->best_output_month }}</p>
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
              <p>{{ $user->processedstats->best_output_quarter }}</p>
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
              <p>{{ $user->processedstats->best_quality_month }}</p>
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
              <p>{{ $user->processedstats->best_quality_quarter }}</p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Output over the year</h3>
  
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <canvas id="outputByMonth"></canvas>
          </div>
          <!-- /.box-body -->
        </div> 
      </div>
      <div class="col-md-6">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Quality over the year</h3>
  
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <canvas id="qualityByMonth"></canvas>
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
        data: [{{ $user->processedstats->emails }}, {{ $user->processedstats->calls_total }}],
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
    labels: ['Their Emails', 'All Emails'],
    datasets: [
      {
        data: [{{ $user->processedstats->emails }}, {{ $cumulative->emails }}],
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
    labels: ['Their Calls', 'All Calls'],
    datasets: [
      {
        data: [{{ $user->processedstats->calls_inbound }}, {{ $cumulative->calls }}],
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
              data: [{{ $user->rawstats->emails_july }}, {{ $user->rawstats->emails_august }}, {{ $user->rawstats->emails_september }}, {{ $user->rawstats->emails_october }}, {{ $user->rawstats->emails_november }}, {{ $user->rawstats->emails_december }}, {{ $user->rawstats->emails_january }}, {{ $user->rawstats->emails_february }}, {{ $user->rawstats->emails_march }}, {{ $user->rawstats->emails_april }}, {{ $user->rawstats->emails_may }}, {{ $user->rawstats->emails_june }}]
          },
          {
              label: 'Calls',
              backgroundColor : 'rgba(0, 166, 90, 0.3)',
                borderColor : '#008548',
                pointBackgroundColor : '#00A65A',
                pointBorderColor : '#008548',
              data: [{{ $user->rawstats->calls_inbound_july }}, {{ $user->rawstats->calls_inbound_august }}, {{ $user->rawstats->calls_inbound_september }}, {{ $user->rawstats->calls_inbound_october }}, {{ $user->rawstats->calls_inbound_november }}, {{ $user->rawstats->calls_inbound_december }}, {{ $user->rawstats->calls_inbound_january }}, {{ $user->rawstats->calls_inbound_february }}, {{ $user->rawstats->calls_inbound_march }}, {{ $user->rawstats->calls_inbound_april }}, {{ $user->rawstats->calls_inbound_may }}, {{ $user->rawstats->calls_inbound_june }}]
          }
      ]
  };

  var outputByMonthData = {
    labels: ['July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [
          {
              label: 'Output',
              backgroundColor : 'rgba(255, 174, 25, 0.3)',
                borderColor : '#ffa500',
                pointBackgroundColor : '#ffae19',
                pointBorderColor : '#ffa500',
              data: [{{ $user->rawstats->output_july }}, {{ $user->rawstats->output_august }}, {{ $user->rawstats->output_september }}, {{ $user->rawstats->output_october }}, {{ $user->rawstats->output_november }}, {{ $user->rawstats->output_december }}, {{ $user->rawstats->output_january }}, {{ $user->rawstats->output_february }}, {{ $user->rawstats->output_march }}, {{ $user->rawstats->output_april }}, {{ $user->rawstats->output_may }}, {{ $user->rawstats->output_june }}]
          }
    ]
  };

  var qualityByMonthData = {
    labels: ['July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [
          {
              label: 'Quality',
              backgroundColor : 'rgba(115, 159, 238, 0.3)',
                borderColor : '#6495ed',
                pointBackgroundColor : '#739fee',
                pointBorderColor : '#6495ed',
              data: [{{ $user->rawstats->quality_july }}, {{ $user->rawstats->quality_august }}, {{ $user->rawstats->quality_september }}, {{ $user->rawstats->quality_october }}, {{ $user->rawstats->quality_november }}, {{ $user->rawstats->quality_december }}, {{ $user->rawstats->quality_january }}, {{ $user->rawstats->quality_february }}, {{ $user->rawstats->quality_march }}, {{ $user->rawstats->quality_april }}, {{ $user->rawstats->quality_may }}, {{ $user->rawstats->quality_june }}]
          }
    ]
  };

  var emailsvscalls = document.querySelector('#emailsvscalls').getContext('2d');
  var emailsvsallemails = document.querySelector('#emailsvsallemails').getContext('2d');
  var callsvsallcalls = document.querySelector('#callsvsallcalls').getContext('2d');
  var emailsandcallsByMonth = document.querySelector('#emailsandcallsByMonth').getContext('2d');
  var outputByMonth = document.querySelector('#outputByMonth').getContext('2d');
  var qualityByMonth = document.querySelector('#qualityByMonth').getContext('2d');

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

  new Chart(outputByMonth, {
      type: 'line',
      data: outputByMonthData,
  });

  new Chart(qualityByMonth, {
      type: 'line',
      data: qualityByMonthData,
  });

</script>
@endsection