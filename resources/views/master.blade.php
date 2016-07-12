<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | Year in Review</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-yellow.min.css') }}">
  <link rel="stylesheet" href="{{ asset('custom/blockquote.css') }}">
  
  <!-- Token needed for any ajax calls -->
  <meta name="_token" content="{!! csrf_token() !!}"/>
  
  @if (App::environment('production'))
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-78282566-2', 'auto');
      ga('send', 'pageview');
  </script>
  @endif

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body @if(Auth::user()->sidebar_min == 0) class="hold-transition skin-yellow sidebar-mini" @else class="hold-transition skin-yellow sidebar-mini sidebar-collapse" @endif>
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Y</b>i<b>R</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Year</b> in <b>Review</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="sidebarButton">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset('img/' . Auth::user()->id . '.jpg') }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->first_name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset('img/' . Auth::user()->id . '.jpg') }}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                  <small>{{ Auth::user()->role->name }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="home"><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
          <li class="mystats"><a href="{{ url('/mystats') }}"><i class="fa fa-line-chart"></i> <span>My Stats</span></a></li>
        @endif
        @if (Auth::user()->role_id < 9)
          <li class="teamstats"><a href="{{ url('/teamstats') }}"><i class="fa fa-users"></i> <span>Team Stats</span></a></li>
        @endif
        @if (Auth::user()->role_id > 4)
          <li class="allteamstats"><a href="{{ url('/allteamstats') }}"><i class="fa fa-users"></i> <span>All Team Stats</span></a></li>
        @endif
        @if (Auth::user()->role_id == 10 || Auth::user()->role_id == 7)
          <li class="activitylog"><a href="{{ url('/activitylog') }}"><i class="fa fa-database"></i> <span>Activity Log</span></a></li>
        @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <!-- Welcome
        <small>What's This All About?</small> -->
        @yield('pagetitle')
      </h1>
      <ol class="breadcrumb">
        @yield('breadcrumb')
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        @include('flash::message')
      </div>
    </div>  

    @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      You Rock!
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} <a href="https://bannister.me">James B</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
<!-- Ajax Setup -->
<script type="text/javascript">
  $.ajaxSetup({
	headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  });
</script>
<!-- Active Link JS -->
<script src="{{ asset('custom/activelink.js') }}"></script>
<script src="{{ asset('js/konami.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#sidebarButton').on('click', function() {
        if ($(window).width() > 767)
        {
          $.ajax({
            url: "{{ url('/sidebar/changestate') }}",
            method: "POST", // Or whatever you're using (GET, PUT, etc.)
            data: {'member':{{ Auth::user()->id }}}, // Let jQuery handle packing the data for you
            success: function(response) {
                 console.log('Sidebar data sent successfully');
            },
            error: function(xhr, textStatus, errorThrown) {
                console.log('There was an error.');
            }
          });
        }
        else
        {
            console.log('Viewport not big enough for change. Ajax call not made.');
        }
    });
  });
</script>
@yield('page_scripts')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>