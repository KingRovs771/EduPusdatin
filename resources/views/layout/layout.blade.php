<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

@vite([
  "resources/css/adminlte.min.css",
  "resources/plugins/fontawesome-free/css/all.min.css",
  "resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
  "resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
  "resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
  "resources/plugins/jqvmap/jqvmap.min.css",
  "resources/plugins/daterangepicker/daterangepicker.css",
  "resources/plugins/summernote/summernote-bs4.min.css"])
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    
    @include('layout.header')
    @include('layout.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('layout.footer')
</div>


@vite([
  "resources/js/adminlte.js",
  "resources/js/pages/dashboard.js",
  "resources/plugins/jquery/jquery.min.js",
  "resources/plugins/bootstrap/js/bootstrap.bundle.min.js",
  "resources/plugins/chart.js/Chart.min.js",
  "resources/plugins/sparklines/sparkline.js",
  "resources/plugins/jqvmap/jquery.vmap.min.js",
  "resources/plugins/jqvmap/maps/jquery.vmap.usa.js",
  "resources/plugins/jquery-knob/jquery.knob.min.js",
  "resources/plugins/moment/moment.min.js",
  "resources/plugins/daterangepicker/daterangepicker.js",
  "resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
  "resources/plugins/summernote/summernote-bs4.min.js",
  "resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
  "resources/js/demo.js"])
</body>
</html>
