<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Administrator</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{URL::asset('extadmin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::asset('extadmin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('extadmin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/logout') }}">Logout
        </a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
      <img src="{{URL::asset('extadmin/logo.jpeg')}}" alt="Logo Dinkes" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link @yield('classsidebardashboard')">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/layanandantarif') }}" class="nav-link @yield('classsidebarlayanandantarif')">
                <i class="nav-icon fas fa-h-square"></i>
                <p>Layanan dan Tarif</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/beritadanartikel') }}" class="nav-link @yield('classsidebarberitadanartikel')">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>Berita dan Artikel</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/kontak') }}" class="nav-link @yield('classsidebarkontak')">
                <i class="nav-icon fas fa-phone"></i>
                <p>Kontak</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/pengumuman')}}" class="nav-link @yield('classsidebarpengumuman')">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>Pengumuman</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/mitra')}}" class="nav-link @yield('classsidebarmitra')">
              <i class="nav-icon fas fa-handshake"></i>
              <p>Mitra</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/sertifikat')}}" class="nav-link @yield('classsidebarsertifikat')">
              <i class="nav-icon fas fa-file"></i>
              <p>Sertifikat</p>
            </a>
          </li>

          <li class="nav-item has-treeview @yield('kepustakaan-menu-open')">
            <a href="#" class="nav-link @yield('classsidebarkepustakaan')">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kepustakaan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/kepustakaan/penelitian')}}" class="nav-link @yield('classsidebarpenelitian')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penelitian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/kepustakaan/perpustakaan')}}" class="nav-link @yield('classsidebarperpustakaan')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perpustakaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/kepustakaan/galeri')}}" class="nav-link @yield('classsidebargaleri')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/kepustakaan/download')}}" class="nav-link @yield('classsidebardownload')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Download</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview @yield('profile-menu-open')">
            <a href="#" class="nav-link @yield('classsidebarprofile')">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/profile/sejarah')}}" class="nav-link @yield('classsidebarsejarah')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/profile/visidanmisi')}}" class="nav-link @yield('classsidebarvisidanmisi')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi dan Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/profile/strukturorganisasi')}}" class="nav-link @yield('classsidebarstrukturorganisasi')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/profile/upayakesehatan')}}" class="nav-link @yield('classsidebarupayakesehatan')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upaya Kesehatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/profile/kompetensisdm')}}" class="nav-link @yield('classsidebarkompetensisdm')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kompetensi SDM</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Dinkes DIY</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{URL::asset('extadmin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('extadmin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{URL::asset('extadmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('extadmin/dist/js/adminlte.js')}}"></script>
@yield('script')

<!-- OPTIONAL SCRIPTS -->
<script src="{{URL::asset('dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{URL::asset('extadmin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{URL::asset('extadmin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{URL::asset('extadmin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{URL::asset('extadmin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{URL::asset('extadmin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{URL::asset('extadmin/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
