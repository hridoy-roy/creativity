@extends('layouts.admin.backend-layouts')
@section ('page-title', 'Desegner Country Admin || Dashboard')
@section('page-content')
<div class="app-title">
  <div>
    <h1><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-6 col-lg-3">
    <div class="widget-small info coloured-icon"><i class="icon far fa-registered fa-3x"></i>
      <div class="info">
        <h4>Registration</h4>
        <p><b>{{ $register }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <h4>Contacts</h4>
        <p><b>{{ $contact }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small warning coloured-icon"><i class="icon fa fa-laptop fa-3x"></i>
      <div class="info">
        <h4>Get A Quote</h4>
        <p><b>{{ $get_quote }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
      <div class="info">
        <h4>Free Trail</h4>
        <p><b>{{ $freetrial }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small info coloured-icon"><i class="icon fas fa-mail-bulk fa-3x"></i>
      <div class="info">
        <h4>Subscribers</h4>
        <p><b>{{ $subscribers }}</b></p>
      </div>
    </div>
  </div>
</div>
@endsection