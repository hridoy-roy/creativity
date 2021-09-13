@extends('layouts.admin.backend-layouts')
@section ('page-title', 'Register || Show')
@section ('page-css')
<style>
</style>
@endsection
@section('page-content')
<div class="app-title">
  <div>
    <h1><i class="far fa-registered"></i></i>Register</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">View Register</a></li>
  </ul>
</div>
<div class="d-flex justify-content-center align-items-center" style="height: 50vh">
  <div class="card" style="width: 25rem;">
    <div class="card-header" style="background: #009688; color:white;">
      <h5 class="text-center m-0 p-0">Register Email</h5>
    </div>
    <ul class="list-group list-group-flush" style="height: 150px">
      <li class="list-group-item">{{ $data->email }}</li>
      <li class="list-group-item">This email has registered to Designer Country :)</li>
  </div>
</div>
@endsection
