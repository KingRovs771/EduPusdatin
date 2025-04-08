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
  ""
  ])
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
  "resources/plugins/jquery/jquery.min.js",
  "resources/plugins/jquery-ui/jquery-ui.min.js",
  "resources/plugins/bootstrap/js/bootstrap.bundle.min.js",
  "resources/js/adminlte.js",
  "resources/js/pages/dashboard.js"])
@vite([
  "resources/js"
])

<script>
  $(document).ready(function () {
    $('.nav-link').on('click', function () {
        $('.nav-link').removeClass('active'); // Hapus active dari semua
        $(this).addClass('active'); // Tambahkan active ke yang diklik
    });
});
</script>
</body>
</html>
