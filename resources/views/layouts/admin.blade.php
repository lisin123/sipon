<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  @include('partials.headercdn')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('template/dist/img/kgs.png') }}" alt="logo" height="60" width="60">
      </div>
    
      <!-- Navbar -->
      @include('partials.navbar')
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      @include('partials.sidebar')

      <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

@include('partials.footercdn')
</body>
</html>
