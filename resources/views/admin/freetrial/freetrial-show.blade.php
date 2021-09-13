@extends('layouts.admin.backend-layouts')
@section ('page-title', 'freetrial || show')
@push ('page-css')
<style>
.card-header a{
color: white;
}
.card-header a:hover{
color: rgb(226, 226, 226);
}
</style>
@endpush
@section('page-content')
<div class="app-title">
  <div>
    <h1><i class="fas fa-adjust"></i></i>Free Trial</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">View Free Trial</a></li>
  </ul>
</div>
<div class="row justify-content-center mt-sm-3 mt-md-4 mt-lg-5">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header" style="background-color: #009b97;; color: #ffff;">
        <h5 class="text-center m-0"><strong class="pr-2 mb-0 pb-0"><a href="mailto: {{ $data->email }}">{{ $data->email }}</a></strong>has been free trialed :)</h5>
      </div>
      <div class="card-body">
        <div class="pb-3">
          <strong>Email : </strong><br>
          {{$data->email}}
        </div>
        <div class="pb-3">
          <strong>Category : </strong><br>
          {{$data->category}}
        </div>
        <div>
          <strong>Created Time : </strong><br>
          {{$data->created_at}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

