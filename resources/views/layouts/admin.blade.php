<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIPON | Security</title>

  @include('partials.headercdn')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Preloader -->
      @include('partials.preloader')
    
      <!-- Navbar -->
      @include('partials.navbar')
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      @include('partials.sidebar')
      <!-- /.main sidebar container -->

      <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        
      </footer>
    </div>
    <!-- ./wrapper -->

@include('partials.footercdn')
</body>
</html>
