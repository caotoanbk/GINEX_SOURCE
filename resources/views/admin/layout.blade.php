<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="/img/fav-icon.png"/>
  <link rel="stylesheet" href="/css/admin.css">
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/salary-survey" class="nav-link">Salary survey</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/admin" class="brand-link">
      <img src="/img/avatar.png" alt="user Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ginex Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent text-sm nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Config
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/crud/city" class="nav-link  @if(strpos(\URL::current(),"/crud/city") !== false) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Thành phố
                    <span class="badge badge-secondary right">{{\App\City::count()}}</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crud/district" class="nav-link  @if(strpos(\URL::current(),"/crud/district") !== false) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Quận huyện
                    <span class="badge badge-secondary right">{{\App\District::count()}}</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crud/industry" class="nav-link  @if(strpos(\URL::current(),"/crud/industry") !== false) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Ngành công nghiệp
                    <span class="badge badge-secondary right">{{\App\Industry::count()}}</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crud/scale" class="nav-link  @if(strpos(\URL::current(),"/crud/scale") !== false) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Quy mô
                    <span class="badge badge-secondary right">{{\App\Scale::count()}}</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crud/namhd" class="nav-link  @if(strpos(\URL::current(),"/crud/namhd") !== false) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Năm hoạt động
                    <span class="badge badge-secondary right">{{\App\Namhd::count()}}</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crud/country" class="nav-link  @if(strpos(\URL::current(),"/crud/country") !== false) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Quốc tịch công ty
                    <span class="badge badge-secondary right">{{\App\Country::count()}}</span>
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="/crud/company" class="nav-link  @if(strpos(\URL::current(),"/crud/company") !== false) active @endif">
              <i class="nav-icon fab fa-medapps"></i>
              <p>
                Company
                <span class="badge badge-warning right">{{\App\Company::count()}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/salary" class="nav-link  @if(strpos(\URL::current(),"salary") !== false) active @endif">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Chế độ lương
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/welfare" class="nav-link  @if(strpos(\URL::current(),"welfare") !== false) active @endif">
              <i class="nav-icon fas fa-spa"></i>
              <p>
                Chế độ phúc lợi
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

<script src="/js/admin.js"></script>
@yield('js')
</body>
</html>
