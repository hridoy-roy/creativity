<!DOCTYPE html>
<html lang="en">
<head>
<!--======== Meta Seo Start =======-->
<meta name="description"
content="DC- Perfect High-quality, Clipping Path, and Image Editing services, Background Change, Photo Retouching, Ghost Manipulation, Services in World. Get a quote for your next project.">
<meta name="author" content="Designer Country">
<meta name="distribution" content="Global">
<meta name="theme-color" content="#00313F">
<meta name="theme-color" content="#007571">
<meta name="theme-color" content="#19BEB9">
<meta name="rating" content="General">
<meta name="keywords" content="Clipping Path & Photo Cut out">
<link rel="canonical" href="http://www.designercountry.com/">
<!--** Twitter meta **-->
<meta name="twitter:site" content="@designercounty">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title"
content=" Clipping Path Service Provider | Remove Image Background | Digital Retouching | Image masking | Image &amp; Photo Editing Designer Country">
<meta name="twitter:description"
content="DC- Perfect High-quality, Clipping Path, and Image Editing services, Background Change, Photo Retouching, Ghost Manipulation, Services in World. Get a quote for your next project." />
<!--**  Open Graph Meta **-->
<meta property="og:locale" content="en-US">
<meta property="og:type" content="website">
@stack('og-graph-tag')
<!--======== Meta Seo End =======-->
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>@yield('page-title')</title>
<meta content="" name="description">
<meta content="" name="keywords">
<!-- Favicons -->
<link href="{{ asset('assets/frontend/img/home_page/dc-fav-icon.png') }}" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!--==** Font Awesome Link **==-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<!-- Vendor CSS Files -->
<link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/venobox/venobox.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/aos/aos.css') }}" rel="stylesheet">
<!-- Template Main CSS File -->    
<link href="{{ asset('assets/frontend/css/base.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet" media="all">
@stack('page-css')
<!-- Lara IziToast -->
<link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
@include('layouts.frontend.partials.header')
<!-- End Header -->
<!-- ======= Page Content ======= -->
<div class="common-page-style"></div>
@yield('page-content')
<!-- End Page Content -->
<!-- ======= Footer ======= -->
@include('layouts.frontend.partials.footer')
<!-- End Footer -->
<!--<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>-->
<a href="https://api.whatsapp.com/send?phone=+8801914106753&text=Hello! How can I help you? Could you please leave me your email address here just in case we are disconnected? Thanks. Our email is: designercountry@gmail.com" class="float" target="_blank">
<i class="fab fa-whatsapp my-float"></i>
</a>
</a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/aos/aos.js') }}"></script>
<!-- Lara IziToast Js -->
<script src="{{ asset('js/iziToast.js') }}"></script>
@stack('page-js')
<!-- Template Main JS File -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<!-- Yeild Js -->
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

