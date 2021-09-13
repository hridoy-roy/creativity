<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('page-title')</title>
  <link rel="icon" href="{{asset('assets/frontend/images/home_page/Dc_Logo.png')}}" type="image/x-icon">
  <!-- Favicons -->
  <link href="http://127.0.0.1:8000/assets/frontend/img/home_page/dc-fav-icon.png" rel="icon">
  <!--==** Font Awesome Link **==-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!--==** Bootstrap CDN Link **==-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--==** DataTable CSS **==-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/main.css')}}" />
  <!-- Lara IziToast -->
  <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
  <!--==** Logo **==-->
  @stack('page-css')
  <style>
    .app-header a:hover{
      background: #00635A;
      color: white;
    }
  </style>
</head>
<body class="app sidebar-mini rtl">
  @include('layouts.admin.partials.header')
  @include('layouts.admin.partials.sidebar')
  <main class="app-content" id="app">
    @yield('page-content')
  </main>
<!--==*** Script  Link **==-->
<!-- Essential javascripts for application to work-->
<script src="{{asset('assets/backend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/backend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/backend/js/main.js')}}"></script>
<!--  DataTable Js  -->
<script src="{{asset('assets/backend/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/backend/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Page specific javascripts-->
<!--==** Ajax CDN Link **==-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Lara IziToast Js -->
<script src="{{ asset('js/iziToast.js') }}"></script>
@stack('page-js')
<!-- Lara iziToast -->
@include('vendor.lara-izitoast.toast')
<script>
    @if($errors->any())
      @foreach($errors->all() as $error)
        iziToast.error('{{ $error }}', 'Error',{
            closeButton:true,
            progressBar:true,
        });
      @endforeach
    @endif
</script>
</body>
</html>






