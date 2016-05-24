@extends('master')

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li class="active"><i class="fa fa-line-chart"></i> My Stats</a></li>
@endsection

@section('content')
    <!-- Your Page Content Here -->
	  <div class="row">
		<div class="col-md-8">
			<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          The body of the box
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
            <span class="info-box-number">x,xxx</span>
          <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
        </div>
	  
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-telephone-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Calls</span>
            <span class="info-box-number">xx,xxx</span>
    			</div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    		  
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Development</span>
          <span class="info-box-number">xxx hours</span>
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
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
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
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
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
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
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
@endsection

@section('page_scripts')
<script type="text/javascript">
  var emailsvscallsData = {
    labels: ['Emails', 'Calls'],
    datasets: [
      {
        data: [90, 20],
        backgroundColor: [
          "#FF6384",
          "#36A2EB"
        ],
        hoverBackgroundColor: [
          "#FF6384",
          "#36A2EB"
        ]
      }
    ]
  };

  var emailsvsallemailsData = {
    labels: ['Your Emails', 'All Emails'],
    datasets: [
      {
        data: [5, 90],
        backgroundColor: [
          "#FF6384",
          "#36A2EB"
        ],
        hoverBackgroundColor: [
          "#FF6384",
          "#36A2EB"
        ]
      }
    ]
  };

  var callsvsallcallsData = {
    labels: ['Your Calls', 'All Calls'],
    datasets: [
      {
        data: [7, 85],
        backgroundColor: [
          "#FF6384",
          "#36A2EB"
        ],
        hoverBackgroundColor: [
          "#FF6384",
          "#36A2EB"
        ]
      }
    ]
  };

  var emailsvscalls = document.querySelector('#emailsvscalls').getContext('2d');
  var emailsvsallemails = document.querySelector('#emailsvsallemails').getContext('2d');
  var callsvsallcalls = document.querySelector('#callsvsallcalls').getContext('2d');

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

</script>
@endsection