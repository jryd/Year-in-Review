@extends('master')

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li class="active"><i class="fa fa-users"></i> Team Stats</a></li>
@endsection

@section('content')
    <!-- Your Page Content Here -->
	  <div class="row">
		<div class="col-md-8">
			<div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Team Emails and Calls over the year</h3>
        
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
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
            <span class="info-box-text">Team Emails</span>
            <span class="info-box-number">x,xxx</span>
          <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
        </div>
	  
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-telephone-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Team Calls</span>
            <span class="info-box-number">xx,xxx</span>
    			</div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    		  
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Collective Development</span>
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
          <h3 class="box-title">Team emails vs calls</h3>

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
          <h3 class="box-title">Team emails vs all emails</h3>

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
            <h3 class="box-title">Team calls vs all calls</h3>

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
          "#ff7290",
          "#4aabed"
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
          "#ff7290",
          "#4aabed"
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
          "#ff7290",
          "#4aabed"
        ]
      }
    ]
  };
  
  var emailsandcallsByMonthData = {
      labels: ['July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [
          {
              label: 'Emails',
              backgroundColor : 'rgba(25, 198, 240, 0.3)',
                borderColor : '#00C0EF',
                pointBackgroundColor : '#00acd7',
                pointBorderColor : '#0099bf',
              data: [598, 603, 761, 870, 1227, 860, 1086, 1107, 605, 800, 600, 600]
          },
          {
              label: 'Calls',
              backgroundColor : 'rgba(25, 174, 106, 0.3)',
                borderColor : '#00A65A',
                pointBackgroundColor : '#009551',
                pointBorderColor : '#008448',
              data: [309, 192, 131, 127, 346, 285, 379, 322, 130, 204, 170, 170]
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