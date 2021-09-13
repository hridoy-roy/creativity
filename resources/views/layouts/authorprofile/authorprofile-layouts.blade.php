<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{ asset('assets/frontend/img/home_page/dc-fav-icon.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/author/css/base.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/author/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/author/css/responsive.css') }}" rel="stylesheet">
  @stack('page-css')
  <style>
  </style>
</head>
<body>
  <!-- ======= Header ======= -->
  @include('layouts.authorprofile.partials.header')
  <!-- End Header -->
  <!-- ======= Page Content ======= -->
  <!-- ======= Page Content ======= -->
  <div class="common-page-style"></div>
  @yield('page-content')
  <!-- End Page Content -->
  <!-- ======= Header ======= -->
  @include('layouts.authorprofile.partials.footer')
  <!-- End Header -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  @stack('js')
</body>
</html>