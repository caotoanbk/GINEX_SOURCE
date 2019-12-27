<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="/img/fav-icon.png"/>
  <link rel="stylesheet" href="/css/admin.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/salary-survey" class="nav-link">Salary survey</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">Ginex Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/crud/city" class="nav-link  @if(strpos(\URL::current(),"/crud/city") !== false) active @endif">
              <i class="nav-icon fas fa-city"></i>
              <p>
                Thành phố
                <span class="badge badge-warning right">{{\App\City::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/crud/district" class="nav-link  @if(strpos(\URL::current(),"/crud/district") !== false) active @endif">
              <i class="nav-icon fas fa-bone"></i>
              <p>
                Quận huyện
                <span class="badge badge-warning right">{{\App\District::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/crud/industry" class="nav-link  @if(strpos(\URL::current(),"/crud/industry") !== false) active @endif">
              <i class="nav-icon fas fa-cat"></i>
              <p>
                Ngành công nghiệp
                <span class="badge badge-warning right">{{\App\Industry::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/crud/scale" class="nav-link  @if(strpos(\URL::current(),"/crud/scale") !== false) active @endif">
              <i class="nav-icon fas fa-carrot"></i>
              <p>
                Quy mô
                <span class="badge badge-warning right">{{\App\Scale::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/crud/namhd" class="nav-link  @if(strpos(\URL::current(),"/crud/namhd") !== false) active @endif">
              <i class="nav-icon fas fa-bullseye"></i>
              <p>
                Năm hoạt động
                <span class="badge badge-warning right">{{\App\Namhd::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/crud/country" class="nav-link  @if(strpos(\URL::current(),"/crud/country") !== false) active @endif">
              <i class="nav-icon fab fa-earlybirds"></i>
              <p>
                Quốc tịch công ty
                <span class="badge badge-warning right">{{\App\Country::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/crud/company" class="nav-link  @if(strpos(\URL::current(),"/crud/company") !== false) active @endif">
              <i class="nav-icon fas fa-bomb"></i>
              <p>
                Company
                <span class="badge badge-warning right">{{\App\Company::count()}}</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row bg-white">
              <div class="col-12">
                @yield('content')
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<script src="/js/admin.js"></script>
@yield('js')
</body>
</html>
