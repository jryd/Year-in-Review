@extends('master')

@section('breadcrumb')
<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
<li class="active"><a href="{{ url('/mystats') }}"><i class="fa fa-line-chart"></i> My Stats</a></li>
@endsection

@section('content')
    <!-- Your Page Content Here -->
	  <div class="row">
		<div class="col-md-8">
			<div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Title</h3>
    
                  <div class="box-tools pull-right">
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
@endsection