
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin-lte/header')
</head>
<body class="hold-transition dark-mode layout-top-nav ">
    <div class="wrapper">


  <!-- Preloader -->
    @include('admin-lte/preloader')

  <!-- Navbar -->
    @include('admin-lte/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @include('admin-lte/main-header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            @yield('content')
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @include('admin-lte/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin-lte/javascript')
@yield('script')
@yield('chart-script')
</body>
</html>
