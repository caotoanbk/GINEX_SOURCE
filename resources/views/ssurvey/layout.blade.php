<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Salary Survey</title>
  <link rel="shortcut icon" type="image/png" href="/img/fav-icon.png"/>
  <link rel="stylesheet" href="/css/survey.css">
  @yield('css')
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
      <li class="nav-item d-none d-sm-flex" style="align-items: center;">
        <h4 class="text-center">Công ty ABC</h4>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/salary-survey" class="brand-link">
      <img src="/img/fav-icon.png" alt="user Logo" class="brand-image img-circle" style="opacity: 1">
      <span class="brand-text font-weight-light">Salary Survey</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/ssurvey/salary" class="nav-link  @if(strpos(\URL::current(),"salary") !== false) active @endif">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Chế độ lương
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ssurvey/welfare" class="nav-link  @if(strpos(\URL::current(),"welfare") !== false) active @endif">
              <i class="nav-icon fas fa-spa"></i>
              <p>
                Chế độ phúc lợi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/crud/district" class="nav-link  @if(strpos(\URL::current(),"/crud/district") !== false) active @endif">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-power-off text-danger"></i>
              <p>
                Logout
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
</div>
<!-- ./wrapper -->

<script src="/js/survey.js"></script>
@yield('js')
</body>
</html>
