<!DOCTYPE html>
<html lang="en">
<head>
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
<!-- Template Main CSS File -->    
<link href="{{ asset('assets/frontend/css/base.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
<style>
  * {
    box-sizing: border-box;
  }
  .header {
    text-align: center;
    padding: 32px;
  }
  .row2 {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE 10 */
    flex-wrap: wrap;
    padding: 0 4px;
  }
  /* Create two equal columns that sits next to each other */
  .column2 {
    -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
  }
  .column2 img {
    margin-top: 8px;
    vertical-align: middle;
  }
  .btn{
    background: #009b97;
    color: white;
  }
  .btn:hover{
    color: white;
  }
  .active{
    background: #007571;
    color: white;
  }
  .photo-gallery{
    padding-top: 100px;
  }
  @media only screen and (min-width: 310px) and (max-width: 449.98px) {
      .header {
      padding: 0px;
    }
    .header h2{
      font-size: 18px;
    }
    .header p{
      font-size: 16px;
    }
  } 
  /* Style the buttons */
  </style>
</head>
<body>
  <!-- ======= Header ======= -->
  @include('layouts.frontend.partials.header')
  <!-- End Header -->
  <!-- ======= Page Content ======= -->
  <section class="photo-gallery">
    <div class="container">
      <div class="header" id="myHeader">
        <h2>Designer Country Photo Gallery</h2>
        <p class="py-sm-3">Click on the buttons to change the grid view.</p>
        <button class="btn active" onclick="two()"><i class="fas fa-th-list"></i> 2 List View</button>
        <button class="btn" onclick="four()"><i class="fas fa-th-large"></i> Grid View</button>
      </div>
      <!-- Photo Grid -->
      <div class="row2"> 
        <div class="column2">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Sadirul Amin Shipon_0.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Tarequl-Islam_0.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/falls2.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/paris.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/nature.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/mist.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/paris.jpg') }}" alt="employee" loading="lazy" style="width:100%">
        </div>
        <div class="column2">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Jaminul Islam_0.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Mizanur-Rahman.jpg') }}"  alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/wedding.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/mountainskies.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/rocks.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/underwater.jpg') }}" alt="employee" loading="lazy" style="width:100%"> 
        </div>  
        <div class="column2">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Azhar Raihan_0.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Ahmed-Juned.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/falls2.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/paris.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/nature.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/mist.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/paris.jpg') }}" alt="employee" loading="lazy" style="width:100%">
        </div>
        <div class="column2">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Mustafigur Rahman_0.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/Aminul_Islam.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/wedding.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/mountainskies.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/rocks.jpg') }}" alt="employee" loading="lazy" style="width:100%">
          <img src="{{ asset('assets/frontend/img/photo-gallery/underwater.jpg') }}" alt="employee" loading="lazy" style="width:100%">
        </div>
      </div>
    </div>
  </section>
  <!-- End Page Content -->
  <!-- ======= Footer ======= -->
  @include('layouts.frontend.partials.footer')
  <!-- End Footer -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column2");
  // Declare a loop variable
  var i;
  // Two images side by side
  function two() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "50%";  // IE10
      elements[i].style.flex = "50%";
    }
  }
  // Four images side by side
  function four() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "25%";  // IE10
      elements[i].style.flex = "25%";
    }
  }
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myHeader");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
</body>
</html>